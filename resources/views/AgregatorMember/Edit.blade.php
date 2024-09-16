
@extends('Layouts.MainAdmin')

@section('Container')


    <div class="container">
        <form action="{{ route('artist.update', $Artist->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">ID Manager</label>
            <input disabled type="text" class="form-control" id="name" name="id_artist" aria-describedby="id_user" required value="{{ $Artist->id_user }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Artis</label>
            <input type="text" class="form-control" id="phone" name="artist" aria-describedby="phone" required value="{{ $Artist->artist }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lagu</label>
            <input type="text" class="form-control" id="email" name="song" aria-describedby="emailHelp" required value="{{ $Artist->song }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Tentang Artis</label>
                <textarea id="myTextarea" name="deskripsi"></textarea>
            </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Lirik dan kuci gitar</label>
                <textarea id="myTextarea" name="lirik"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Keterangan Lagu</label>
                <textarea id="myTextarea" name="keterangan_lagu"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Facebook</label>
                <input type="text" class="form-control" id="email" name="facebok" aria-describedby="emailHelp" required value="{{ $Artist->song }}">
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link X</label>
                <input type="text" class="form-control" id="email" name="x" aria-describedby="emailHelp" required value="{{ $Artist->song }}">
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Youtube</label>
                <input type="text" class="form-control" id="email" name="youtube" aria-describedby="emailHelp" required value="{{ $Artist->song }}">
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Instagram</label>
                <input type="text" class="form-control" id="email" name="youtube" aria-describedby="emailHelp" required value="{{ $Artist->song }}">
                </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
