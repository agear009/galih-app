@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container  mt-5">
        <form action="{{ route('copy-writes.update',$CopyWrite->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')


            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Headline</label>
                <input type="text" class="form-control" name="headline" value="{{ $CopyWrite->headline }}" required>
            </div>

                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Problem</label>
                    <textarea id="myTextarea" name="masalah" required>{{ $CopyWrite->masalah }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Solution</label>
                    <textarea id="myTextarea" name="solusi" required>{{ $CopyWrite->solusi }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Benefit</label>
                    <textarea id="myTextarea" name="manfaat" required>{{ $CopyWrite->manfaat }}</textarea>
                </div>

                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Bonus</label>
                        <textarea id="myTextarea" name="bonus"> {{ $CopyWrite->bonus }} </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Contact</label>
                        <textarea id="myTextarea" name="kontak" required>{{ $CopyWrite->kontak }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">scarcity (kelangkaan)</label>
                        <textarea id="myTextarea" name="kelangkaan">{{ $CopyWrite->kelangkaan }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">scarcity (kerugian)</label>
                        <textarea id="myTextarea" name="kerugian">{{ $CopyWrite->kerugian }}</textarea>
                    </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
