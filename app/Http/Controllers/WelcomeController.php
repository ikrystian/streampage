<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class WelcomeController extends Controller
{
    public function index()
    {
        $images  = Image::all();
        return view('welcome', ['images' => $images]);
    }
}
