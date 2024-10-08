
@extends('Layouts.MainAdmin')

@section('Container')


    <div class="container">
        <form action="{{ route('eksternal.update', $Artist->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')

            <label for="exampleInputEmail1" class="form-label">Publikasi</label>
            <hr>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apple Music</label>
            <input type="text" class="form-control" id="email" name="apple" aria-describedby="emailHelp" value="{{ $Artist->apple }}">
            </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Spotify</label>
            <input type="text" class="form-control" id="email" name="spotify" aria-describedby="emailHelp" value="{{ $Artist->spotify }}">
            </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tiktok</label>
            <input type="text" class="form-control" id="email" name="tiktok" aria-describedby="emailHelp" value="{{ $Artist->tiktok }}">
            </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Joox</label>
            <input type="text" class="form-control" id="email" name="joox" aria-describedby="emailHelp" value="{{ $Artist->joox }}">
            </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tidal</label>
            <input type="text" class="form-control" id="email" name="tidal" aria-describedby="emailHelp" value="{{ $Artist->tidal }}">
            </div>

            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">ID Manager</label>
            <input disabled type="text" class="form-control" id="name" name="id_user" aria-describedby="id_user" required value="{{ $Artist->id_user }}">
            <input type="hidden" class="form-control" id="name" name="id_user" aria-describedby="id_user" required value="{{ $Artist->id_user }}">
            </div>


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><img src="{{ asset('storage/CoverArtists/'.$Artist->cover_artis) }}" width="20%"></label>
                    <input type="file" class="form-control" id="email" name="cover_artis" aria-describedby="emailHelp" >
                    </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Lagu</label>
                <input disabled  type="text" class="form-control" id="email" name="" aria-describedby="emailHelp" required value="{{ $Artist->song }}">
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pencipta Lagu</label>
                <input disabled type="text" class="form-control" id="email" name="" aria-describedby="emailHelp" required value="{{ $Artist->pencipta_lagu }}">
                </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
