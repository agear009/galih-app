<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Product;
use App\Http\Requests\StoreContentRequest;
use App\Http\Requests\UpdateContentRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class ContentController extends Controller
{

        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $no=0;
            $no++;
            //$Content=content::all();
            $modelcontent = new content;
            $Content=$modelcontent->getListcontents();
            return View('Content.Index',["title"=>"Content","active"=>"Content"],compact('Content','no'));
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            $Product=product::all();
            return view('Content.Create',["title"=>"Content","active"=>"Content"],compact('Product'));
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
                'image_video'=>'required|image|mimes:jpeg,jpg,png|max:2048',

            ]);
            $image_video=$request->file('image_video');
            $image_video-> storeAs('public/Contents', $image_video->hashName());

            content::create([
                'product_id'=>$request->product_id,
                'image_video'=>$image_video->hashName()

                   ]);
            //redirect to index
            return redirect()->route('contents.index')->with(['success'=>'data success ditambahkan!']);


        }

        /**
         * Display the specified resource.
         */
        public function show($id)
        {
            //$Content=Content::where('product_id','=',$id)->get();
            $modelcontentById = new content;
            $Content=$modelcontentById->getListContentsById($id);
            return view('Content.Show',["title"=>"Content","active"=>"Content"],compact('Content'));
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            //dd($id);
           $Content=Content::findORfail($id);

            // $modelcontentById = new content;
            // $Content=$modelcontentById->getListContentsById($id);
            $Product=product::all();
            return view('Content.Edit',["title"=>"Content","active"=>"Content"],compact('Content','Product'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, $id): RedirectResponse
        {

            $this->validate($request,[

                'product_id'=>'required|max:255',


            ]);
            $Content=Content::FindOrFail($id);

            if($request->hasFile('image_video'))
            {
                //upload new image
                $image_video=$request->file('image_video');

                $image_video->storeAs('public/Contents',$image_video->hashName());


                //delete old image
                Storage::delete('public/Contents/'. $Content->image_video);

                //update Content with new image
                $Content->update([
                  'product_id'=>$request->product_id,
                  'image_video'=>$image_video->hashName()

                ]);

            }

            else
            {
                $Content->update([
                    'product_id'=>$request->product_id,

                ]);

            }
            return redirect()->route('contents.index')->with(['success'=>'data berhasil diubah!']);
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy($id): RedirectResponse
        {
            $Content=content::findOrFail($id);
            //delete image
            Storage::delete('public/Contents/'. $Content->image_video);
            // delete Content
            $Content->delete();

            //redirect to index
            return redirect()->route('contents.index')->with(['success'=>'data telah berhasil di delete!']);
        }



}
