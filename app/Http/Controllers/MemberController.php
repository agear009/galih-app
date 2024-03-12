<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members=member::all();
        return View('User.Index',["title"=>"Home",'active'=>'Home'],compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {




        // $produk=str_replace(" ","%20","$request->product");
        // $nama=str_replace(" ","%20","$request->name");
        // $hp=str_replace(" ","%20","$request->phone");
        // $alamat=str_replace(" ","%20","$request->address");

        $this->validate($request,[
            'name'=>'required|max:255',
            'phone'=>'required|max:255',
            'address'=>'required|max:255',
            'name_product'=>'required|max:255',


        ]);
        $email='null';
        $size='null';
        $many='null';

        member::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'email'=>$email,
            'name_product'=>$request->name_product,
            'size'=>$size,
            'many'=>$many,
            'cost'=>$size


               ]);

               $Name=$request->name;
               $Phone=$request->phone;
               $Address=$request->address;
               $Product=$request->product;
               $Price=$request->price;
               $Phone1=$request->phone1;


                return View('Index.Wa',compact('Name','Phone','Address','Product','Price','Phone1'))->with(['success'=>'data success Di simpan!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Member=member::findOrFail($id);

        //delete image



        // delete product
        $Member->delete();

        //redirect to index
        return redirect()->route('products.index')->with(['success'=>'data telah berhasil di delete!']);

    }
}
