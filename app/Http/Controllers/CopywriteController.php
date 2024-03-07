<?php

namespace App\Http\Controllers;

use App\Models\Copywrite;

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
        $this->validate($request,[


            'headline'=>'required|min:2',
            'imagevideo'=>'required|min:2',
            'masalah'=>'required|min:2',
            'solusi'=>'required|min:2',
            'manfaat'=>'required|min:2',
            'gambartestimoni'=>'required',
            'bonus'=>'required|min:2',
            'kontak'=>'required|min:2',
            'kelangkaan'=>'required|min:2',
            'kerugian'=>'required|min:2'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Copywrite $copywrite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCopywriteRequest $request, Copywrite $copywrite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Copywrite $copywrite)
    {
        //
    }
}
