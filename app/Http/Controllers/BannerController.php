<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
        {
            $no=0;
            $no++;
            //$banner=banner::all();
            $modelbanner = new banner;
            $Banner=$modelbanner->getListbanners();
            return View('Banner.Index',["title"=>"Banner","active"=>"Banner"],compact('Banner','no'));
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            $Product=product::all();
            return view('Banner.Create',["title"=>"Banner","active"=>"Banner"],compact('Product'));
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
                'banner'=>'required|image|mimes:jpeg,jpg,png|max:2048',

            ]);
            $banner=$request->file('banner');
            $banner-> storeAs('public/Banners', $banner->hashName());

            banner::create([
                'product_id'=>$request->product_id,
                'banner'=>$banner->hashName()

                   ]);
            //redirect to index
            return redirect()->route('banners.index')->with(['success'=>'data success ditambahkan!']);


        }

        /**
         * Display the specified resource.
         */
        public function show($id)
        {
            $Banner=banner::findOrfail($id)->get();
            // $modelbannerById = new banner;
            // $banner=$modelbannerById->getListbannerById($id);
            return view('Banner.Show',["title"=>"Banner","active"=>"Banner"],compact('Banner'));
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            //dd($id);
           $Banner=banner::findORfail($id);

            // $modelbannerById = new banner;
            // $banner=$modelbannerById->getListbannerById($id);
            $Product=product::all();
            return view('Banner.Edit',["title"=>"Banner","active"=>"Banner"],compact('Banner','Product'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, $id): RedirectResponse
        {

            $this->validate($request,[

                'product_id'=>'required|max:255',


            ]);
            $Banner=banner::FindOrFail($id);

            if($request->hasFile('banner'))
            {
                //upload new image
                $banner=$request->file('banner');

                $banner->storeAs('public/Banners',$banner->hashName());


                //delete old image
                Storage::delete('public/Banners/'. $Banner->banner);

                //update banner with new image
                $Banner->update([
                  'product_id'=>$request->product_id,
                  'banner'=>$banner->hashName()

                ]);

            }

            else
            {
                $Banner->update([
                    'product_id'=>$request->product_id,

                ]);

            }
            return redirect()->route('banners.index')->with(['success'=>'data berhasil diubah!']);
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy($id): RedirectResponse
        {
            $Banner=banner::findOrFail($id);
            //delete image
            Storage::delete('public/Banners/'. $Banner->banner);
            // delete banner
            $Banner->delete();

            //redirect to index
            return redirect()->route('banners.index')->with(['success'=>'data telah berhasil di delete!']);
        }
}
