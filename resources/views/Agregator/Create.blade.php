
@extends('Layouts.MainAdmin')

@section('Container')


    <div class="container">
        <form action="{{ route('artist.store') }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">ID Manager</label>
            <input disabled type="text" class="form-control" id="name" name="id_artist" aria-describedby="id_user" required value="{{ $user->id_artist }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Artis</label>
            <input type="text" class="form-control" id="phone" name="artist" aria-describedby="phone" required >
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lagu</label>
            <input type="text" class="form-control" id="email" name="song" aria-describedby="emailHelp" required >
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
