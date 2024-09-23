<?php

namespace App\Http\Controllers;


use App\Models\CoverArtist;
use App\Models\User;
use App\Models\Artis;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;



class CoverArtistController extends Controller
{

        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $no=0;
            $no++;
            //$CoverArtist=CoverArtist::all();
            $modelCoverArtist = new CoverArtist;
            //$CoverArtist=$modelCoverArtist->getListCoverArtists();
            $CoverArtist=CoverArtist::all();
            return View('CoverArtist.Index',["title"=>"CoverArtist","active"=>"CoverArtist"],compact('CoverArtist','no'));
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {

                $CoverArtist=CoverArtist::all();
                $users=user::all();
                $userst=user::where('id_artist','=', auth()->user()->id_artist)->get();
                return view('CoverArtist.Create',["title"=>"CoverArtist","active"=>"CoverArtist"],compact('CoverArtist','users','userst'));


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

                'nameCoverArtist'=>'required|max:255',
                'cover'=>'required|image|mimes:jpeg,jpg,png|max:2048'

            ]);
            $cover=$request->file('cover');
            $cover-> storeAs('public/CoverArtists', $cover->hashName());

            CoverArtist::create([
                'id_user'=>$request->id_user,
                'id_artist'=>$request->id_artist,
                'nameCoverArtist'=>$request->nameCoverArtist,
                'cover'=>$cover->hashName()

                   ]);
            //redirect to index
            return redirect()->route('coverArtist.index')->with(['success'=>'data success ditambahkan!']);


        }

        /**
         * Display the specified resource.
         */
        public function show($id)
        {
            //$CoverArtist=CoverArtist::where('product_id','=',$id)->get();
            $modelCoverArtistById = new CoverArtist;
            $CoverArtist=$modelCoverArtistById->getListCoverArtistsById($id);
            return view('CoverArtist.Show',["title"=>"CoverArtist","active"=>"CoverArtist"],compact('CoverArtist'));
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            //dd($id);
           $CoverArtist=CoverArtist::findORfail($id);

            // $modelCoverArtistById = new CoverArtist;
            // $CoverArtist=$modelCoverArtistById->getListCoverArtistsById($id);
            //$CoverArtist=CoverArtist::all();
            $users=user::all();
            $Artist=artis::all();
            return view('CoverArtist.Edit',["title"=>"CoverArtist","active"=>"CoverArtist"],compact('CoverArtist','users','Artist'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, $id): RedirectResponse
        {

            $this->validate($request,[

                'id_user'=>'required|max:255',


            ]);
            //dd($request);
            $CoverArtist=CoverArtist::FindOrFail($id);

            if($request->hasFile('cover'))
            {
                //upload new image
                $cover=$request->file('cover');

                $cover->storeAs('public/CoverArtists',$cover->hashName());


                //delete old image
                Storage::delete('public/CoverArtists/'.$CoverArtist->cover);

                //update CoverArtist with new image
                $CoverArtist->update([
                    'id_user'=>$request->id_user,
                    'id_artist'=>$request->id_artist,
                    'nameCoverArtist'=>$request->nameCoverArtist,
                    'cover'=>$cover->hashName()

                ]);

            }

            else
            {
                $CoverArtist->update([
                    'id_user'=>$request->id_user,
                    'id_artist'=>$request->id_artist,
                    'nameCoverArtist'=>$request->nameCoverArtist,

                ]);

            }
            return redirect()->route('coverArtist.index')->with(['success'=>'data berhasil diubah!']);
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy($id): RedirectResponse
        {
            $CoverArtist=CoverArtist::findOrFail($id);
            //delete image
            Storage::delete('public/CoverArtists/'. $CoverArtist->cover);
            // delete CoverArtist
            $CoverArtist->delete();

            //redirect to index
            return redirect()->route('coverArtist.index')->with(['success'=>'data telah berhasil di delete!']);
        }



}
