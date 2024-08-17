<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Product;
use App\Http\Requests\StoretestimonialRequest;
use App\Http\Requests\UpdatetestimonialRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class TestimonialController extends Controller
{

        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $no=0;
            $no++;
            //$Testimonial=testimonial::all();
            $modeltestimonial = new testimonial;
            $Testimonial=$modeltestimonial->getListtestimonials();
            return View('Testimonial.Index',["title"=>"Testimonial","active"=>"testimonial"],compact('Testimonial','no'));
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            $Product=product::all();
            return view('Testimonial.Create',["title"=>"Testimonial","active"=>"testimonial"],compact('Product'));
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
                'product_id'=>'required|max:255',
                'gambar_testimoni'=>'required|image|mimes:jpeg,jpg,png|max:2048',

            ]);
            $gambar_testimoni=$request->file('gambar_testimoni');
            $gambar_testimoni-> storeAs('public/Testimonials', $gambar_testimoni->hashName());

            testimonial::create([
                'product_id'=>$request->product_id,
                'gambar_testimoni'=>$gambar_testimoni->hashName()

                   ]);
            //redirect to index
            return redirect()->route('testimonials.index')->with(['success'=>'data success ditambahkan!']);


        }

        /**
         * Display the specified resource.
         */
        public function show($id)
        {
            //$Testimonial=testimonial::where('product_id','=',$id)->get();
            $modeltestimonialById = new testimonial;
            $Testimonial=$modeltestimonialById->getListtestimonialsById($id);
            return view('Testimonial.Show',["title"=>"Testimonial","active"=>"testimonial"],compact('Testimonial'));
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            //dd($id);
           $Testimonial=testimonial::findORfail($id);

            // $modeltestimonialById = new testimonial;
            // $Testimonial=$modeltestimonialById->getListtestimonialsById($id);
            $Product=product::all();
            return view('Testimonial.Edit',["title"=>"Testimonial","active"=>"testimonial"],compact('Testimonial','Product'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, $id): RedirectResponse
        {

            $this->validate($request,[

                'product_id'=>'required|max:255',


            ]);
            $Testimonial=testimonial::FindOrFail($id);

            if($request->hasFile('gambar_testimoni'))
            {
                //upload new image
                $gambar_testimoni=$request->file('gambar_testimoni');

                $gambar_testimoni->storeAs('public/Testimonials',$gambar_testimoni->hashName());


                //delete old image
                Storage::delete('public/Testimonials/'. $Testimonial->gambar_testimoni);

                //update testimonial with new image
                $Testimonial->update([
                  'product_id'=>$request->product_id,
                  'gambar_testimoni'=>$gambar_testimoni->hashName()

                ]);

            }

            else
            {
                $Testimonial->update([
                    'product_id'=>$request->product_id,

                ]);

            }
            return redirect()->route('testimonials.index')->with(['success'=>'data berhasil diubah!']);
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy($id): RedirectResponse
        {
            $Testimonial=testimonial::findOrFail($id);
            //delete image
            Storage::delete('public/Testimonials/'. $Testimonial->gambar_testimoni);
            // delete testimonial
            $Testimonial->delete();

            //redirect to index
            return redirect()->route('testimonials.index')->with(['success'=>'data telah berhasil di delete!']);
        }



}
