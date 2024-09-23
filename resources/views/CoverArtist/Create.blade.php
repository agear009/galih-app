@extends('Layouts.MainAdmin')

@section('Container')



    <div class="container">
        <form action="{{ route('coverArtist.store') }}" method="POST"  enctype="multipart/form-data" >
            @csrf

            @if( auth()->user()->id_artist==="" )
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">ID Manager</label>

            <select type="text" class="form-control @error('category') is-invalid @enderror" id="floatingCategory" placeholder="Category" name="id_user" required>
                @forelse($users as $cp)
                <option name="id_user" value="{{ $cp->id_artist }}"> {{ $cp->name }} {{  $cp->id_artist  }} {{  $cp->status  }}</option>
                @empty

                @endforelse


                </select>

            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">ID Artis</label>

                <select type="text" class="form-control @error('category') is-invalid @enderror" id="floatingCategory" placeholder="Category" name="id_artist" required>
                    @forelse($users as $cp)
                    <option name="id_artist" value="{{ $cp->id_artist }}"> {{ $cp->name }} {{  $cp->id_artist  }} {{  $cp->status  }}</option>
                    @empty

                    @endforelse


                    </select>

                </div>
            <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Judul Cover</label>
            <input type="text" class="form-control" id="phone" name="nameCoverArtist" aria-describedby="phone" required >
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gambar Cover</label>
            <input type="file" class="form-control" id="email" name="cover" aria-describedby="emailHelp" required >
            </div>

            @else
            <div class="mb-3">
            <select type="text" class="form-control @error('category') is-invalid @enderror" id="floatingCategory" placeholder="Category" name="id_user" required>
                <option name="id_user" value="">--Select--</option>
                @forelse($userst as $cp)
                <option name="id_user" value="{{ $cp->id_artist }}"> {{ $cp->name }} {{  $cp->id_artist  }} {{  $cp->status  }}</option>
                @empty

                @endforelse


                </select>

            </div>
            <div class="mb-3">
                <select type="text" class="form-control @error('category') is-invalid @enderror" id="floatingCategory" placeholder="Category" name="id_artist" required>
                    <option name="id_user" value="">--Select--</option>
                    @forelse($userst as $cp)
                    <option name="id_artist" value="{{ $cp->id_artist }}"> {{ $cp->name }} {{  $cp->id_artist  }} {{  $cp->status  }}</option>
                    @empty

                    @endforelse


                    </select>

                </div>

            <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Judul Cover Artis</label>
            <input type="text" class="form-control" id="phone" name="nameCoverArtist" aria-describedby="phone" required >
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gambar Cover</label>
            <input type="file" class="form-control" id="email" name="cover" aria-describedby="emailHelp" required >
            <label for="exampleInputEmail1" class="form-label">Catatan ukuran gambar tidak melebihi 2 mb</label>
            </div>
            @endif




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
