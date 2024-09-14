<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function admin(){
    //     $data = Product::all();
    //         return view('page.admin');
    //     }
    public function product(){
        $title = 'product';
        $data = Product::all();
        return view('page.product');
    }
    public function getadmin(){
        $title = 'Trang quản trị admin';
        $data = Product::all();
        return view('page.admin');
    }





}
