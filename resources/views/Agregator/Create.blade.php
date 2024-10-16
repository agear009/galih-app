
@extends('Layouts.MainAdmin')

@section('Container')


    <div class="container">
        <form action="{{ route('artist.store') }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
            <label for="exampleInputname1" class="form-label">ID Manager</label>
            <select type="text" class="form-control @error('category') is-invalid @enderror" id="floatingCategory" placeholder="Category" name="id_user" {{ old('category') }} required>
             <option name="id_user" value="">--Select--</option>
             @forelse($users as $cp)
             <option name="id_user" value="{{ $cp->id_artist }}">{{ $cp->level_user }} {{ $cp->name }} {{  $cp->id_artist  }} {{  $cp->status  }}</option>
             @empty

             @endforelse


             </select>

            </div>

            <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Artis</label>
            <input type="text" class="form-control" id="phone" name="artist" aria-describedby="phone" required >
            </div>
            <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Album</label>
            <select type="text" class="form-control @error('category') is-invalid @enderror" id="floatingCategory" placeholder="Category" name="album" required>
                <option name="album" value="">--Select--</option>
                <option name="album" value="Single">Single</option>
                @forelse($Albums as $album)
                <option name="album" value="{{ $album->id }}">{{  $album->nameAlbum }}</option>
                @empty

                @endforelse


                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cover Lagu atau artis</label>
                <input type="file" class="form-control" id="email" name="cover_artis" aria-describedby="emailHelp" required >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">File Lagu</label>
                    <input type="file" class="form-control" id="email" name="file_lagu" aria-describedby="emailHelp" required >
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Musik</label>
                        <select class="form-control" id="level_user" name="jenis_musik" required>
                            <option class="form-control" id="level_user" name="jenis_musik" value="" >-- Pilih Jenis Musik anda --</option>
                            <option class="form-control" id="level_user" name="jenis_musik" value="Klasik">Musik Klasik</option>
                            <option class="form-control" id="level_user" name="jenis_musik" value="Jazz">Musik Jazz</option>
                            <option class="form-control" id="level_user" name="jenis_musik" value="Blues">Musik Blues</option>
                            <option class="form-control" id="level_user" name="jenis_musik" value="Country">Musik Country</option>
                            <option class="form-control" id="level_user" name="jenis_musik" value="Techno">Musik Techno</option>
                            <option class="form-control" id="level_user" name="jenis_musik" value="Reggae">Musik Reggae</option>
                            <option class="form-control" id="level_user" name="jenis_musik" value="R&B">Musik R&B</option>
                            <option class="form-control" id="level_user" name="jenis_musik" value="Rap">Musik Rap</option>
                            <option class="form-control" id="level_user" name="jenis_musik" value="Death Metal">Musik Death Metal</option>
                            <option class="form-control" id="level_user" name="jenis_musik" value="Dangdut">Musik Dangdut</option>
                            <option class="form-control" id="level_user" name="jenis_musik" value="Pop">Musik Pop</option>
                            <option class="form-control" id="level_user" name="jenis_musik" value="Balada">Musik Balada</option>
                            <option class="form-control" id="level_user" name="jenis_musik" value="Pop Rock">Musik Pop Rock</option>
                            <option class="form-control" id="level_user" name="jenis_musik" value="Religi">Musik Religi</option>
                        </select>

                        </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul Lagu</label>
            <input type="text" class="form-control" id="email" name="song" aria-describedby="emailHelp" required >
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pencipta Lagu</label>
            <input type="text" class="form-control" id="email" name="pencipta_lagu" aria-describedby="emailHelp" required >
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lama Kontrak </label>
            <input type="date" class="form-control" id="email" name="kontrak" aria-describedby="emailHelp" required >
            </div>

            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Tentang Artis</label>
                <textarea id="myTextarea" name="tentang_artis">-</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Lirik dan kunci gitar</label>
                <textarea id="myTextarea" name="lirik">-</textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputname1" class="form-label">Keterangan Lagu</label>
                <textarea id="myTextarea" name="keterangan_lagu">-</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Facebook</label>
                <input type="text" class="form-control" id="email" name="facebook" aria-describedby="emailHelp" value="#">
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link X</label>
                <input type="text" class="form-control" id="email" name="x" aria-describedby="emailHelp" value="#">
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Youtube</label>
                <input type="text" class="form-control" id="email" name="youtube" aria-describedby="emailHelp" value="#">
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Instagram</label>
                <input type="text" class="form-control" id="email" name="instagram" aria-describedby="emailHelp" value="#">
                </div>
                <label for="exampleInputEmail1" class="form-label">Publikasi</label>
                <hr>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apple Music</label>
                <input type="text" class="form-control" id="email" name="apple" aria-describedby="emailHelp" value="#">
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Spotify</label>
                <input type="text" class="form-control" id="email" name="spotify" aria-describedby="emailHelp" value="#">
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tiktok</label>
                <input type="text" class="form-control" id="email" name="tiktok" aria-describedby="emailHelp" value="#">
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Joox</label>
                <input type="text" class="form-control" id="email" name="joox" aria-describedby="emailHelp" value="#">
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tidal</label>
                <input type="text" class="form-control" id="email" name="tidal" aria-describedby="emailHelp" value="#">
                </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
