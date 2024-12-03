<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bid;

class BidController extends Controller
{
    
    public function index()
    {
        return Bid::all();
    }

    public function show($id)
    {
        return Bid::findOrFail($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'user_id' => 'required|exists:users,id',
        ]);

        return Bid::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $bid = Bid::findOrFail($id);
        $bid->update($request->all());

        return $bid;
    }

    public function destroy($id)
    {
        $bid = Bid::findOrFail($id);
        $bid->delete();

        return response()->json(['message' => 'Bid deleted']);
    }
}
