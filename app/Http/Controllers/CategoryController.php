<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(){

        $no=0;
        $no++;
        $Category=category::all();
        return view('Category.Index',["title"=>"Category","active"=>"Home"],compact('Category','no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Category.Create',["title"=>"Category","active"=>"Categoryproduct"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,
        ['name'=>'required|max:255','producer'=>'required|max:255']);
        category::create(['name'=>$request->name,'producer'=>$request->producer]);
        return redirect('categoryindex')->with('success',' successfull! ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=category::findOrFail($id);
        return view('Category.Edit',["title"=>"Category","active"=>"Edit"],compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'name' =>'required|max:255',
            'producer' =>'required|max:255',


        ]);
        //get member by id
        $category=category::FindOrFail($id);

            $category->update([


                'name'=>$request->name,
                'producer'=>$request->producer

                ]);
                return redirect('/categoryindex')->with('success','Registration successfull! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=category::findOrFail($id);

        //delete image



        // delete member
        $category->delete();

        //redirect to index
        return redirect()->route('category.index',["title"=>"Category",'active'=>'User'])->with(['success'=>'data telah berhasil di delete!']);
    }
}
