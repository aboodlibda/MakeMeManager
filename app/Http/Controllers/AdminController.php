<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Financier;
use App\Models\Funded;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function loginForm ()
    {
        return view('html.default.auth.login');
    }


    public function checkLogin (Request $request)
    {

        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect()->route('dashboard');
        }
        return back()->withInput($request->only('email'));
    }


    public function indexProjects ()
    {
        $description = Project::all()->pluck('description');

                $one = strtoupper($description);
                $two = strtoupper($description);
                $result = similar_text ($one, $two, $percent);

        $projects = Project::latest()->paginate(10);
        return view('CMS.projects.index_projects',compact('projects'));
    }

    public function indexFundedProjects ()
    {
        $funded = Funded::latest()->paginate(10);
        return view('CMS.projects.index_funded_projects',compact('funded'));
    }


    public function dashboard ()
    {
        $users = User::all()->count();
        $projects = Project::all()->count();
        $financiers = Financier::all()->count();
        $funded = Funded::all()->count();
        return view('CMS.dashboard',compact('users','projects','financiers','funded'));

    }




    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
