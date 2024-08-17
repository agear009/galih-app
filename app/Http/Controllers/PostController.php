<?php


namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(){

        $no=0;
        $no++;
        $Post=post::all();
        return view('Post.Index',["title"=>"Post","active"=>"Home"],compact('Post','no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Post.Create',["title"=>"Post","active"=>"Postproduct"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,
        [
        'category_id'=>'required|max:255',
        'image_cover_id'=>'max:255',
        'title'=>'required|max:255',
        'content'=>'required',
        'author'=>'required|max:255',
        'source'=>'required'
        ]);
        Post::create([
            'category_id'=>$request->category_id,
            'image_cover_id'=>$request->image_cover_id,
            'title'=>$request->title,
            'content'=>$request->content,
            'author'=>$request->author,
            'source'=>$request->source
        ]);
        return redirect('/post')->with('success',' successfull! ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $Post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Post=Post::findOrFail($id);
        return view('Post.Edit',["title"=>"Post","active"=>"Edit"],compact('Post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[

        'category_id'=>'required|max:255',
        'image_cover_id'=>'max:255',
        'title'=>'required|max:255',
        'content'=>'required',
        'author'=>'required|max:255',
        'source'=>'required'


        ]);
        //get member by id
        $Post=Post::FindOrFail($id);

            $Post->update([


            'category_id'=>$request->category_id,
            'image_cover_id'=>$request->image_cover_id,
            'title'=>$request->title,
            'content'=>$request->content,
            'author'=>$request->author,
            'source'=>$request->source

                ]);
                return redirect('/post')->with('success','Registration successfull! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Post=Post::findOrFail($id);

        //delete image



        // delete member
        $Post->delete();

        //redirect to index
        return redirect()->route('post.index',["title"=>"Post",'active'=>'User'])->with(['success'=>'data telah berhasil di delete!']);
    }
}
