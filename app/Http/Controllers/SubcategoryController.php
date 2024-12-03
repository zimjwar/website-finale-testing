<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    public function index(){
        return Subcategory::all();
    }
   
    public function show($id){
        return Subcategory::findOrFail($id);
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'category_id'=>'required|exists:categories,id',
        ]);
        return Subcategory::create($request->all());
          }

          public function update(Request $request, $id)
          {
              $subcategory = Subcategory::findOrFail($id);
              $subcategory->update($request->all());
      
              return $subcategory;
          }
      
          public function destroy($id)
          {
              $subcategory = Subcategory::findOrFail($id);
              $subcategory->delete();
      
              return response()->json(['message' => 'Subcategory deleted']);
          }
      }
