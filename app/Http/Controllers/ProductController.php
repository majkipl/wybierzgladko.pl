<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function powerSteamUltra()
    {
        return view('product/powerSteamUltra');
    }

    public function oneTemperature()
    {
        return view('product/oneTemperature');
    }

    public function impact()
    {
        return view('product/impact');
    }

    public function pearlGlideRose()
    {
        return view('product/pearlGlideRose');
    }

    public function steamGenie()
    {
        return view('product/steamGenie');
    }

    public function cordlessOneTemperature()
    {
        return view('product/cordlessOneTemperature');
    }

    public function copperExpress()
    {
        return view('product/copperExpress');
    }
}
