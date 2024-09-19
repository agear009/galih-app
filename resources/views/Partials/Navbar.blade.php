<!-- Example Code -->
@auth
@if( auth()->user()->level_user==="Anggota")
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Control Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/admin" {{ ($active==="Home")?'active':'' }}>Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('member.index') }}" {{ ($active==="Home")?'active':'' }}>Artis</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('album.index') }}" {{ ($active==="Home")?'active':'' }}>Album</a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="POST">
                    @csrf
                <li class="nav-item">  <button type="submit" class="nav-link bi bi-box-arrow-right {{ ($active==="logout")?'active':'' }}"> Logout</button></li>
                </form>
            </li>
        </ul>
        @if($title==="Testimonial")
            <form class="d-flex" role="search" action="/searchs" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Testimoni</button>
            </form>

        @elseif($title==="Content")
            <form class="d-flex" role="search" action="/searchs" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        @elseif($title==="CopyWrite")
            <form class="d-flex" role="search" action="/searchs" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        @elseif($title==="Product")
            <form class="d-flex" role="search" action="/searchs" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        @elseif($title==="Category")
            <form class="d-flex" role="search" action="{{ route('searchs.index') }}" method="get">
                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success"  type="submit">Search</button>
            </form>
        @else
            <form class="d-flex" role="search" action="/searchs" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        @endif

        </div>
    </div>
    </nav>
</div>

@elseif(auth()->user()->level_user==="Karyawan")

        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Control Panel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin" {{ ($active==="Home")?'active':'' }}>Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Post
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('post.index') }}" {{ ($active==="Category")?'active':'' }}>Post</a></li>
                        <li><a class="dropdown-item" href="#" {{ ($active==="ImageCover")?'active':'' }}>Image Cover</a></li>
                        <li><a class="dropdown-item" href="#" {{ ($active==="Image")?'active':'' }}>Image</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Agregator
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('post.index') }}" {{ ($active==="Category")?'active':'' }}></a></li>
                        <li><a class="dropdown-item" href="{{ route('artist.index') }}" {{ ($active==="ImageCover")?'active':'' }}>Artis</a></li>
                        <li><a class="dropdown-item" href="#" {{ ($active==="Image")?'active':'' }}>Image</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Page
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('post.index') }}" {{ ($active==="Category")?'active':'' }}>About Page</a></li>
                        <li><a class="dropdown-item" href="#" {{ ($active==="ImageCover")?'active':'' }}>Image Cover</a></li>
                        <li><a class="dropdown-item" href="#" {{ ($active==="Image")?'active':'' }}>Image</a></li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" {{ ($active==="Customer")?'active':'' }}>Customer</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                        <li class="nav-item">  <button type="submit" class="nav-link bi bi-box-arrow-right {{ ($active==="logout")?'active':'' }}"> Logout</button></li>
                        </form>
                    </li>
                </ul>
                @if($title==="Testimonial")
                    <form class="d-flex" role="search" action="/searchs" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Testimoni</button>
                    </form>

                @elseif($title==="Content")
                    <form class="d-flex" role="search" action="/searchs" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                @elseif($title==="CopyWrite")
                    <form class="d-flex" role="search" action="/searchs" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                @elseif($title==="Product")
                    <form class="d-flex" role="search" action="/searchs" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                @elseif($title==="Category")
                    <form class="d-flex" role="search" action="{{ route('searchs.index') }}" method="get">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success"  type="submit">Search</button>
                    </form>
                @else
                    <form class="d-flex" role="search" action="/searchs" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                @endif

                </div>
            </div>
            </nav>
        </div>

@else

{{--  //jika sudah login  --}}
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Control Panel</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/admin" {{ ($active==="Home")?'active':'' }}>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/user" {{ ($active==="User")?'active':'' }}>User</a>
                            </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" {{ ($active==="Aboutme")?'active':'' }}>About Me</a></li>
                            <li><a class="dropdown-item" href="#" {{ ($active==="Education")?'active':'' }}>Education</a></li>
                            <li><a class="dropdown-item" href="#" {{ ($active==="Skill")?'active':'' }}>Skill</a></li>
                            <li><a class="dropdown-item" href="#" {{ ($active==="Experience")?'active':'' }}>Experience</a></li>
                            <li><a class="dropdown-item" href="#" {{ ($active==="Portopolio")?'active':'' }}>Portofolio</a></li>
                            <li><a class="dropdown-item" href="#" {{ ($active==="Contactme")?'active':'' }}>Contact Me</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" {{ ($active==="Product")?'active':'' }}>
                            Product
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('category.index') }}" {{ ($active==="Categoryproduct")?'active':'' }}>Category Product</a></li>
                            <li><a class="dropdown-item" href="{{ route('products.index') }}" {{ ($active==="Product")?'active':'' }}>Product</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('copy-writes.index') }}" {{ ($active==="Copywrite")?'active':'' }}>CopyWrite Product</a></li>
                            <li><a class="dropdown-item" href="{{ route('contents.index') }}" {{ ($active==="Copywriteimage")?'active':'' }}>CopyWrite Content</a></li>
                            <li><a class="dropdown-item" href="{{ route('testimonials.index') }}" {{ ($active==="Copywriteimage")?'active':'' }}>Image Testimonial</a></li>
                            <li><a class="dropdown-item" href="{{ route('banners.index') }}" {{ ($active==="Copywriteimage")?'active':'' }}>Image Banner</a></li>
                        </ul>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Post
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('post.index') }}" {{ ($active==="Category")?'active':'' }}>Post</a></li>
                            <li><a class="dropdown-item" href="#" {{ ($active==="ImageCover")?'active':'' }}>Image Cover</a></li>
                            <li><a class="dropdown-item" href="#" {{ ($active==="Image")?'active':'' }}>Image</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Agregator
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('artist.index') }}" {{ ($active==="ImageCover")?'active':'' }}>Artis</a></li>
                            <li><a class="dropdown-item" href="{{ route('album.index') }}" {{ ($active==="Image")?'active':'' }}>Album</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Page
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('post.index') }}" {{ ($active==="Category")?'active':'' }}>About Page</a></li>
                            <li><a class="dropdown-item" href="#" {{ ($active==="ImageCover")?'active':'' }}>Image Cover</a></li>
                            <li><a class="dropdown-item" href="#" {{ ($active==="Image")?'active':'' }}>Image</a></li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" {{ ($active==="Customer")?'active':'' }}>Customer</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                            <li class="nav-item">  <button type="submit" class="nav-link bi bi-box-arrow-right {{ ($active==="logout")?'active':'' }}"> Logout</button></li>
                            </form>
                        </li>
                    </ul>
                    @if($title==="Testimonial")
                        <form class="d-flex" role="search" action="/searchs" method="get">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Testimoni</button>
                        </form>

                    @elseif($title==="Content")
                        <form class="d-flex" role="search" action="/searchs" method="get">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    @elseif($title==="CopyWrite")
                        <form class="d-flex" role="search" action="/searchs" method="get">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    @elseif($title==="Product")
                        <form class="d-flex" role="search" action="/searchs" method="get">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    @elseif($title==="Category")
                        <form class="d-flex" role="search" action="{{ route('searchs.index') }}" method="get">
                            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success"  type="submit">Search</button>
                        </form>
                    @else
                        <form class="d-flex" role="search" action="/searchs" method="get">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    @endif

                    </div>
                </div>
                </nav>
            </div>
        @endif

@endauth
 <!-- End Example Code -->
