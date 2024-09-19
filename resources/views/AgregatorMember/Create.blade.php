
@extends('Layouts.MainAdmin')

@section('Container')


    <div class="container">
        <form action="{{ route('member.store') }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">ID Manager</label>
            <select type="text" class="form-control @error('category') is-invalid @enderror" id="floatingCategory" placeholder="Category" name="id_user" {{ old('id_artist') }} required>
             <option name="id_user" value="">--Select--</option>
             @forelse($userst as $cp)
             <option name="id_user" value="{{ $cp->id_artist }}">{{ $cp->level_user }} {{ $cp->name }} {{  $cp->id_artist  }} {{  $cp->status  }}</option>
             @empty

             @endforelse


             </select>

            </div>

            <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Artis</label>
            <input type="text" class="form-control" id="phone" name="artist" aria-describedby="phone" required >
            </div>
            <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Album</label>
            <select type="text" class="form-control @error('category') is-invalid @enderror" id="floatingCategory" placeholder="Category" name="id_user" {{ old('category') }} required>
                <option name="id_user" value="">--Select--</option>
                @forelse($albums as $album)
                <option name="id_user" value="{{ $album->id }}">{{  $album->nameAlbum }}</option>
                @empty

                @endforelse


                </select>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lagu</label>
            <input type="text" class="form-control" id="email" name="song" aria-describedby="emailHelp" required >
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pencipta Lagu</label>
            <input type="text" class="form-control" id="email" name="pencipta_lagu" aria-describedby="emailHelp" required >
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Tentang Artis</label>
                <textarea id="myTextarea" name="tentang_artis" >-</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label" >Lirik dan kunci gitar</label>
                <textarea id="myTextarea" name="lirik" >-</textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Keterangan Lagu</label>
                <textarea id="myTextarea" name="keterangan_lagu" >-</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Facebook</label>
                <input type="text" class="form-control" id="email" name="facebook" aria-describedby="emailHelp" value="#" required>
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link X</label>
                <input type="text" class="form-control" id="email" name="x" aria-describedby="emailHelp" value="#" required>
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Youtube</label>
                <input type="text" class="form-control" id="email" name="youtube" aria-describedby="emailHelp" value="#" required>
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Instagram</label>
                <input type="text" class="form-control" id="email" name="instagram" aria-describedby="emailHelp" value="#" required>
                </div>
                <label for="exampleInputEmail1" class="form-label">Publikasi</label>
                <hr>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apple Music</label>
                <input type="text" class="form-control" id="email" name="apple" aria-describedby="emailHelp" value="#" required>
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Spotify</label>
                <input type="text" class="form-control" id="email" name="spotify" aria-describedby="emailHelp" value="#" required>
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tiktok</label>
                <input type="text" class="form-control" id="email" name="tiktok" aria-describedby="emailHelp" value="#" required>
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Joox</label>
                <input type="text" class="form-control" id="email" name="joox" aria-describedby="emailHelp" value="#" required>
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tidal</label>
                <input type="text" class="form-control" id="email" name="tidal" aria-describedby="emailHelp" value="#" required>
                </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection