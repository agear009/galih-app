<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artis;
use Illuminate\Http\Request;

class PostNewsController extends Controller
{
    public function Index(){
        $Albums=Album::all();
        $Artist=artis::all();
        return view('Index.PostNews',["title"=>"Home","active"=>"Home"],compact('Albums','Artist'));
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
