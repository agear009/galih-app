<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostNewsController extends Controller
{
    public function Index(){
        return view('Index.PostNews',["title"=>"Home","active"=>"Home"]);
    }

    public function Profile(){
        return view('Index.Profile',["title"=>"Proffile","active"=>"Profile"]);
    }

    Public function Product(){
        return view('Product.Product',["title"=>"Product","active"=>"Product"]);
    }

    Public function Produk(){
        return view('Product.Produk',["title"=>"Produk","active"=>"Produk"]);
    }

    public function Admin(){
        return view('Admin.Index',["title"=>"Admin","active"=>"Home"]);
    }
}
