<?php

namespace App\Http\Controllers;

use App\Models\Review;;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return Review::all();
    }

    public function show($id)
    {
        return Review::findOrFail($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'reviewer_id' => 'required|exists:users,id',
            'review' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        return Review::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        $review->update($request->all());

        return $review;
    }

    public function showReviews($projectId)
{
    $reviews = Review::where('project_id', $projectId)->get();

    return view('reviews.index', compact('reviews'));
}

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return response()->json(['message' => 'Review deleted']);
    }
}
