<?php

namespace App\Http\Controllers;

use App\Models\Copywrite;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCopywriteRequest;
use App\Http\Requests\UpdateCopywriteRequest;

class CopywriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no=0;
        $no++;
        $Copywrite=copywrite::all();
        return view('CopyWrite.Index',["title"=>"CopyWrite","active"=>"CopyWrite"],compact('Copywrite','no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Product=Product::all();
        return view('Copywrite.create',["title"=>"CopyWrite","active"=>"CopyWrite"],compact('Product'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[


            'headline'=>'required|min:2',
            'masalah'=>'required|min:2',
            'solusi'=>'required|min:2',
            'manfaat'=>'required|min:2',
            'bonus'=>'required|min:2',
            'kontak'=>'required|min:2',
            'kelangkaan'=>'required|min:2',
            'kerugian'=>'required|min:2'
        ]);
        copywrite::create([

            'headline'=>$request->headline,
            'masalah'=>$request->masalah,
            'solusi'=>$request->solusi,
            'manfaat'=>$request->manfaat,
            'bonus'=>$request->bonus,
            'kontak'=>$request->kontak,
            'kelangkaan'=>$request->kelangkaan,
            'kerugian'=>$request->kerugian

              ]);
        //redirect to index
    return redirect()->route('copy-writes.index')->with(['success'=>'data success ditambahkan!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $CopyWrite=copywrite::findOrFail($id);
        return view('Copywrite.Show',["title"=>"CopyWrite","active"=>"CopyWrite"],compact('CopyWrite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $CopyWrite=copywrite::findOrFail($id);
        return view('Copywrite.Edit',["title"=>"CopyWrite","active"=>"CopyWrite"],compact('CopyWrite'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[


            'headline'=>'required|max:255',
            'masalah'=>'required',
            'solusi'=>'required',
            'manfaat'=>'required',
            'bonus'=>'required',
            'kontak'=>'required',
            'kelangkaan'=>'required',
            'kerugian'=>'required'

        ]);
        $copywrite=copywrite::findOrFail($id);
        $copywrite->update([

            'headline'=>$request->headline,
            'masalah'=>$request->masalah,
            'solusi'=>$request->solusi,
            'manfaat'=>$request->manfaat,
            'bonus'=>$request->bonus,
            'kontak'=>$request->kontak,
            'kelangkaan'=>$request->kelangkaan,
            'kerugian'=>$request->kerugian
        ]);



        return redirect()->route('copy-writes.index')->with(['success'=>'data berhasil diubah!']);
    }

    public function input(Request $request, $id)
    {
        $this->validate($request,[


            'headline'=>'required|max:255',
            'masalah'=>'required',
            'solusi'=>'required',
            'manfaat'=>'required',
            'bonus'=>'required',
            'kontak'=>'required',
            'kelangkaan'=>'required',
            'kerugian'=>'required'

        ]);
        $product=product::findOrFail($id);
        $product->update([

            'headline'=>$request->headline,
            'masalah'=>$request->masalah,
            'solusi'=>$request->solusi,
            'manfaat'=>$request->manfaat,
            'bonus'=>$request->bonus,
            'kontak'=>$request->kontak,
            'kelangkaan'=>$request->kelangkaan,
            'kerugian'=>$request->kerugian
        ]);



        return redirect()->route('copy-writes.index')->with(['success'=>'data berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $copywrite=copywrite::findOrFail($id);

        $copywrite->delete();

        //redirect to index
        return redirect()->route('copy-writes.index')->with(['success'=>'data telah berhasil di delete!']);
    }
}
