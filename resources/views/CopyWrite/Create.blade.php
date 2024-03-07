@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container  mt-5">
        <form action="{{ route('category.store') }}" method="POST"  enctype="multipart/form-data" >
            @csrf

            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Category</label>
            <select class="form-control" id="name" name="id_category" aria-describedby="name" required value="{{ old('id_category') }}">
            <option name="id_category" value="">Select Category</option>
            @forelse($Category as $category)
            <option name="id_category" value="{{ $category->name }}">{{ $category->id}} {{ $category->name }}</option>

            @empty
            <option name="id_category" value="">NO data</option>
            @endforelse
           </select>
            </div>
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Producer</label>
            <select class="form-control" id="name" name="producer" aria-describedby="name" required value="{{ old('producer') }}">
            <option name="id_category" value="">Select Producer</option>
            @forelse($Category as $category)
            <option name="id_category" value="{{ $category->producer }}">{{ $category->id}} {{ $category->producer}}</option>

            @empty
            <option name="id_category" value="">NO data</option>
            @endforelse
            </select>
            </div>
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" aria-describedby="image" required value="{{ old('image') }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" required value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Size</label>
                <select class="form-control" id="size" name="size" aria-describedby="size" required value="{{ old('size') }}">
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
                <input type="number" class="form-control" id="stock" name="stock" aria-describedby="stock" required value="{{ old('stock') }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" aria-describedby="price" required value="{{ old('price') }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Description</label>
                <textarea id="myTextarea" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Headline</label>
                <input type="number" class="form-control" id="headline" name="headline" aria-describedby="headline" value="{{ old('headline') }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Image OR Video</label>
                <input type="file" class="form-control" id="imagevideo" name="imagevideo" aria-describedby="imagevideo" value="{{ old('imagevideo') }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Problem</label>
                    <textarea id="myTextarea" name="masalah"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Solution</label>
                    <textarea id="myTextarea" name="solusi"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Benefit</label>
                    <textarea id="myTextarea" name="manfaat"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Image Testimoni</label>
                    <input type="file" class="form-control" id="gambartestimoni" name="gambartestimoni" aria-describedby="gambartestimoni" value="{{ old('gambartestimoni') }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Bonus</label>
                        <textarea id="myTextarea" name="bonus"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Contact</label>
                        <textarea id="myTextarea" name="kontak"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">scarcity (kelangkaan)</label>
                        <textarea id="myTextarea" name="kelangkaan"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">scarcity (kerugian)</label>
                        <textarea id="myTextarea" name="kerugian"></textarea>
                    </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
