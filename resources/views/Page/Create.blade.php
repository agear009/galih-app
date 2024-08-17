@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container  mt-5">
        <form action="{{ route('post.store') }}" method="POST"  enctype="multipart/form-data" >
            @csrf

            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Category</label>
                <select class="form-control" id="category_id" name="category_id" aria-describedby="category_id" required ">
                    <option name="category_id" value="Hot_News">Viral</option>
                    <option name="category_id" value="Teknologi">Teknologi</option>
                    <option name="category_id" value="Edukasi">Edukasi</option>
                    <option name="category_id" value="Politik">Politik</option>
                    <option name="category_id" value="Olah_Raga">Olah Raga</option>
                    <option name="category_id" value="Wisata">Wisata</option>
                    <option name="category_id" value="Manca_Negara">Manca Negara</option>
                    <option name="category_id" value="Kesehatan">Kesehatan</option>
                    <option name="category_id" value="Gaya Hidup">Gaya Hidup</option>
                    <option name="category_id" value="Kuliner">Kuliner</option>
                    <option name="category_id" value="Otomotif">Otomotif</option>
                    <option name="category_id" value="Sejarah">Sejarah</option>
                    <option name="category_id" value="Film">Film</option>

                </select>
                </div>
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Cover</label>
            <input type="text" class="form-control" id="name" name="image_cover_id" aria-describedby="Cover">
            </div>

            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Title</label>
                <input type="text" class="form-control" id="name" name="title" aria-describedby="name Category" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Content</label>
                <textarea id="myTextarea" name="content"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Author</label>
                <input type="text" class="form-control" id="name" name="author" aria-describedby=" author name" required>
            </div>
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Source</label>
            <input type="text" class="form-control" id="producer" name="source" aria-describedby="source" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
