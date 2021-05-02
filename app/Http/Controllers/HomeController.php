<?php

namespace App\Http\Controllers;

use App\Models\Financier;
use App\Models\Funded;
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
//        $this->middleware('auth', ['only' => ['create','store','edit','update']]);
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




}
