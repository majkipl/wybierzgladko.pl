<?php

namespace App\Http\Controllers;

use App\Enums\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function powerSteamUltra()
    {
        $reviews = Review::getAllCachedBy(Product::PSU);
        return view('product/powerSteamUltra', ['reviews' => $reviews]);
    }

    public function oneTemperature()
    {
        $reviews = Review::getAllCachedBy(Product::OT);
        return view('product/oneTemperature', ['reviews' => $reviews]);
    }

    public function impact()
    {
        $reviews = Review::getAllCachedBy(Product::I);
        return view('product/impact', ['reviews' => $reviews]);
    }

    public function pearlGlideRose()
    {
        $reviews = Review::getAllCachedBy(Product::PGR);
        return view('product/pearlGlideRose', ['reviews' => $reviews]);
    }

    public function steamGenie()
    {
        $reviews = Review::getAllCachedBy(Product::SG);
        return view('product/steamGenie', ['reviews' => $reviews]);
    }

    public function cordlessOneTemperature()
    {
        $reviews = Review::getAllCachedBy(Product::COT);
        return view('product/cordlessOneTemperature', ['reviews' => $reviews]);
    }

    public function copperExpress()
    {
        $reviews = Review::getAllCachedBy(Product::CX);
        return view('product/copperExpress', ['reviews' => $reviews]);
    }
}
