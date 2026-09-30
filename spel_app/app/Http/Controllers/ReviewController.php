<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        $products = Product::all();

        return view('reviews.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'review' => 'required',
        ]);

        $review = new Review();
        $review->product_id = $request->product_id;
        $review->review = $request->review;
        $review->save();

        return redirect()->route('reviews.index');
    }

    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'review' => 'required',
        ]);

        $review->review = $request->review;
        $review->save();

        return redirect()->route('reviews.index');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('reviews.index');
    }
}