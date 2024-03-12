@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container  mt-5">
        <form action="{{ route('products.update',$CopyWrite->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')


            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Headline</label>
                <label for="exampleInputname1" class="form-label">{{ $CopyWrite->headline }}</label>
            </div>

                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Problem</label>
                    <label for="exampleInputname1" class="form-label">{{ $CopyWrite->masalah }}</label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Solution</label>
                    <label for="exampleInputname1" class="form-label">{{ $CopyWrite->solusi }}</label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Benefit</label>
                    <label for="exampleInputname1" class="form-label">{{ $CopyWrite->manfaat }}</label>
                </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Bonus</label>
                        <label for="exampleInputname1" class="form-label">{{ $CopyWrite->bonus }}</label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Contact</label>
                        <label for="exampleInputname1" class="form-label">{{ $CopyWrite->kontak }}</label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">scarcity (kelangkaan)</label>
                        <label for="exampleInputname1" class="form-label">{{ $CopyWrite->kelangkaan }}</label>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">scarcity (kerugian)</label>
                        <label for="exampleInputname1" class="form-label">{{ $CopyWrite->kerugian }}</label>

                    </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
