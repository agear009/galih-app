@extends('Layouts.MainAdmin')
@section('Container')

<div class="container mt-5">

        <div class="table-responsive">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Artis</th>
                    <th scope="col">Album</th>
                    <th scope="col">Lagu</th>
                    <th scope="col">Album</th>
                    <th scope="col">ID Manager</th>
                    <th scope="col">Cover</th>

                    <th scope="col">Menu</th>
                </tr>
                </thead>
                @forelse($Art as $artis)
                <tbody class="table-group-divider">


                <tr>
                    <th scope="row" width="5%">{{ $no++ }}</th>
                    <th scope="col" width="10%"><img src="{{ asset('storage/albums/'.$artis->album_cover) }}" width="20%"></th>
                    <th scope="col" width="20%">{{ $artis->artist }}</th>
                    <th scope="col" width="20%">{{ $artis->song }}</th>
                    <th scope="col" width="20%">{{ $artis->album_name }}</th>
                    <th scope="col" width="20%">{{ $artis->id_user }}</th>
                    <th scope="col" width="20%"><img src="{{ asset('storage/CoverArtists/'.$artis->cover_artis) }}" width="20%"></th>

                    <td width="150px">

                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('eksternal.destroy', $artis->id) }}" method="POST">

                            <a href="{{ route('eksternal.edit', $artis->id) }}" class="btn btn-sm btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                              </svg></a>
                            </a>

                        </form>




                    </td>
                </tr>
                @empty
                <div class="alert alert-danger">
                    Data tidak ditemukan.
                </div>

                </tbody>
            </table>
        </div>
    </div>


    @endforelse
  @endsection
