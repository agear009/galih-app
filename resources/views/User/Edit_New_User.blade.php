@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container">
        <form action="{{ route('users.update', $user->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" required value="{{ $user->name }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone" required value="{{ $user->phone }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required value="{{ $user->email }}">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Level User</label>
            <select class="form-control" id="size" name="status" aria-describedby="size" required value="{{ old('size') }}">
                <option name="size" value="{{ $user->level_user }}">{{ $user->level_user }}</option>
                <option name="size" value="Karyawan">Karyawan</option>
                <option name="size" value="Anggota">Anggota</option>
                <option name="size" value="Pendaftar">Pendaftar</option>

            </select>
            <input disabled type="disable" class="form-control" id="email" name="level_user" aria-describedby="emailHelp" required value="{{ $user->level_user }}">

            </div>
            <div class="mb-3">
            <label for="exampleInputaddress1" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" aria-describedby="address" required value="{{ $user->address }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputaddress1" class="form-label">Status</label>
            <select class="form-control" id="size" name="status" aria-describedby="size" required value="{{ old('size') }}">
                <option name="size" value="{{ $user->status }}">{{ $user->status }}</option>
                <option name="size" value="Aktif">Aktif</option>
                <option name="size" value="Tidak Aktif">Tidak Aktif</option>
                <option name="size" value="Menunggu Verifikasi">Menunggu Verifikasi</option>
                <option name="size" value="Pengajuan Ditolak">Pengajuan Ditolak</option>
                <option name="size" value="Pending">Pending</option>
                <option name="size" value="Dibatalkan">Dibatalkan</option>
            </select>
            <input disabled type="disable" class="form-control" id="address" name="address" aria-describedby="address" required value="{{ $user->status }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="text" class="form-control" name="password" id="exampleInputPassword1" required value="{{ $user->password }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ID user</label>
            <input type="text" class="form-control" name="id_artist" id="exampleInputPassword1" value="{{ $user->id_artist }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
