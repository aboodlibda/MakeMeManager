<?php

namespace App\Http\Controllers;

use App\Models\Financier;
use App\Models\Funded;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Json;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create','store','edit','update']]);
    }

    /**
     * Show the application CMS.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::all();
        $funded = Funded::paginate(9);
        $financiers = Financier::paginate(9);
        $users = User::paginate(9);
        return view('MMM.index',compact('projects','funded','financiers','users'));
    }

//    public function allProjects ()
//    {
//        $projects = Project::all();
//        return view('MMM.index',compact('projects'));
//    }

    public function entrepreneurs ()
    {
        $users = User::all();
        return view('MMM.entrepreneurs',compact('users'));
    }


//    public function getData ($name)
//    {
//        return User::where('name',$name);
//    }

    public function send (Request $req)
    {
        dd($req);
        $user = new User();
        $user->name=$req->get('name');
        $user->email=$req->get('email');
        $user->password=Hash::make($req->get('password'));
        $Result = $user->save();
        if ($Result)
        {
//            return DB::table('users')->latest('name')->first();

            return ('Operation Success');
        }else{
            return ('Operation Failed');
        }
    }


}
