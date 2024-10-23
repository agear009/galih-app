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
						<a class="navbar-brand logo_h" href="#"><img src="../../assets/HalamanArtis/img/" alt=""></a>
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
					<div class="row">
						<div class="col-lg-6">
							<div class="home_left_img">
                            <img src="  {{ asset('storage/CoverArtists/'.$Artist->cover_artis) }} " alt="" height="80%" width="80%">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="banner_content">
                                <br>
                                <br>
                                <br>
								<h5>Halo Saya</h5>
								<h2>{{ strip_tags($Artist->artist) }}</h2>
								<p>{{!! nl2br($Artist->tentang_artis) !!}}</p>

							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
        	<div class="container">
        		<div class="row welcome_inner">
        			<div class="col-lg-6">
        				<div class="welcome_text">
        					<h4><p>{{ strip_tags($Artist->song) }}</p></h4><br>
							<iframe width="420" height="315" src="{{ $Artist->youtube }}">
							</iframe>

        					<p>{{!! nl2br($Artist->keterangan_lagu) !!}}</p>
        					<div class="row">
        						<div class="col-md-4">
        							<div class="wel_item">
                                        <a href="{{ $Artist->youtube }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-caret-right-square" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                            <path d="M5.795 12.456A.5.5 0 0 1 5.5 12V4a.5.5 0 0 1 .832-.374l4.5 4a.5.5 0 0 1 0 .748l-4.5 4a.5.5 0 0 1-.537.082"/>
                                          </svg>
        								<h4>youtube</h4>
                                        </a>
        							</div>
        						</div>
        						<div class="col-md-4">
        							<div class="wel_item">
                                        <a href="{{ $Artist->instagram }}">
        								<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                          </svg>
        								<h4>Instagram</h4>
                                        </a>
        							</div>
        						</div>

        					</div>
        				</div>
        			</div>
        			<div class="col-lg-6">

        		    </div>
        	</div>
        </section>
        <!--================End Welcome Area =================-->

        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>{{ strip_tags($Artist->song) }}</h2><br>
                    <audio controls>

                        <source src="{{ asset('storage/FileLagu/'.$Artist->file_lagu) }}" type="audio/ogg">
                        <source src="{{ asset('storage/FileLagu/'.$Artist->file_lagu) }}" type="audio/mpeg">
                        <source src="{{ asset('storage/FileLagu/'.$Artist->file_lagu) }}" type="audio/wav">
                      Your browser does not support the audio element.
                      </audio><br>
        			<p>{{!! nl2br($Artist->lirik) !!}}</p>
        		</div>
        		<div class="feature_inner row">
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                            <a href="{{ $Artist->appel }}">
        					<img src="../../assets/post/assets/img/clients/client-1.png" class="img-fluid" alt="">
                            </a>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                            <a href="{{ $Artist->spotify }}">
        					<img src="../../assets/post/assets/img/clients/client-2.png" class="img-fluid" alt="">
                            </a>
                        </div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                            <a href="{{ $Artist->youtube }}">
        					<img src="../../assets/post/assets/img/clients/client-3.png" class="img-fluid" alt="">
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                            <a href="{{ $Artist->tiktok }}">
        					<img src="../../assets/post/assets/img/clients/client-4.png" class="img-fluid" alt="">
                            </a>
                        </div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                            <a href="{{ $Artist->joox }}">
        					<img src="../../assets/post/assets/img/clients/client-5.png" class="img-fluid" alt="">
                            </a>
                        </div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
                            <a href="{{ $Artist->tidal }}">
                            <img src="../../assets/post/assets/img/clients/client-6.png" class="img-fluid" alt="">
                            </a>
                        </div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->

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
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>{{ strip_tags($Artist->pencipta_lagu) }}</h3>
        					</div>
        					<p>Pencipta Lagu</p>

        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Ikuti saya</h3>
        					</div>
        					<p>Disosial media</p>
        					<ul class="list">
        						<li><a href="{{$Artist->facebook}}"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="{{ $Artist->x }}"><i class="fa fa-twitter"></i></a></li>
        					</ul>
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
