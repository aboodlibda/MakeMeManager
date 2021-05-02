<?php

namespace App\Http\Controllers;

use App\Models\Financier;
use App\Models\Funded;
use App\Models\Project;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FinancierController extends Controller
{

    protected function guard()
    {
        return Auth::guard('financier');
    }



    public function index ()
    {
        $financiers = Financier::all();
        return view('MMM.financiers',compact('financiers'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:financiers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $financier= Financier::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $this->guard()->login($financier);

        return redirect()->route('home');
    }

    public function update (Request $request ,$id)
    {

        $financier = Financier::findOrFail($id);
        $financier ->name=$request->get('name');
        $financier ->email=$request->get('email');
        $financier ->birthday=$request->get('birthday');
        $financier ->gender=$request->get('gender');
        $financier ->country=$request->get('country');
        $financier ->jop=$request->get('jop');
        $financier ->address=$request->get('address');
        $financier ->bio=$request->get('bio');
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->image->move(public_path('imageFinanciers/'), $imageName);
            $financier ->image=($imageName);
        }

        $financier->save();
        session()->flash('financier_edited');
        return redirect()->back();
    }



    public function loginForm ()
    {
        return view('auth.financierLogin');
    }



    public function checkLogin (Request $request)
    {

        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if (Auth::guard('financier')->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect()->route('home');
        }
        return back()->withInput($request->only('email'));
    }



    public function registerForm ()
    {
        return view('auth.financierRegister');
    }



    public function financeProject (Request $request)
    {
        $project_id = $request->get('project_id');
        $funded = new Funded();
        $funded-> total_funding=$request->get('total_funding');
        $funded-> financier_id=Auth::guard('financier')->id();
        $funded-> project_id=$request->get('project_id');
        $rdio = $request->rdio;
        if ($rdio ==1){
            $funded ->reward_description=$request->get('reward_description');
        }else{
            $funded ->investment_ratio=$request->get('investment_ratio');
        }
        $funded->save();
        $project = Project::findOrFail($project_id);
        $project->isFunded=Auth::guard('financier')->id();
        $project->save();
        session()->flash('project_financed');
        return redirect()->back();
    }


    public function financierProfile ($id)
    {
        $financier =Financier::findOrFail($id);
        return view('MMM.edit-financier-profile',compact('financier'));
    }

    public function indexFinanciers ()
    {
        $financiers = Financier::paginate(10);
        return view('CMS.users.index_financiers',compact('financiers'));
    }



}
