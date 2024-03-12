@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container  mt-5">
        <form action="{{ route('testimonials.update',$Testimonial->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')



            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Name Product</label>
                <select class="form-control" id="product_id" name="product_id" aria-describedby="product_id" required value="{{ $Testimonial->product_name }}">
                    <option name="product_id" value="{{ $Testimonial->product_id }}">{{ $Testimonial->product_id }}</option>
                    @forelse($Product as $product)
                    <option name="product_id" value="{{ $product->id }}">{{ $product->id }} {{ $product->name }} {{ $product->produsen }}</option>

                    @empty
                    <option name="prodct_id" value="">No Data</option>
                </select>
                    @endforelse

                </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Image OR Video</label>

                <input type="file" class="form-control" name="gambar_testimoni" value="{{ old('gambar_testimoni') }}">
                </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <p align="center">
            <img src="{{ asset('storage/Testimonials/'.$Testimonial->gambar_testimoni) }}" width="100%">
            </p>
        </form>
    </div>
  @endsection
