<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return Skill::all();
    }

    public function show($id)
    {
        return Skill::findOrFail($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',  #|unique:skills'
            'description' =>'required',
        ]);

        return Skill::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $skill = Skill::findOrFail($id);
        $skill->update($request->all());

        return $skill;
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return response()->json(['message' => 'Skill deleted']);
    }
}
