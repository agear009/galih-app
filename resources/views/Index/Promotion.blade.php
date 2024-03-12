<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Healet</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap_promotion.css" />
  <!-- font awesome style -->
  <link href="../../assets/css/font-awesome_promotion.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../../assets/css/style_promotion.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../../assets/css/responsive_promotion.css" rel="stylesheet" />
{{--  style gambar mulai --}}
  <style>
    div.gallery {
      border: 1px solid #ccc;
    }

    div.gallery:hover {
      border: 1px solid #777;
    }

    div.gallery img {
      width: 100%;
      height: auto;
    }

    div.desc {
      padding: 15px;
      text-align: center;
    }

    * {
      box-sizing: border-box;
    }

    .responsive {
      padding: 0 6px;
      float: left;
      width: 24.99999%;
    }

    @media only screen and (max-width: 700px) {
      .responsive {
        width: 49.99999%;
        margin: 6px 0;
      }
    }

    @media only screen and (max-width: 500px) {
      .responsive {
        width: 100%;
      }
    }

    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }
    </style>
{{--  style gambar akhir--}}
</head>

<body>
    <container>


  <!-- end header section -->

  <!-- slider section -->
  <section class="slider_section position-relative">
    <div class="slider_bg_box">

        @forelse($Banner as $banner)
        <img src="{{ asset('storage/Banners/'.$banner->banner) }}">
        @empty
        <img src="../../assets/images/slider-bg.jpg" alt="">
        @endforelse


      {{--  @if($title==="Promotion")
      <img src="{{ asset('storage/Banners/'.$banner->banner) }}">
     // @else

    //  @endif --}}
    </div>
    <div class="slider_bg"></div>
    <div class="container">
      <div class="col-md-9 col-lg-8">
        <div class="detail-box">
          <h1>
            {{ strip_tags($Product->name) }}
            <br> Rp. {{ number_format(strip_tags($Product->price)) }}
          </h1>
          <p>
            {{ strip_tags($Product->description) }}
          </p>

        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->

  <!-- shop section -->

  <section class="testimoni_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                {{ strip_tags($Product->headline) }}
            </h2>
          </div>
        @forelse($Content as $content)
        <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="{{ asset('storage/Testimonials/'.$content->image_video) }}">
                <img src="{{ asset('storage/Testimonials/'.$content->image_video) }}"alt="Cinque Terre" width="20px" height="40px">
              </a>
              <div class="desc"></div>
            </div>
          </div>
          @empty
          <div class="alert alert-danger">
              Data tidak ditemukan.
          </div>
          @endforelse
    </div>
  </section>

  <section class="solusi_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>

        </h2>
      </div>
      <div class="row">

      </div>

    </div>
  </section>
  <section class="solusi_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Masalah
        </h2>
      </div>
      <div class="row">
        {{ strip_tags($Product->masalah) }}
      </div>

    </div>
  </section>

  <section class="solusi_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Solusi
        </h2>
      </div>
      <div class="row">
        {{ strip_tags($Product->solusi) }}
      </div>
      <div class="btn-box">
        <a href="">
          View All Products
        </a>
      </div>
    </div>
  </section>

  <section class="manfaat_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Manfaat
        </h2>
      </div>
      <div class="row">
        {{ strip_tags($Product->manfaat) }}
      </div>

    </div>
  </section>

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
         Testimonial
        </h2>
      </div>

        @forelse($Testimonial as $testimonial)
        <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="{{ asset('storage/Testimonials/'.$testimonial->gambar_testimoni) }}">
                        <img src="{{ asset('storage/Testimonials/'.$testimonial->gambar_testimoni) }}"alt="Cinque Terre" width="20px" height="40px">
                    </a>
                <div class="desc">Testimoni dari Customer</div>
                </div>
          </div>
          @empty
          <div class="alert alert-danger">
              Data tidak ditemukan.
          </div>
          @endforelse
    </div>
  </section>

  <!-- end shop section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">

      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">

                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Samantha Jonas
                      </h6>
                    </div>
                    <p>
                      1
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Samantha Jonas
                      </h6>
                    </div>
                    <p>
                     2
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Samantha Jonas
                      </h6>
                    </div>
                    <p>
                   3
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="manfaat_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Pesan Sekarang
        </h2>
      </div>


        <div class="row justify-content-center">


                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                @if(session()->has('loginError'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif

               <main class="form-signin w-100 m-auto">

                 <form action="{{ route('members.store') }}" method="POST">
                    @csrf
                   <div class="form-floating">
                    <label for="floatingInput">Name</label>
                     <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" name="name" placeholder="name@example.com" value="{{ old('email') }}"  required>

                     @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                     @enderror
                   </div>
                   <div class="form-floating">
                    <label for="floatingphone">Nomor WA</label>
                     <input type="number" class="form-control" id="floatingphone" name="phone" placeholder="Nomor hp" required>
                   </div>
                   <div class="form-floating">
                    <label for="floatingphone">Alamat</label>
                     <input type="text" class="form-control" id="floatingphone" name="address" placeholder="Alamat RT RW Kelurahan Kecamatan Kota Provinsi (kode pos)" required>
                   </div>
                    <div class="form-floating">
                    {{--  <label for="floatingInput">Email address</label>  --}}
                     <input type="hidden" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com / jika tidak punya abaikan saja" value="{{ old('email') }}" >
                     <input type="hidden" class="form-control @error('email') is-invalid @enderror"  name="name_product" value="{{ strip_tags($Product->name) }} / {{ strip_tags($Product->produsen) }}" required>
                     <input type="hidden" class="form-control"  name="product" value="{{ strip_tags($Product->name) }}" required>
                     <input type="hidden" class="form-control"  name="price" value="{{ strip_tags($Product->price) }}" required>
                     <input type="hidden" class="form-control"  name="phone1" value="{{ strip_tags($Product->phone1) }}" required>
                     @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                     @enderror
                   </div>
                   <br>
                   <button class="btn btn-primary w-100 py-2" type="submit">Beli</button>

                 </form>

               </main>


      </div>


    </div>
  </section>

  <section class="manfaat_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>

        </h2>
      </div>
      <div class="row">
        {{ strip_tags($Product->kelangkaan) }}
      </div>

    </div>
    <div class="container">

      <div class="row">
        {{ strip_tags($Product->kerugian) }}
      </div>

    </div>
  </section>




  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span>
        <a href="https://galih.my.id/">Siliwangi WD</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <!-- jQery -->
  <script src="../../assets/js/jquery-3.4.1.min_promotion.js"></script>
  <!-- bootstrap js -->
  <script src="../../assets/js/bootstrap_promotion.js"></script>
  <!-- custom js -->
  <script src="../../assets/js/custom_promotion.js"></script>
</container>
</body>

</html>
