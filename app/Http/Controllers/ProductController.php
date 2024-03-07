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
        return View('Product.Index',["title"=>"Home",'active'=>'Product'],compact('Product','no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Category=category::all();
        return view('Product.Create',["title"=>"Home",'active'=>'Product'],compact('Category'));
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
            'id_category'=>'required|max:255',
            'produsen'=>'required|max:255',
            'image'=>'required|image|mimes:jpeg,jpg,png|max:2048',
            'name'=>'required|min:2|max:255',
            'size'=>'required|max:255',
            'stock'=>'max:255',
            'price'=>'max:255',
            'description'=>'required'

        ]);

          //upload image3
          $image=$request->file('image');
          $image-> storeAs('public/products', $image->hashName());

          $gambartestimoni=$request->file('gambartestimoni');
          $gambartestimoni-> storeAs('public/products', $gambartestimoni->hashName());

          $imagevideo=$request->file('imagevideo');
          $imagevideo-> storeAs('public/products', $imagevideo->hashName());

          //create product
          product::create([
              'image'=>$image->hashName(),
              'id_category'=>$request->id_category,
              'produsen'=>$request->produsen,
              'name'=>$request->name,
              'size'=>$request->size,
              'stock'=>$request->stock,
              'price'=>$request->price,
              'description'=>$request->description,
              'headline'=>$request->headline,
              'imagevideo'=>$imagevideo->hashName(),
              'masalah'=>$request->masalah,
              'solusi'=>$request->solusi,
              'manfaat'=>$request->manfaat,
              'gambartestimoni'=>$gambartestimoni->hashName(),
              'bonus'=>$request->bonus,
              'kontak'=>$request->kontak,
              'kelangkaan'=>$request->kelangkaan,
              'kerugian'=>$request->kerugian

                 ]);
          //redirect to index
          return Redirect('products.index',["title"=>"product",'active'=>'Product'])->with(['success'=>'data success ditambahkan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Product=product::findORfail($id);
        $Category=category::all();
        return view('Product.Edit',["title"=>"product",'active'=>'Product'],compact('Product','Category'));
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

            'id_category'=>'required|max:255',
            'produsen'=>'required|max:255',
            'name'=>'required|max:255',
            'image'=>'image|mimes:jpeg,jpg,png|max:2048',
            'size'=>'required|max:255',
            'stock'=>'required|max:255',
            'price'=>'required|max:255',
            'description'=>'required',
            'headline'=>'required|max:255',
            'imagevideo'=>'image|mimes:jpeg,jpg,png|max:2048',
            'masalah'=>'required',
            'solusi'=>'required',
            'manfaat'=>'required',
            'gambartestimoni'=>'image|mimes:jpeg,jpg,png|max:2048',
            'bonus'=>'required',
            'kontak'=>'required',
            'kelangkaan'=>'required',
            'kerugian'=>'required'

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
              'id_category'=>$request->id_category,
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
              'kerugian'=>$request->kerugian
            ]);

        }
        elseif($request->hasFile('imagevideo'))
            {
                //upload new image
                $imagevideo=$request->file('imagevideo');

                $imagevideo->storeAs('public/products',$imagevideo->hashName());


                //delete old image
                Storage::delete('public/products/'.$product->imagevideo);

                //update product with new image
                $product->update([
                'id_category'=>$request->id_category,
                'produsen'=>$request->produsen,
                'name'=>$request->name,
                'size'=>$request->size,
                'stock'=>$request->stock,
                'price'=>$request->price,
                'description'=>$request->description,
                'headline'=>$request->headline,
                'imagevideo'=>$imagevideo->hashName(),
                'masalah'=>$request->masalah,
                'solusi'=>$request->solusi,
                'manfaat'=>$request->manfaat,
                'bonus'=>$request->bonus,
                'kontak'=>$request->kontak,
                'kelangkaan'=>$request->kelangkaan,
                'kerugian'=>$request->kerugian
                ]);

            }
        elseif($request->hasFile('gambartestimoni'))
            {
                //upload new image
                $gambartestimoni=$request->file('gambartestimoni');

                $gambartestimoni->storeAs('public/products',$gambartestimoni->hashName());


                //delete old image
                Storage::delete('public/products/'.$product->gambartestimoni);

                //update product with new image
                $product->update([
                'id_category'=>$request->id_category,
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
                'gambartestimoni'=>$gambartestimoni->hashName(),
                'bonus'=>$request->bonus,
                'kontak'=>$request->kontak,
                'kelangkaan'=>$request->kelangkaan,
                'kerugian'=>$request->kerugian
                ]);

            }
        else
        {
            $product->update([
                'id_category'=>$request->id_category,
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
                'kerugian'=>$request->kerugian
            ]);

        }
        return redirect('products.index',["title"=>"product"])->with(['success'=>'data berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $product=product::findOrFail($id);

        //delete image

        Storage::delete('public/products/'. $product->image);
        Storage::delete('public/products/'. $product->imagevideo);
        Storage::delete('public/products/'. $product->gambartestimoni);

        // delete product
        $product->delete();

        //redirect to index
        return redirect('products.index',["title"=>"product"])->with(['success'=>'data telah berhasil di delete!']);
    }
}
