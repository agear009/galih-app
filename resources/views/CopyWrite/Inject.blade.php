@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container  mt-5">
        <form action="{{ route('inject.update',$CopyWrite->id) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')

            <div class="mb-3">

                <label for="exampleInputname1" class="form-label">Product</label>
                <select class="form-control" id="name" name="product_id" aria-describedby="product_id" required value="{{ old('product_id') }}">
                <option name="product_id" value="">Select Product to Inject</option>
                @forelse($Product as $product)
                <option name="product_id" value="{{ $product->id }}">{{ $product->id}} {{ $product->name }} {{ $product->produsen }} </option>
                @empty
                <option name="product_id" value="">NO data</option>
                @endforelse
               </select>
                </div>


            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Headline</label>
                <input type="text" class="form-control" name="headline" value="{{ $CopyWrite->headline }}" readonly>
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

            <button type="submit" class="btn btn-primary">Insert Copy Writer to Product</button>
        </form>
    </div>
  @endsection
