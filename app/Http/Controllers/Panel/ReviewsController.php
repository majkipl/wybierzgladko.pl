<?php

namespace App\Http\Controllers\Panel;

use App\Enums\Product;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        return view('panel/review/index');
    }

    public function create()
    {
        $products = Product::toSelect();

        return view('panel/review/form', [
            'products' => $products
        ]);
    }

    public function show(Review $review)
    {
        return view('panel/review/show', [
            'review' => $review
        ]);
    }

    public function edit(Review $review)
    {
        $products = Product::toSelect();

        return view('panel/review/form', [
            'review' => $review,
            'products' => $products
        ]);
    }
}
