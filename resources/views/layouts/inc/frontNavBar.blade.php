<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
        <div class="w-100 d-flex justify-content-between">
            <div>
                <i class="fa-solid fa-envelope text-light contact-info"></i>
                <a href="#" class="navbar-sm-brand text-light text-decoration-none contact-info">
                    infos@gmail.com
                </a>

                <i class="fa-solid fa-phone text-light contact-info"></i>
                <a href="#" class="navbar-sm-brand text-white text-decoration-none contact-info">
                    +212-709354559
                </a>
            </div>

            <div>
                <a href="#" class="text-white"><i class="fa-brands fa-facebook me-2"></i></a>
                <a href="#" class="text-white"><i class="fa-brands fa-instagram me-2"></i></a>
                <a href="#" class="text-white"><i class="fa-brands fa-twitter me-2"></i></a>
                <a href="#" class="text-white"><i class="fa-brands fa-youtube me-2"></i></a>
            </div>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between w-100">
            <h3 class="text-success mb-0">LOGO</h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item nav-items">
                    <a class="nav-link nav-links" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item nav-items">
                    <a class="nav-link nav-links" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item nav-items">
                    <a class="nav-link nav-links" href="{{ url('category') }}">Shop</a>
                </li>
                <li class="nav-item nav-items">
                    <a class="nav-link nav-links" href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>

            <div class="d-flex align-items-center">
                <a onclick="toggleMenuSearch()" class="nav-link text-decoration-none text-dark me-3">
                    <i class="fa-solid fa-magnifying-glass nav-icon"></i>
                </a>
                <a href="#" class="nav-link text-decoration-none text-dark me-3">
                    <i class="fa-solid fa-cart-arrow-down nav-icon"></i>
                </a>
                <a onclick="toggleMenuProfile()" class="nav-link text-decoration-none text-dark">
                    <i class="fa-solid fa-user nav-icon"></i>
                </a>
            </div>

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    @guest

                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="sub-menu-link">
                                <div class="sub-menu-icons">
                                    <i class="fas fa-sign-in-alt"></i>
                                </div>
                                <p>Login</p>
                                <span>></span>
                            </a>
                        @endif
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="sub-menu-link">
                                <div class="sub-menu-icons">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <p>Register</p>
                                <span>></span>
                            </a>
                        @endif
                    @else
                        <div class="user-infos">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" alt="">
                            <h3> {{ Auth::user()->name }}</h3>
                        </div>
                        <hr>
                        <a href="" class="sub-menu-link">
                            <div class="sub-menu-icons">
                                <i class="fas fa-user-edit"></i>
                            </div>
                            <p>Edit Profile</p>
                            <span>></span>
                        </a>

                        <a href="{{ url('my-order') }}" class="sub-menu-link">
                            <div class="sub-menu-icons">
                                <i class="fas fa-list-alt"></i>
                            </div>
                            <p>Orders</p>
                            <span>></span>
                        </a>

                        <a href="{{ url('cart') }}" class="sub-menu-link">
                            <div class="sub-menu-icons">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <p>Carts</p>
                            <span>></span>
                        </a>


                        <a class="sub-menu-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                            <div class="sub-menu-icons">
                                <i class="fas fa-sign-out-alt"></i>
                            </div>
                            <p>{{ __('Logout') }}</p>
                            <span>></span>
                        </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>

            <div class="form-search" id="subSearch">
                <form action="{{ url('searchProduct') }}" method="POST">
                    @csrf
                    <div class="sub-form-search">
                        <input  type="search" name="product_name" class="form-control" id="search_product" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2" required>
                        <button class="btn" type="submit" id="button-addon2">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>

<div class="scroll-page">
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>
</div>
