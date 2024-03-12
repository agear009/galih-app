@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container  mt-5">
        <form action="{{ route('testimonials.store') }}" method="POST"  enctype="multipart/form-data" >
            @csrf

            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Product</label>
            <select class="form-control" id="name" name="product_id" aria-describedby="product_id" required value="{{ old('product_id') }}">
            <option name="product_id" value="">Select Product</option>
            @forelse($Product as $product)
            <option name="product_id" value="{{ $product->id }}">{{ $product->id}} {{ $product->name }} {{ $product->produsen }} </option>
            @empty
            <option name="product_id" value="">NO data</option>
            @endforelse
           </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Picture Testimoni</label>
                <input type="file" class="form-control" name="gambar_testimoni" value="{{ old('gambar_testimoni') }}" required>
                </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
