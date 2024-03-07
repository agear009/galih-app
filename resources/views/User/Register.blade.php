@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container">
        <form action="{{ route('users.store') }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" required>
            </div>
            <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone" required>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
            <label for="exampleInputaddress1" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" aria-describedby="address">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
