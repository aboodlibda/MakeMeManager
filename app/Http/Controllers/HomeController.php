<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application CMS.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('MMM.index');
    }

    public function allProjects ()
    {
        $projects = Project::all();
        return view('MMM.index',compact('projects'));
    }

    public function entrepreneurs ()
    {
        $users = User::all();
        return view('MMM.entrepreneurs',compact('users'));
    }
}
