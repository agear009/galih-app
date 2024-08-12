<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Copywrite;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class CopyWriteExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $CopyWrite=copywrite::findOrFail($id);
        //jika bool tambahkan ->get()
        $Product=product::findOrFail($id)->get();
        return view('CopyWrite.Inject',["title"=>"Copy-Write-Extra","active"=>"CopyWrite"],compact('CopyWrite','Product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[

            'product_id'=>'required|max:255',
            'masalah'=>'required',
            'solusi'=>'required',
            'manfaat'=>'required',
            'bonus'=>'required',
            'kontak'=>'required',
            'kelangkaan'=>'required',
            'kerugian'=>'required'

        ]);

        $product=product::FindOrFail($id);
        //$product=product::where('id','=','product_id');
        // $product->update([

        //     'product_id'=>$request->product_id,
        //     'masalah'=>$request->masalah,
        //     'solusi'=>$request->solusi,
        //     'manfaat'=>$request->manfaat,
        //     'bonus'=>$request->bonus,
        //     'kontak'=>$request->kontak,
        //     'kelangkaan'=>$request->kelangkaan,
        //     'kerugian'=>$request->kerugian
        //   ]);

        $affected = DB::table('products')
              ->where('id','=',$request->product_id)
              ->update([
                  'masalah'=>$request->masalah,
                  'solusi'=>$request->solusi,
                  'manfaat'=>$request->manfaat,
                  'bonus'=>$request->bonus,
                  'kontak'=>$request->kontak,
                  'kelangkaan'=>$request->kelangkaan,
                  'kerugian'=>$request->kerugian]);


          return redirect()->route('copy-writes.index')->with(['success'=>'data success ditambahkan!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
