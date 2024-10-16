<?php

namespace App\Http\Controllers;


use App\Models\Album;
use App\Models\User;
use App\Models\Artis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;



class AlbumController extends Controller
{

        /**
         * Display a listing of the resource.
         */
        public function index()
        {

            if( auth()->user()->level_user==="Anggota"){

                $album = new Album;
                $Album=$album->getListAlbum();
                $no=0;
                $no++;
                //$album=album::all();
                $modelalbum = new album;
                //$album=$modelalbum->getListalbums();

                return View('Album.Index',["title"=>"Album","active"=>"Album"],compact('Album','no'));

            }
            else{
            $no=0;
            $no++;
            //$album=album::all();
            $modelalbum = new album;
            //$album=$modelalbum->getListalbums();
            $Album=album::all();
            return View('Album.Index',["title"=>"Album","active"=>"Album"],compact('Album','no'));}


        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {

                $Album=album::all();
                $users=user::all();
                $userst=user::where('id_artist','=', auth()->user()->id_artist)->get();
                return view('Album.Create',["title"=>"album","active"=>"album"],compact('Album','users','userst'));


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
                'id_user'=>'required|max:255',
                'cover'=>'required|image|mimes:jpeg,jpg,png|max:2048'

            ]);
            $cover=$request->file('cover');
            $cover-> storeAs('public/albums', $cover->hashName());

            album::create([
                'id_user'=>$request->id_user,
                'nameAlbum'=>$request->nameAlbum,
                'cover'=>$cover->hashName()

                   ]);
            //redirect to index
            return redirect()->route('album.index')->with(['success'=>'data success ditambahkan!']);


        }

        /**
         * Display the specified resource.
         */
        public function show($id)
        {
               //dd($id_member);
    //get member by id
    //$Artist=artis::findOrFail($id);
     $Artist= DB::table('artis')->where('album', $id)->get();
    $Albums=Album::all();
    //$Artist=Artis::where('album'==$id);
  // dd($id_member);
   // exit;
    return view('Index.AlbumPage',["title"=>"Album","active"=>"User"], compact('Artist','Albums'));
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            //dd($id);
           $album=album::findORfail($id);

            // $modelalbumById = new album;
            // $album=$modelalbumById->getListalbumsById($id);
            //$Album=album::all();
            $users=user::all();
            return view('Album.Edit',["title"=>"album","active"=>"album"],compact('album','users'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, $id): RedirectResponse
        {

            $this->validate($request,[

                'nameAlbum'=>'required|max:255',


            ]);
            //dd($request);
            $album=album::FindOrFail($id);

            if($request->hasFile('cover'))
            {
                //upload new image
                $cover=$request->file('cover');

                $cover->storeAs('public/albums',$cover->hashName());


                //delete old image
                Storage::delete('public/albums/'.$album->cover);

                //update album with new image
                $album->update([
                  'nameAlbum'=>$request->nameAlbum,
                  'cover'=>$cover->hashName()

                ]);

            }

            else
            {
                $album->update([
                    'nameAlbum'=>$request->nameAlbum,

                ]);

            }
            return redirect()->route('album.index')->with(['success'=>'data berhasil diubah!']);
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy($id): RedirectResponse
        {
            $album=album::findOrFail($id);
            //delete image
            Storage::delete('public/albums/'. $album->cover);
            // delete album
            $album->delete();

            //redirect to index
            return redirect()->route('album.index')->with(['success'=>'data telah berhasil di delete!']);
        }



}
