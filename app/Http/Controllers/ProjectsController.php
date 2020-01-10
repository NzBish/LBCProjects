<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' =>['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('index')->with('projects',$projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'type' => 'required',
            'faculty' => 'required',
            'description' => 'required',
            'body' => 'required',
            'year' => 'required'
        ]);

      //Create Project
      $project = new Project;
      $project->title = $request->input('title');
      $project->type = $request->input('type');
      $project->faculty = $request->input('faculty');
      $project->description = $request->input('description');
      $project->body = $request->input('body');
      $project->year = $request->input('year');
      $project->user_id = auth()->user()->id;
      $project->save();

      return redirect('/projects')->with('success', 'Project Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
       
        return view('edit')->with('project', $project);
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
        $this->validate($request, [
            'title' => 'required',
            'type' => 'required',
            'faculty' => 'required',
            'description' => 'required',
            'body' => 'required',
            'year' => 'required'
        ]);

      //Create Project
      $project = Project::find($id);
      $project->title = $request->input('title');
      $project->type = $request->input('type');
      $project->faculty = $request->input('faculty');
      $project->description = $request->input('description');
      $project->body = $request->input('body');
      $project->year = $request->input('year');
      $project->save();

      return redirect('/projects')->with('success', 'Project Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/projects')->with('success', 'Project Deleted');
    }
}
