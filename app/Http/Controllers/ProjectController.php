<?php

namespace App\Http\Controllers;

use


    App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('MMM.projects.projects',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MMM.projects.add-project');
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
            'title' => 'required|String|min:10',
            'category' => 'required:String',
            'requested_financing' => 'required|String|numeric',
            'country' => 'required|String',
            'publication_date' => 'required',
            'minimum_amount' => 'required',
            'funding_goal' => 'required',
            'duration' => 'required|numeric',
            'description' => 'required|String',
            'link' => 'required|String',
        ]);

            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->image->move(public_path('Images/'), $imageName);
            $projects = new Project();

            $projects ->image=($imageName);

        $projects ->title=$request->get('title');
        $projects ->category=$request->get('category');
        $projects ->requested_financing=$request->get('requested_financing');
        $projects ->country=$request->get('country');
        $projects ->publication_date=$request->get('publication_date');
        $projects ->minimum_amount=$request->get('minimum_amount');
        $projects ->funding_goal=$request->get('funding_goal');
        $projects ->duration=$request->get('duration');
        $projects ->description=$request->get('description');
        $projects ->link=$request->get('link');
        $projects ->user_id= auth()->id();
        $rdio = $request->rdio;
        if ($rdio ==1){
            $projects ->reward_description=$request->get('reward_description');
        }else{
            $projects ->investment_ratio=$request->get('investment_ratio');
        }

        $projects->save();
        session()->flash('project_added');
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects = Project::findOrFail($id);
        $latest = Project::all();
        return view('MMM.projects.single-project',compact('projects','latest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('MMM.projects.edit-project',compact('project'));
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
//dd($request);
        $project = Project::findOrFail($id);
        $project->title=$request->get('title');
        $project->category=$request->get('category');
        $project->requested_financing=$request->get('requested_financing');
        $project->country=$request->get('country');
        $project->publication_date=$request->get('publication_date');
        $project->funding_goal=$request->get('funding_goal');
        $project->minimum_amount=$request->get('minimum_amount');
        $project->duration=$request->get('duration');
        $project->description=$request->get('description');
        $project->link=$request->get('link');
        if ($request->hasFile('image')){

            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->image->move(public_path('Images/'), $imageName);
            $project ->image=($imageName);
        }

        $rdio = $request->rdio;
        if ($rdio ==1){
            $project ->reward_description=$request->get('reward_description');
        }else{
            $project ->investment_ratio=$request->get('investment_ratio');
        }
//        dd($project);
        $project->save();
        session()->flash('project_updated');
        return redirect()->route('myProjects');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);

    }



    public function myProjects ()
    {
        $projects = Project::where('user_id',Auth::id())->get();
        return view('MMM.projects.my-projects',compact('projects'));

    }




}
