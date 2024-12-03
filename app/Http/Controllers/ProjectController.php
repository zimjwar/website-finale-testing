<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
  
    public function index(){
        return Project::all();
         }

         public function show($id){
            return Project::findOrFail($id);
         }
         public function store(Request $request){

            $request->validate ([
                'title'=>'required',
                'category_id'=>'required|exist:categories,id',
                'subcategory_id' => 'required|exist:subcategories,id',
            ]);
            return Project::create($request->all());
         }
 public function update(Request $request, $id){
               $project = Project::findOrFail($id);
               $project->update($request->all());
             return $project;
 }
 public function filter(Request $request)
{
    $categoryId = $request->input('category_id'); // Get selected category ID
    $projects = Project::where('category_id', $categoryId)->get();

    return view('projects.index', compact('projects'));
}
   public function destroy($id){
            $project=Project::findOrFail($id);
            $project->delete();
            return response()->json(['massage'=>'The Project is deleted']);  

        }
    }