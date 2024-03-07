<!-- Example Code -->

        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Galih Siliwang WD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin" {{ ($active==="Home")?'active':'' }}>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="user" {{ ($active==="User")?'active':'' }}>User</a>
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
                        <li><a class="dropdown-item" href="#" {{ ($active==="Copywrite")?'active':'' }}>CopyWrite Product</a></li>
                        <li><a class="dropdown-item" href="#" {{ ($active==="Copywriteimage")?'active':'' }}>CopyWrite Image</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" {{ ($active==="Customer")?'active':'' }}>Customer</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
            </nav>
        </div>


 <!-- End Example Code -->
