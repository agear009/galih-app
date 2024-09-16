
@extends('Layouts.MainAdmin')

@section('Container')


    <div class="container">
        <form action="{{ route('artist.update', $Artist->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">ID Manager</label>
            <input disabled type="text" class="form-control" id="name" name="id_user" aria-describedby="id_user" required value="{{ $Artist->id_user }}">
            <input type="hidden" class="form-control" id="name" name="id_user" aria-describedby="id_user" required value="{{ $Artist->id_user }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputphone1" class="form-label">Artis</label>
                <input type="text" class="form-control" id="phone" name="artist" aria-describedby="phone" required value="{{ $Artist->artist }}">
                </div>
                <div class="mb-3">
                <label for="exampleInputphone1" class="form-label">Album</label>
                <input type="text" class="form-control" id="phone" name="album" aria-describedby="phone" required value="{{ $Artist->album }}">
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Lagu</label>
                <input type="text" class="form-control" id="email" name="song" aria-describedby="emailHelp" required value="{{ $Artist->song }}">
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pencipta Lagu</label>
                <input type="text" class="form-control" id="email" name="pencipta_lagu" aria-describedby="emailHelp" required value="{{ $Artist->pencipta_lagu }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Tentang Artis</label>
                    <textarea id="myTextarea" name="tentang_artis">{{ $Artist->tentang_artis }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Lirik dan kunci gitar</label>
                    <textarea id="myTextarea" name="lirik">{{ $Artist->lirik }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Keterangan Lagu</label>
                    <textarea id="myTextarea" name="keterangan_lagu">{{ $Artist->keterangan_lagu }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link Facebook</label>
                    <input type="text" class="form-control" id="email" name="facebook" aria-describedby="emailHelp" value="{{ $Artist->facebook }}">
                    </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link X</label>
                    <input type="text" class="form-control" id="email" name="x" aria-describedby="emailHelp" value="{{ $Artist->x }}">
                    </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link Youtube</label>
                    <input type="text" class="form-control" id="email" name="youtube" aria-describedby="emailHelp" value="{{ $Artist->youtube }}">
                    </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link Instagram</label>
                    <input type="text" class="form-control" id="email" name="instagram" aria-describedby="emailHelp" value="{{ $Artist->instagram}}">
                    </div>
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


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
