@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container  mt-5">
        <form action="{{ route('products.store') }}" method="POST"  enctype="multipart/form-data" >
            @csrf

            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Category</label>
            <select class="form-control" id="name" name="category_id" aria-describedby="category_id" required value="{{ old('category_id') }}">
            <option name="category_id" value="">Select Category</option>
            @forelse($Category as $category)
            <option name="category_id" value="{{ $category->name }}">{{ $category->id}} {{ $category->name }}</option>
            @empty
            <option name="category_id" value="">NO data</option>
            @endforelse
           </select>
            </div>
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Producer</label>
            <select class="form-control" id="name" name="produsen" aria-describedby="produsen" required value="{{ old('produsen') }}">
            <option name="produsen" value="">Select Producer</option>
            @forelse($Category as $category)
            <option name="produsen" value="{{ $category->producer }}">{{ $category->id}} {{ $category->producer}}</option>
            @empty
            <option name="produsen" value="">NO data</option>
            @endforelse
            </select>
            </div>
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Image</label>
            <input type="file" class="form-control bg-blue" id="image" name="image" aria-describedby="image" required value="{{ old('image') }}" autofocus>
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
                    <option name="size" value="">-- Ukuruan Perumahan / villa --</option>
                    <option name="size" value="Type 45/84 (1 Bedroom )">Type 45/84 (1 Bedroom )</option>
                    <option name="size" value="Type 70/120 (2 Bedroom )">Type 70/120 (2 Bedroom )</option>
                    <option name="size" value="Type 90/90. (3 Bedroom )">Type 90/90. (3 Bedroom )</option>
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
                <input type="text" class="form-control" name="headline" value="{{ old('headline') }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Image OR Video</label>
                <input type="file" class="form-control" name="image_video" value="{{ old('image_video') }}" required>
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
                    <input type="file" class="form-control" name="gambar_testimoni" value="{{ old('gambar_testimoni') }}" required>
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
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Contact 1</label>
                        <input type="text" class="form-control" name="phone1" value="{{ old('phone1') }}" required>
                        </div>

                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Contact 2</label>
                        <input type="text" class="form-control" name="phone2" value="{{ old('phone1') }}" >
                        </div>

                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Contact 1</label>
                        <input type="text" class="form-control" name="phone3" value="{{ old('phone1') }}" >
                        </div>

                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Contact 1</label>
                        <input type="text" class="form-control" name="phone4" value="{{ old('phone1') }}" >
                        </div>

                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Contact 1</label>
                        <input type="text" class="form-control" name="phone5" value="{{ old('phone1') }}" >
                    </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
