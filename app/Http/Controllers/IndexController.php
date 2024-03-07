<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index(){

        return view('Index.Index',["title"=>"Home","active"=>"Home"]);
    }

    public function Profile(){
        return view('Index.Profile',["title"=>"Home","active"=>"Profile"]);
    }

    Public function Product(){
        return view('Product.Product',["title"=>"Home","active"=>"Product"]);
    }

    Public function Produk(){
        return view('Product.Produk',["title"=>"Home","active"=>"Produk"]);
    }

    public function Admin(){
        return view('Admin.Index',["title"=>"Home","active"=>"Home"]);
    }
}
