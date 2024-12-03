<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index()
    {
        return Certification::all();
    }

    public function show($id)
    {
        return Certification::findOrFail($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required,' #|unique:certifications
        ]);

        return Certification::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $certification = Certification::findOrFail($id);
        $certification->update($request->all());

        return $certification;
    }

    public function destroy($id)
    {
        $certification = Certification::findOrFail($id);
        $certification->delete();

        return response()->json(['message' => 'Certification deleted']);
    }
}
