<?php

namespace App\Http\Controllers;


use App\Models\Projects;
use App\Models\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Projects::all(); 
        return view ('template.template', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Projects::all();
        $skills = Skills::all(); 
        return view ('back-office.projectB', compact('projects', 'skills')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newProjects = new Projects; 
        $newProjects->src = $request->file('src')->hashName();
        $newProjects->nom = $request->nom; 
        $newProjects->description = $request->description; 
        $newProjects->tags = $request->tags; 
        $newProjects->save(); 
        $request->file('src')->storePublicly('img', 'public');
        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = Projects::find($id); 
        return view ('back-office.projectsBE', compact('datas')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $update = Projects::find($id); 
        Storage::disk('public')->delete('img/'.$update->src);
       $update->src = $request->file('src')->hashName();
       $update->nom = $request->nom; 
       $update->description = $request->description; 
       $update->tags = $request->tags; 

       $update->save(); 
       $request->file('src')->storePublicly('img', 'public');

       return redirect()->back(); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Projects::find($id); 
        $delete->delete(); 
        Storage::disk('public')->delete('img/'.$delete->src);
        return redirect()->back(); 
    }
}
