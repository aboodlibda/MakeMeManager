<?php

namespace App\Http\Controllers;

use App\Models\Financier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user =User::findOrFail(Auth::id()) ;

//        dd($user);
        return view('MMM.edit-profile',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'jop' => 'required', 'string',
            'country' => 'required', 'string',
            'gender' => 'required', 'string',
            'address' => 'required', 'string', 'min:10',
            'birthday' => 'required',
            'image' => 'required',
            'bio' => 'required','string',
            'password' => 'required', 'string', 'min:8', 'confirmed',
        ]);

        $pass = $request->get('password');
        $user = new User();
        $user ->name=$request->get('name');
        $user ->email=$request->get('email');
        $user ->password=Hash::make($pass);
        $user ->birthday=$request->get('birthday');
        $user ->country=$request->get('country');
        $user ->gender=$request->get('gender');
        $user ->jop=$request->get('jop');
        $user ->address=$request->get('address');
        $user ->bio=$request->get('bio');
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->image->move(public_path('imageUsers/'), $imageName);
            $user ->image=($imageName);
        }
        $user->save();
        session()->flash('user_added');
        return redirect()->route('indexUsers');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('CMS.users.show_users',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        dd($id);
        $user = User::findOrFail($id);
        return view('CMS.users.edit_users',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd($request);
        $user = User::findOrFail($id);
        $user ->name=$request->get('name');
        $user ->email=$request->get('email');
        $user ->birthday=$request->get('birthday');
        $user ->gender=$request->get('gender');
        $user ->country=$request->get('country');
        $user ->jop=$request->get('jop');
        $user ->address=$request->get('address');
        $user ->bio=$request->get('bio');
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->image->move(public_path('imageUsers/'), $imageName);
            $user ->image=($imageName);
        }

        session()->flash('user_edited');
        $user->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        User::findOrFail($id)->delete();


        session()->flash('User_deleted');
        return redirect()->route('indexUsers');

    }




    public function indexUsers()
    {
        $users = User::latest()->paginate(10);
        return view('CMS.users.index_users',compact('users'));
    }





}
