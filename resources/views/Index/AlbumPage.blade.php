<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../../assets/HalamanArtis/img/favicon.png" type="image/png">
        <title>Saamparan Digital Group</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../assets/HalamanArtis/css/bootstrap.css">
        <link rel="stylesheet" href="../../assets/HalamanArtis/vendors/linericon/style.css">
        <link rel="stylesheet" href="../../assets/HalamanArtis/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../assets/HalamanArtis/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../../assets/HalamanArtis/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="../../assets/HalamanArtis/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../../assets/HalamanArtis/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="../../assets/HalamanArtis/vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="../../assets/HalamanArtis/css/style.css">
        <link rel="stylesheet" href="../../assets/HalamanArtis/css/responsive.css">
    </head>
    <body>
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="../../assets/HalamanArtis/img/" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<!--<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="../../assets/HalamanArtis/index.html">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="../../assets/HalamanArtis/about-us.html">About</a></li>
								<li class="nav-item"><a class="nav-link" href="../../assets/HalamanArtis/services.html">Services</a>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="../../assets/HalamanArtis/portfolio.html">Portfolio</a></li>
										<li class="nav-item"><a class="nav-link" href="../../assets/HalamanArtis/portfolio-details.html">Project Details</a></li>
										<li class="nav-item"><a class="nav-link" href="../../assets/HalamanArtis/elements.html">Elements</a></li>
									</ul>
								</li>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="../../assets/HalamanArtis/blog.html">Blog</a></li>
										<li class="nav-item"><a class="nav-link" href="../../assets/HalamanArtis/single-blog.html">Blog Details</a></li>
									</ul>
								</li>
								<li class="nav-item"><a class="nav-link" href="../../assets/HalamanArtis/contact.html">Contact</a></li>
							</ul>-->
						</div>
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->

        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
				<div class="container">
                    @forelse($Artist as $artis)
					<div class="row">
						<div class="col-lg-6">
							<div class="home_left_img">
                            <img src="  {{ asset('storage/CoverArtists/'.$artis->cover_artis) }} " alt="" height="80%" width="80%">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="banner_content">
                                <br>
                                <br>
                                <br>
								<h5>Halo Saya</h5>
								<h2>{{ strip_tags($artis->artist) }}</h2>
								<p>{{ strip_tags($artis->tentang_artis) }}</p>

							</div>
						</div>
					</div>
                    @empty
                    <div class="alert alert-danger">
                        Data tidak ditemukan.
                    </div>
                    @endforelse
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->



        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>Saamparan Digital Grup</h3>
        					</div>
        					<p>Gregator Profesional yang telah bekerjasama dengan label ternama</p>
        					 by <a href="https://sdgmusik.com">sdgmusik.com</a>
<!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
</p>
        				</aside>
        			</div>

        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../../assets/HalamanArtis/js/jquery-3.2.1.min.js"></script>
        <script src="../../assets/HalamanArtis/js/popper.js"></script>
        <script src="../../assets/HalamanArtis/js/bootstrap.min.js"></script>
        <script src="../../assets/HalamanArtis/js/stellar.js"></script>
        <script src="../../assets/HalamanArtis/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="../../assets/HalamanArtis/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="../../assets/HalamanArtis/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="../../assets/HalamanArtis/vendors/isotope/isotope-min.js"></script>
        <script src="../../assets/HalamanArtis/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="../../assets/HalamanArtis/js/jquery.ajaxchimp.min.js"></script>
        <script src="../../assets/HalamanArtis/endors/counter-up/jquery.waypoints.min.js"></script>
        <script src="../../assets/HalamanArtis/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="../../assets/HalamanArtis/js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="../../assets/HalamanArtis/js/gmaps.min.js"></script>
        <script src="../../assets/HalamanArtis/js/theme.js"></script>
    </body>
</html>
