<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Banner;
use App\Models\Content;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;


class LandingController extends Controller
{
    public function show($id)
    {
        $no=0;
        $no++;
        $Product=product::findOrFail($id);
        $Testimonial=testimonial::where('product_id','=',$id)->get();
        $Banner=banner::where('product_id','=',$id)->get();
        $Content=content::where('product_id','=',$id)->get();

        return View('Index.Promotion',["title"=>"Promotion","active"=>"Promotion"],compact('Product','Testimonial','Banner','Content'));
    }
}
