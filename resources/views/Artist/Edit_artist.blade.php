
@extends('Layouts.MainAdmin')

@section('Container')


    <div class="container">
        <form action="{{ route('artist.update', $artist->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">ID Artis</label>
            <input type="text" class="form-control" id="name" name="id_artist" aria-describedby="name" required value="{{ $artist->id_artist }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Artis</label>
            <input type="text" class="form-control" id="phone" name="artist" aria-describedby="phone" required value="{{ $artist->artist }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lagu</label>
            <input type="email" class="form-control" id="email" name="song" aria-describedby="emailHelp" required value="{{ $artist->song }}">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Level artist</label>
            <select class="form-control" id="size" name="status" aria-describedby="size" required value="{{ old('size') }}">
                <option name="size" value="{{ $artist->level_artist }}">{{ $artist->level_artist }}</option>
                <option name="size" value="Karyawan">Karyawan</option>
                <option name="size" value="Anggota">Anggota</option>
                <option name="size" value="Pendaftar">Pendaftar</option>

            </select>
            <input disabled type="disable" class="form-control" id="email" name="level_artist" aria-describedby="emailHelp" required value="{{ $artist->level_artist }}">

            </div>
            <div class="mb-3">
            <label for="exampleInputaddress1" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" aria-describedby="address" required value="{{ $artist->address }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputaddress1" class="form-label">Status</label>
            <select class="form-control" id="size" name="status" aria-describedby="size" required value="{{ old('size') }}">
                <option name="size" value="{{ $artist->status }}">{{ $artist->status }}</option>
                <option name="size" value="Aktif">Aktif</option>
                <option name="size" value="Tidak Aktif">Tidak Aktif</option>
                <option name="size" value="Menunggu_Verifikasi">Menunggu Verifikasi</option>
                <option name="size" value="Pengajuan_Ditolak">Pengajuan Ditolak</option>
                <option name="size" value="Pending">Pending</option>
                <option name="size" value="Dibatalkan">Dibatalkan</option>
            </select>
            <input disabled type="disable" class="form-control" id="address" name="address" aria-describedby="address" required value="{{ $artist->status }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="text" class="form-control" name="password" id="exampleInputPassword1" required value="{{ $artist->password }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ID artist</label>
            <input type="text" class="form-control" name="id_artist" id="exampleInputPassword1" value="{{ $artist->id_artist }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
