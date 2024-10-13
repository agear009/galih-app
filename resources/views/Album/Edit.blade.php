
@extends('Layouts.MainAdmin')

@section('Container')


    <div class="container">
        <form action="{{ route('album.update',$album->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('put')
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">ID Manager</label>
            <select type="text" class="form-control @error('category') is-invalid @enderror" id="floatingCategory" placeholder="Category" name="id_user" required>
             <option name="id_user" value="{{  $album->id_user  }}">{{  $album->id_user  }}</option>
             @forelse($users as $cp)
             <option name="id_user" value="{{ $cp->id_artist }}"> {{ $cp->name }} {{  $cp->id_artist  }} {{  $cp->status  }}</option>
             @empty

             @endforelse


             </select>

            </div>
            <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Judul Album</label>
            <input type="text" class="form-control" id="phone" name="nameAlbum" aria-describedby="phone" required value="{{  $album->nameAlbum  }}" >
            </div>
            <div class="mb-3">
                <img src="{{ asset('storage/albums/'.$album->cover) }}" class="img-fluid" alt="" height="20%" width="20%">
            <label for="exampleInputEmail1" class="form-label">Gambar Album</label>
            <input type="file" class="form-control" id="email" name="cover" aria-describedby="emailHelp" value="{{  $album->cover }}">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
