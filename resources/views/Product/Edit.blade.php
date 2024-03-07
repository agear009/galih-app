@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container  mt-5">
        <form action="{{ route('products.update',$Product->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')

            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Category</label>
            <select class="form-control" id="name" name="id_category" aria-describedby="id_category" required value="{{ old('id_category') }}">
            <option name="id_category" value="{{ $Product->id_category }}">{{ $Product->id_category }}</option>
            @forelse($Category as $category)
            <option name="id_category" value="{{ $category->name }}">{{ $category->id}} {{ $category->name }}</option>
            @empty
            <option name="id_category" value="">NO data</option>
            @endforelse
           </select>
            </div>
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Producer</label>
            <select class="form-control" id="name" name="produsen" aria-describedby="produsen" required value="{{ old('produsen') }}">
            <option name="produsen" value="{{ $Product->produsen }}">{{ $Product->produsen }}</option>
            @forelse($Category as $category)
            <option name="produsen" value="{{ $category->producer }}">{{ $category->id}} {{ $category->producer}}</option>
            @empty
            <option name="produsen" value="">NO data</option>
            @endforelse
            </select>
            </div>
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Image</label>
            <img src="{{ asset('storage/products/'.$Product->image) }}">
            <input type="file" class="form-control" id="image" name="image" aria-describedby="image" value="{{ old('image') }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" required value="{{ $Product->name }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Size</label>
                <select class="form-control" id="size" name="size" aria-describedby="size" required value="{{ old('size') }}">
                    <option name="size" value="{{ $Product->size }}">{{ $Product->size }}</option>
                    <option name="size" value="S">S</option>
                    <option name="size" value="M">M</option>
                    <option name="size" value="L">L</option>
                    <option name="size" value="XL">XL</option>
                    <option name="size" value="XXL">XXL</option>
                    <option name="size" value="XXXL">XXXL</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" aria-describedby="stock" required value="{{ $Product->stock }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" aria-describedby="price" required value="{{ $Product->price }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Description</label>
                <textarea id="myTextarea" name="description">{{ $Product->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Headline</label>
                <input type="text" class="form-control" name="headline" value="{{ $Product->headline }}" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Image OR Video</label>
                <img src="{{ asset('storage/products/'.$Product->image) }}">
                <input type="file" class="form-control" name="imagevideo" value="{{ old('imagevideo') }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Problem</label>
                    <textarea id="myTextarea" name="masalah" required>{{ $Product->masalah }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Solution</label>
                    <textarea id="myTextarea" name="solusi" required>{{ $Product->solusi }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Benefit</label>
                    <textarea id="myTextarea" name="manfaat" required>{{ $Product->manfaat }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Image Testimoni</label>
                    <img src="{{ asset('storage/products/'.$Product->image) }}">
                    <input type="file" class="form-control" name="gambartestimoni" value="{{ old('gambartestimoni') }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Bonus</label>
                        <textarea id="myTextarea" name="bonus"> {{ $Product->bonus }} </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Contact</label>
                        <textarea id="myTextarea" name="kontak" required>{{ $Product->kontak }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">scarcity (kelangkaan)</label>
                        <textarea id="myTextarea" name="kelangkaan">{{ $Product->kelangkaan }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">scarcity (kerugian)</label>
                        <textarea id="myTextarea" name="kerugian">{{ $Product->kerugian }}</textarea>
                    </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
