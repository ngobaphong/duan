<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function Home(){
    // $data = Product::all();
        return view('page.home');
    }
}
