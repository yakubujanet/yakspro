<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="inner-navbar">
                    <a class="navbar-brand" href="#"><img src="{{asset('/images/logo.png')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>

                        </ul>
                        <a href="" class="btn btn-primary">Get Started <i class="fa fa-arrow-right"></i></a>

                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="each-col">
                        <div class="logo-cont">
                            <img src="{{asset('images/logo.png')}}" alt="YAKSPRO">
                        </div>
                        <p>Premium solutions for your car and living space</p>
                        <div class="socials">
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                            <a href=""><i class="fa-brands fa-x"></i></a>
                            <a href=""><i class="fa-brands fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="each-col">

                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Products</a></li>
                            <li><a href="">Gallery</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="each-col">

                        <h3>Services</h3>
                        <ul>
                            <li><a href="">Interior Upgrades</a></li>
                            <li><a href="">Home Interiors</a></li>
                            <li><a href="">Safety Solutions</a></li>
                            <li><a href="">Custom Solutions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="each-col">
                        <h3>Stay Connected</h3>
                        <p>Get the latest updates, tips and offers</p>
                        <form action="">
                            <div class="form-group">
                                <input type="text" placeholder="Enter your email address" class="form-control">
                                <button class="btn btn-primary"><i class="fa fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>