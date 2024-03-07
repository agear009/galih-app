@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container  mt-5">
        <form action="{{ route('category.store') }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" required>
            </div>
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Producer</label>
            <input type="text" class="form-control" id="producer" name="producer" aria-describedby="producer" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
