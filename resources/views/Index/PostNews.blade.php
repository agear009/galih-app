
@extends('Layouts.MainPost')

@section('Container')


    <main class="main">

      <!-- Hero Section -->
      <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

          <div class="carousel-item active">
            <img src="assets/post/assets/assets/img//template/Groovin/hero-carousel/hero-carousel-1.jpg" alt="">
            <div class="carousel-container">
              <h2>Kami profesional</h2>
              <p>MULAILAH PERJALANAN PENERBITAN MUSIK ANDA HARI INI</p>
              <a href="#featured-services" class="btn-get-started">Memulai</a>
            </div>
          </div><!-- End Carousel Item -->

          <div class="carousel-item">
            <img src="assets/post/assets/assets/img//template/Groovin/hero-carousel/hero-carousel-2.jpg" alt="">
            <div class="carousel-container">
              <h2>Publikasi Musik</h2>
              <p>Industri penerbitan musik dalam pemantauan lagu, pendaftaran global, dan pengumpulan royalti.</p>
              <a href="#featured-services" class="btn-get-started">Memulai</a>
            </div>
          </div><!-- End Carousel Item -->

          <div class="carousel-item">
            <img src="assets/post/assets/assets/img//template/Groovin/hero-carousel/hero-carousel-3.jpg" alt="">
            <div class="carousel-container">
              <h2>Terpercaya</h2>
              <p>Situs web yang telah terbukti konsisten dalam Penerbitan musik yang akurat dan terpercaya. Sebagai agregator musik, kami mengumpulkan dan menyajikan data dari berbagai sumber musik terpercaya, seperti album, single, dan artis, dengan tujuan memberikan pengalaman pengguna yang informatif dan menyenangkan. Kami memastikan bahwa setiap konten yang ditampilkan di platform kami telah diverifikasi kebenarannya dan sesuai dengan standar kualitas yang tinggi. Dengan komitmen terhadap integritas dan keakuratan, web kami berfungsi sebagai pendaftaran Lagu atau penyanyi anda yang bisa diandalkan untuk semua kebutuhan kemajuan musik dan penyanyi Anda.</p>
              <a href="#featured-services" class="btn-get-started">Memulai</a>
            </div>
          </div><!-- End Carousel Item -->

          <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>

          <ol class="carousel-indicators"></ol>

        </div>

      </section><!-- /Hero Section -->

      <!-- About Section -->
      <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Tentang</h2>
          <p>Agregator Musik</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">

          <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-6">
              <div class="about-img">
                <img src="assets/post/assets/img/about.jpg" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-lg-6">
              <h3 class="pt-0 pt-lg-5">Agregator digital (atau distributor digital) adalah perusahaan yang membantu mendistribusikan musik Anda ke platform streaming seperti YouTube dan YouTube Music.</h3>

              <!-- Tabs -->
              <ul class="nav nav-pills mb-3">
                <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">membantu</a></li>
                <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Tips:</a></li>
                <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Program Distributor Pilihan</a></li>
              </ul><!-- End Tabs -->

              <!-- Tab Content -->
              <div class="tab-content">

                <div class="tab-pane fade show active" id="about-tab1">

                  <p class="fst-italic">

                    Agregator dapat membantu dengan:<br>

                       1. Menyiapkan metadata Anda sesuai dengan standar industri<br>
                       2. Menyelesaikan pengiriman DDEX ke platform streaming musik<br>
                       3. Menawarkan berbagai tingkat dukungan pemberian hak lisensi, pemasaran, dan analisis<br>
                       4. Melaporkan penghasilan kepada Anda<br><br>
                          Agregator biasanya mengenakan tarif tetap atau mengambil bagian dari royalti yang terkumpul atas nama Anda untuk menutupi biaya layanannya. Tarif royalti ini dapat berbeda pada setiap agregator. Harap pelajari berbagai opsi yang tersedia untuk menemukan partner yang paling sesuai.


                  </p>

                </div><!-- End Tab 1 Content -->

                <div class="tab-pane fade" id="about-tab2">

                  <p class="fst-italic">

                    Pelajari partner yang tersedia. Ada banyak agregator musik di pasar, dan layanannya bervariasi.<br>
                    Direktori Layanan YouTube ini memiliki daftar partner yang mendukung pengiriman audio YouTube dan pengelolaan Content ID,<br>
                    serta berbagai layanan lainnya.<br>
                    Siapkan metadata Anda. Metadata Anda harus dikirimkan dalam format yang sesuai.<br>
                    Persyaratan format akan berbeda pada setiap aggregator.
                    Setiap agregator juga akan memberitahukan format file audio, file gambar album, dan spesifikasi lainnya.<br>
                    Selalu kirimkan aset musik Anda dengan  kualitas terbaik, karena sering kali layanan memerlukan file lossless (misalnya, wav atau FLAC).

                  </p>

                </div><!-- End Tab 2 Content -->

                <div class="tab-pane fade" id="about-tab3">

                  <p class="fst-italic">
                    <br>
                Partner Distributor Pilihan adalah agregator terbaik di kelasnya yang mematuhi serangkaian praktik terbaik teknis dan bisnis yang ditetapkan oleh YouTube<br>
                dan bersedia menerapkan integrasi sistem untuk membantu meningkatkan akses ke produk musik.<br>
                Partner ini ditandai sebagai Distributor Pilihan di Direktori Layanan YouTube.<br>

                Setiap Distributor Pilihan harus menawari klien layanan pengelolaan dan pengiriman konten untuk YouTube, <br>
                termasuk pengiriman Trek Gambar Album, pengelolaan hak Content ID, dan pengelolaan aset.<br>
                Selain itu, Distributor Pilihan harus memberi klien laporan penggunaan dan pendapatan kontennya di YouTube dan YouTube Music.

                  </p>

                </div><!-- End Tab 3 Content -->

              </div>

            </div>

          </div>

        </div>

      </section><!-- /About Section -->

      <!-- Stats Section -->
      <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
              <div class="stats-item">
                <i class="bi bi-emoji-smile"></i>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item">
                <i class="bi bi-journal-richtext"></i>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item">
                <i class="bi bi-headset"></i>
                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item">
                <i class="bi bi-people"></i>
                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
              </div>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </section><!-- /Stats Section -->

      <!-- Clients Section -->
      <section id="clients" class="clients section light-background">

        <div class="container" data-aos="fade-up">

          <div class="row gy-4">

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/post/assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/post/assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/post/assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/post/assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/post/assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/post/assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

          </div>

        </div>

      </section><!-- /Clients Section -->

      <!-- Services Section -->
      <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Layanan</h2>
          <p>menyediakan berbagai layanan untuk membantu artis, label, dan manajer dalam mendistribusikan, mengelola, dan mempromosikan.</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Distribusi Musik</h3>
                </a>
                <p>Mengirimkan musik ke berbagai platform streaming dan digital seperti Spotify, Apple Music, Amazon Music, Deezer, Tidal, dan lainnya dari satu tempat. Ini mencakup pengunggahan lagu, album, dan EP.</p>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Pengelolaan Metadata</h3>
                </a>
                <p>Memastikan semua informasi yang berkaitan dengan musik, seperti nama artis, judul lagu, album, genre, dan detail lainnya, diinput dengan benar dan sesuai standar platform distribusi.</p>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Pengumpulan dan Royalti</h3>
                </a>
                <p>Mengumpulkan royalti dari berbagai platform streaming dan digital dan memastikan pembayaran yang tepat kepada artis atau label. Ini juga sering mencakup pelaporan tentang pendapatan yang diperoleh.</p>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="bi bi-bounding-box-circles"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Analitik dan Pelaporan</h3>
                </a>
                <p>Menyediakan data dan laporan analitik tentang performa musik, termasuk statistik pemutaran, unduhan, dan demografi pendengar. Ini membantu dalam memahami audiens dan mengevaluasi strategi pemasaran.</p>
                <a href="service-details.html" class="stretched-link"></a>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="bi bi-calendar4-week"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Manajemen Hak Cipta</h3>
                </a>
                <p>Beberapa agregator membantu dalam pengelolaan hak cipta dan lisensi musik, termasuk pendaftaran karya untuk perlindungan hak cipta dan pengelolaan lisensi untuk penggunaan musik di media lain.</p>
                <a href="service-details.html" class="stretched-link"></a>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="bi bi-chat-square-text"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Pemasaran dan Promosi</h3>
                </a>
                <p>Menawarkan layanan promosi seperti penempatan musik di playlist resmi atau kurasi, kampanye media sosial, dan promosi iklan untuk meningkatkan visibilitas musik.</p>
                <a href="service-details.html" class="stretched-link"></a>
              </div>
            </div><!-- End Service Item -->

          </div>

        </div>

      </section><!-- /Services Section -->

      <!-- Why Us Section -->
      <section id="why-us" class="why-us section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Kenapa harus bergabung</h2>
          <p>Menggunakan agregator musik, atau layanan agregasi musik, memiliki beberapa keuntungan utama:</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="card-item">
                <span>01</span>
                <h4><a href="" class="stretched-link">Akses ke Banyak Platform</a></h4>
                <p>Agregator musik memungkinkan artis dan label untuk mendistribusikan musik mereka ke berbagai platform streaming seperti Spotify, Apple Music, Amazon Music, dan lainnya melalui satu saluran</p>
              </div>
            </div><!-- Card Item -->

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="card-item">
                <span>02</span>
                <h4><a href="" class="stretched-link">Efisiensi Waktu</a></h4>
                <p>Dengan menggunakan agregator musik, Anda menghemat waktu yang diperlukan untuk mengunggah dan mengelola musik di setiap platform secara terpisah. </p>
              </div>
            </div><!-- Card Item -->

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="card-item">
                <span>03</span>
                <h4><a href="" class="stretched-link">Biaya yang Lebih Terjangkau</a></h4>
                <p>Menggunakan agregator musik biasanya lebih hemat biaya dibandingkan dengan berurusan langsung dengan setiap platform streaming.</p>
              </div>
            </div><!-- Card Item -->

          </div>

        </div>

      </section><!-- /Why Us Section -->

      <!-- Portfolio Section -->
      <section id="portfolio" class="portfolio section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Product</li>
              <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-books">Books</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="assets/post/assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/post/assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="assets/post/assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/post/assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="assets/post/assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/post/assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                <img src="assets/post/assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/post/assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="assets/post/assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/post/assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/post/assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="assets/post/assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                <img src="assets/post/assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/post/assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="assets/post/assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="assets/post/assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="assets/post/assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/post/assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                <img src="assets/post/assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/post/assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->

          </div>

        </div>

      </section><!-- /Portfolio Section -->

      <!-- Team Section -->
      <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row gy-4">

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="assets/post/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter-x"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <img src="assets/post/assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter-x"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <img src="assets/post/assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter-x"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="member">
                <img src="assets/post/assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter-x"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->

          </div>

        </div>

      </section><!-- /Team Section -->

      <!-- Pricing Section -->
      <section id="pricing" class="pricing section">



      </section><!-- /Pricing Section -->

      <!-- Faq Section -->
      <section id="faq" class="faq section light-background">

        <!-- Section Title -->




      </section><!-- /Faq Section -->

      <!-- Contact Section -->
      <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Kontak</h2>
          <p>anda dapat berkonsultasi dengan cara mendatangi kantor kami langsung atau melalui kontak kami</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4">
              <div class="info-item d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>Baregbeg, Ciamis Regency, West Java 46274</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex flex-column justify-content-center align-items-center info-item-borders">
                <i class="bi bi-telephone"></i>
                <h3>Handphone</h3>
                <p>081214209177</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p>saamparandigitalgroup@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <form action="{{ route('registermusic.store') }}" method="POST" class="php-email-form" enctype="multipart/form-data">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="nama" class="form-control" placeholder="Nama Anda" >
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Alamat Email" >
              </div>

              <div class="col-md-6 ">
                <input type="number" class="form-control" name="nohp" placeholder="nomor handphone dan WA" >
              </div>

              <div class="col-md-6 ">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat Sesuai KTP" >
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="artis" placeholder="Silahkan masukan nama artis anda bila lebih dari satu slahkan memakai koma untuk memisahkan nama - nama artis" >
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="lagu" placeholder="Silahkan masukan judul lagu anda bila lebih dari satu slahkan memakai koma untuk memisahkan judul - judul lagu anda">
                <input type="hidden" class="form-control" name="level_user" value="anggota">
              </div>
                <button type="submit" >Daftar</button>
              </div>

            </div>
          </form><!-- End Contact Form -->

        </div>

      </section><!-- /Contact Section -->

    </main>


@endsection




