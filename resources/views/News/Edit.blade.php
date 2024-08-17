@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container  mt-5">
        <form action="{{ route('banners.update',$Banner->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')



            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Name Product</label>
                <select class="form-control" id="product_id" name="product_id" aria-describedby="product_id" required value="{{ $Banner->product_name }}">
                    <option name="product_id" value="{{ $Banner->product_id }}">{{ $Banner->product_id }}</option>
                    @forelse($Product as $product)
                    <option name="product_id" value="{{ $product->id }}">{{ $product->id }} {{ $product->name }} {{ $product->produsen }}</option>

                    @empty
                    <option name="prodct_id" value="">No Data</option>
                </select>
                    @endforelse

                </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Image OR Video</label>

                <input type="file" class="form-control" name="banner" value="{{ old('banner') }}">
                </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <p align="center">
            <img src="{{ asset('storage/Banners/'.$Banner->banner) }}" width="100%">
            </p>
        </form>
    </div>
  @endsection
