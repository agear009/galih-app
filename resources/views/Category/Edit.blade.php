@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container">
        <form action="{{ route('category.update', $category->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" required value="{{ $category->name }}">
            </div>
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Producer</label>
            <input type="text" class="form-control" id="producer" name="producer" aria-describedby="producer" required value="{{ $category->producer }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
