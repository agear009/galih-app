<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no=0;
        $no++;
        $Product=product::all();
        return View('Product.Index',["title"=>"Product","active"=>"Product"],compact('Product','no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Category=category::all();
        return view('Product.Create',["title"=>"Product","active"=>"Product"],compact('Category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(request $request): RedirectResponse
    {
        $no=0;
        $no++;
        //dd($request);
        $this->validate($request,[
            'category_id'=>'required|max:255',
            'produsen'=>'required|max:255',
            'image'=>'required|image|mimes:jpeg,jpg,png|max:2048',
            'name'=>'required|min:2|max:255',
            'size'=>'required|max:255',
            'stock'=>'max:255',
            'price'=>'max:255',
            'description'=>'required',
            'phone1'=>'required'

        ]);
        if($request->gambar_testimoni=='' AND $request->image_video=='')
        {
            $image=$request->file('image');
            $image->storeAs('public/products', $image->hashName());

            $image_video="belum ada gambar";
            $gambar_testimoni="belum ada gambar";
            $phone2='null';
            $phone3='null';
            $phone4='null';
            $phone5='null';

            product::create([
                'image'=>$image->hashName(),
                'category_id'=>$request->category_id,
                'produsen'=>$request->produsen,
                'name'=>$request->name,
                'size'=>$request->size,
                'stock'=>$request->stock,
                'price'=>$request->price,
                'description'=>$request->description,
                'headline'=>$request->headline,
                'image_video'=>$image_video,
                'masalah'=>$request->masalah,
                'solusi'=>$request->solusi,
                'manfaat'=>$request->manfaat,
                'gambar_testimoni'=>$gambar_testimoni,
                'bonus'=>$request->bonus,
                'kontak'=>$request->kontak,
                'kelangkaan'=>$request->kelangkaan,
                'kerugian'=>$request->kerugian,
                'phone1'=>$request->phone1,
                'phone2'=>$phone2,
                'phone3'=>$phone3,
                'phone4'=>$phone4,
                'phone5'=>$phone5


                   ]);
            //redirect to index
            return redirect()->route('products.index')->with(['success'=>'data success ditambahkan!']);


        }
        else{
            $phone2='null';
            $phone3='null';
            $phone4='null';
            $phone5='null';
          //upload image3
          $image=$request->file('image');
          $image-> storeAs('public/products', $image->hashName());

          $gambar_testimoni=$request->file('gambar_testimoni');
          $gambar_testimoni-> storeAs('public/testimonials', $gambar_testimoni->hashName());

          $image_video=$request->file('image_video');
          $image_video-> storeAs('public/Contents', $image_video->hashName());

          //create product
          product::create([
              'image'=>$image->hashName(),
              'category_id'=>$request->category_id,
              'produsen'=>$request->produsen,
              'name'=>$request->name,
              'size'=>$request->size,
              'stock'=>$request->stock,
              'price'=>$request->price,
              'description'=>$request->description,
              'headline'=>$request->headline,
              'image_video'=>$image_video->hashName(),
              'masalah'=>$request->masalah,
              'solusi'=>$request->solusi,
              'manfaat'=>$request->manfaat,
              'gambar_testimoni'=>$gambar_testimoni->hashName(),
              'bonus'=>$request->bonus,
              'kontak'=>$request->kontak,
              'kelangkaan'=>$request->kelangkaan,
              'kerugian'=>$request->kerugian,
              'phone1'=>$request->phone1,
              'phone2'=>$phone2,
              'phone3'=>$phone3,
              'phone4'=>$phone4,
              'phone5'=>$phone5

                 ]);
          //redirect to index
          return redirect()->route('products.index')->with(['success'=>'data success ditambahkan!']);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Product=product::findOrFail($id);
        return view('Product.Show',["title"=>"Product","active"=>"Product"],compact('Product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Product=product::findORfail($id);
        $Category=category::all();
        return view('Product.Edit',["title"=>"Product","active"=>"Product"],compact('Product','Category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $no=0;
        $no++;
        //dd($request);
        $this->validate($request,[

            'category_id'=>'required|max:255',
            'produsen'=>'required|max:255',
            'name'=>'required|max:255',
            'image'=>'image|mimes:jpeg,jpg,png|max:2048',
            'size'=>'required|max:255',
            'stock'=>'required|max:255',
            'price'=>'required|max:255',
            'description'=>'required',
            'headline'=>'required|max:255',
            'image_video'=>'image|mimes:jpeg,jpg,png|max:2048',
            'masalah'=>'required',
            'solusi'=>'required',
            'manfaat'=>'required',
            'gambar_testimoni'=>'image|mimes:jpeg,jpg,png|max:2048',
            'bonus'=>'required',
            'kontak'=>'required',
            'kelangkaan'=>'required',
            'kerugian'=>'required',
            'phone1'=>'required'

        ]);
        $product=product::FindOrFail($id);

        if($request->hasFile('image'))
        {
            //upload new image
            $image=$request->file('image');

            $image->storeAs('public/products',$image->hashName());


            //delete old image
            Storage::delete('public/products/'.$product->image);

            //update product with new image
            $product->update([
              'image'=>$image->hashName(),
              'category_id'=>$request->category_id,
              'produsen'=>$request->produsen,
              'name'=>$request->name,
              'size'=>$request->size,
              'stock'=>$request->stock,
              'price'=>$request->price,
              'description'=>$request->description,
              'headline'=>$request->headline,
              'masalah'=>$request->masalah,
              'solusi'=>$request->solusi,
              'manfaat'=>$request->manfaat,
              'bonus'=>$request->bonus,
              'kontak'=>$request->kontak,
              'kelangkaan'=>$request->kelangkaan,
              'kerugian'=>$request->kerugian,
              'phone1'=>$request->phone1,
              'phone2'=>$request->phone2,
              'phone3'=>$request->phone3,
              'phone4'=>$request->phone4,
              'phone5'=>$request->phone5
            ]);

        }
        elseif($request->hasFile('image_video'))
            {
                //upload new image
                $image_video=$request->file('image_video');

                $image_video->storeAs('public/contents',$image_video->hashName());


                //delete old image
                Storage::delete('public/products/'.$product->image_video);

                //update product with new image
                $product->update([
                'category_id'=>$request->category_id,
                'produsen'=>$request->produsen,
                'name'=>$request->name,
                'size'=>$request->size,
                'stock'=>$request->stock,
                'price'=>$request->price,
                'description'=>$request->description,
                'headline'=>$request->headline,
                'image_video'=>$image_video->hashName(),
                'masalah'=>$request->masalah,
                'solusi'=>$request->solusi,
                'manfaat'=>$request->manfaat,
                'bonus'=>$request->bonus,
                'kontak'=>$request->kontak,
                'kelangkaan'=>$request->kelangkaan,
                'kerugian'=>$request->kerugian,
                'phone1'=>$request->phone1,
                'phone2'=>$request->phone2,
                'phone3'=>$request->phone3,
                'phone4'=>$request->phone4,
                'phone5'=>$request->phone5
                ]);

            }
        elseif($request->hasFile('gambar_testimoni'))
            {
                //upload new image
                $gambar_testimoni=$request->file('gambar_testimoni');

                $gambar_testimoni->storeAs('public/testimonials',$gambar_testimoni->hashName());


                //delete old image
                Storage::delete('public/products/'.$product->gambar_testimoni);

                //update product with new image
                $product->update([
                'category_id'=>$request->category_id,
                'produsen'=>$request->produsen,
                'name'=>$request->name,
                'size'=>$request->size,
                'stock'=>$request->stock,
                'price'=>$request->price,
                'description'=>$request->description,
                'headline'=>$request->headline,
                'masalah'=>$request->masalah,
                'solusi'=>$request->solusi,
                'manfaat'=>$request->manfaat,
                'gambar_testimoni'=>$gambar_testimoni->hashName(),
                'bonus'=>$request->bonus,
                'kontak'=>$request->kontak,
                'kelangkaan'=>$request->kelangkaan,
                'kerugian'=>$request->kerugian,
                'phone1'=>$request->phone1,
                'phone2'=>$request->phone2,
                'phone3'=>$request->phone3,
                'phone4'=>$request->phone4,
                'phone5'=>$request->phone5
                ]);

            }
        else
        {
            $product->update([
                'category_id'=>$request->category_id,
                'produsen'=>$request->produsen,
                'name'=>$request->name,
                'size'=>$request->size,
                'stock'=>$request->stock,
                'price'=>$request->price,
                'description'=>$request->description,
                'headline'=>$request->headline,
                'masalah'=>$request->masalah,
                'solusi'=>$request->solusi,
                'manfaat'=>$request->manfaat,
                'bonus'=>$request->bonus,
                'kontak'=>$request->kontak,
                'kelangkaan'=>$request->kelangkaan,
                'kerugian'=>$request->kerugian,
                'phone1'=>$request->phone1,
                'phone2'=>$request->phone2,
                'phone3'=>$request->phone3,
                'phone4'=>$request->phone4,
                'phone5'=>$request->phone5
            ]);

        }
        return redirect()->route('products.index')->with(['success'=>'data berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $product=product::findOrFail($id);

        //delete image

        Storage::delete('public/products/'. $product->image);
        Storage::delete('public/contents/'. $product->image_video);
        Storage::delete('public/testimonials/'. $product->gambar_testimoni);

        // delete product
        $product->delete();

        //redirect to index
        return redirect()->route('products.index')->with(['success'=>'data telah berhasil di delete!']);
    }
}
