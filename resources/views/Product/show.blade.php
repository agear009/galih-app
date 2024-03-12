@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container  mt-5">
        <form action="{{ route('products.update',$Product->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')

            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Category</label>
            <label for="exampleInputname1" class="form-label">{{ $Product->id_category }}</label>

            </div>
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Producer</label>
            <label for="exampleInputname1" class="form-label">{{ $Product->produsen }}</label>

            </div>
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Image</label>
            <img src="{{ asset('storage/products/'.$Product->image) }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Name</label>
                <label for="exampleInputname1" class="form-label">{{ $Product->name }}</label>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Size</label>
                <label for="exampleInputname1" class="form-label">{{ $Product->size }}</label>

            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Stock</label>
                <label for="exampleInputname1" class="form-label">{{ $Product->stock }}</label>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Price</label>
                <label for="exampleInputname1" class="form-label">{{ $Product->price }}</label>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Description</label>
                <label for="exampleInputname1" class="form-label">{{ $Product->description }}</label>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Headline</label>
                <label for="exampleInputname1" class="form-label">{{ $Product->headline }}</label>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Image OR Video</label>
                <img src="{{ asset('storage/products/'.$Product->image) }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Problem</label>
                    <label for="exampleInputname1" class="form-label">{{ $Product->masalah }}</label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Solution</label>
                    <label for="exampleInputname1" class="form-label">{{ $Product->solusi }}</label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Benefit</label>
                    <label for="exampleInputname1" class="form-label">{{ $Product->manfaat }}</label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Image Testimoni</label>
                    <img src="{{ asset('storage/products/'.$Product->image) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Bonus</label>
                        <label for="exampleInputname1" class="form-label">{{ $Product->bonus }}</label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Contact</label>
                        <label for="exampleInputname1" class="form-label">{{ $Product->kontak }}</label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">scarcity (kelangkaan)</label>
                        <label for="exampleInputname1" class="form-label">{{ $Product->kelangkaan }}</label>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">scarcity (kerugian)</label>
                        <label for="exampleInputname1" class="form-label">{{ $Product->kerugian }}</label>

                    </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
