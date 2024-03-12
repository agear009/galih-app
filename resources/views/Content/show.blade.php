@extends('Layouts.MainAdmin')

@section('Container')

    <div class="container  mt-5">

        @forelse($Content as $content )
        <table align="center">
            <tr>
              <th align="center"><p align="center"> {{ $content->product_name }}</p></th>
            </tr>
            <tr>
              <td>
              <img src="{{ asset('storage/Contents/'.$content->image_video) }}" width="100%">
             </td>
            </tr>
            <tr>
              <td align="center">
                <p align="center">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('contents.destroy', $content->id) }}" method="POST">

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                      </svg></button>
                </form>
                </p>
             </td>
            </tr>
          </table>
          @empty
          <label for="exampleInputname1" class="form-label">NO Data</label>


                @endforelse
    </div>
  @endsection
