@extends('layouts.app')
@section('sect1')
    <div class="position-relative">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner text-white">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{ asset('img/horse-ferrari-logo.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('img/2023-ferrari-499p-formula-one.jpg') }}" class="d-block w-100 img-fluid"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('img/2023-ferrari-499p-red.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('img/ferrari-499p-2023-red-beautiful-car.jpg') }}" class="d-block w-100 img-fluid"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>Fourth slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev css-1dcc63t" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.464 58.271" style="width:58.271px">
                    <g stroke-width="1" transform="translate(-1624 -187.923)">
                        <path d="M50.464 43.992L25.732 58.271 1 43.992V15.434L25.732 1.155l24.732 14.279z"
                            transform="translate(1623.5 187.345)" class="hexagon" fill="#ffffff"></path>
                        <path class="icon" d="M0 5.675L7.432 0l7.432 5.675" transform="rotate(-90 935.432 -711.068)">
                        </path>
                    </g>
                </svg>
            </button>
            <button class="carousel-control-next css-1dcc63t" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.464 58.271" style="width:58.271px">
                    <g stroke-width="1" transform="translate(-1624 -187.923)">
                        <path d="M50.464 43.992L25.732 58.271 1 43.992V15.434L25.732 1.155l24.732 14.279z"
                            transform="translate(1623.5 187.345)" class="hexagon" fill="#ffffff"></path>
                        <path class="icon" d="M0 0l7.432 5.674L14.864 0" transform="rotate(-90 935.432 -711.068)">
                        </path>
                    </g>
                </svg>
            </button>
            <style>
                .css-1dcc63t {
                    opacity: 0.2;
                    border: 0;
                    background: none;
                    box-shadow: none;
                    color: #202020;
                }

                .toMore:hover {
                    background: white;
                    opacity: 1;
                    transform: scale(0.22);
                }
            </style>
        </div>
        {{-- <img src="{{ asset('img/sect1.jpg') }}" alt="sect1_logo" class="img-fluid position-relative"> --}}
        <div class="position-absolute top-0 left-0 d-flex pt-3  text-uppercase ">
            <b class="bg-dark p-2" style=" clip-path: polygon(0px 0px, 100% 0px, calc(100% - 15px) 100%, 0% 100%);">
                <Span class="text-white-50">Home/</Span> <span class="text-light">Welcome</span>
            </b>
        </div>
        <div class="position-absolute p-3 top-50 left-0" style="margin-top: -120px; margin-left:5%">
            <div class="container text-white">
                <div class="mt-4 p-5">
                    <h2>
                        Ferrari
                    </h2>
                    <h1 class="text-nowrap">
                        Welcome to our Ferrari website
                    </h1>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 right-0 w-100">
            <div class="container text-uppercase text-white pb-3">
                <div class="row text-wrap justify-content-end d-flex">
                    <div class="col-8"></div>
                    <div class="col-1 text-end ">
                        <a href="#images-s" class="cta cta-right text-uppercase icon-button css-1dcc63t toMore"
                            data-layer="uaevent,store_gateway,Clic | Hero Banner,Anchor Link | MENSWEAR AND ACCESSORIES COLLECTION"
                            aria-label="Go to section" style="width: 25px; height:25px">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.464 58.271" style="width:58.279px">
                                <g stroke-width="1.5" transform="translate(-1624 -187.923)">
                                    <path d="M50.464 43.992L25.732 58.271 1 43.992V15.434L25.732 1.155l24.732 14.279z"
                                        transform="translate(1623.5 187.345)" class="hexagon" fill="#ffffff"></path>
                                    <path class="icon" d="M1641.906,214.094l7.354,5.666,7.518-5.666"
                                        transform="translate(-0.406 0.406)"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="col-3 text-justify flex-fill">
                        <span>
                            Overview
                        </span>
                        <h2>
                            All Ferrari
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('sect2')
    {{-- <div class="container"> --}}
    <div class="row row-cols-1 row-cols-md-2">
        <div class="texts col col-md-4 col-lg-4 align-self-stretch">
            <div class="row align-items-center">
                <div class="col offset-1 offset-xl-2 no-gutters">
                    <div class="texts-wrapper css-1v6uxg8">
                        <h2 class="primary texts-block-title--primary"></h2>
                        <h3 class="secondary texts-block-title--secondary">MENSWEAR AND ACCESSORIES COLLECTION</h3>
                        <div>
                            <p>The iconic features of the super sports cars reflected in the Menswear and Travel Collections
                                marked by an informal style and contemporary taste.</p>
                        </div>
                        <div class="links d-block">
                            <div class="row row-cols-1 row-cols-lg-1">
                                <a href="#" class="col-12 sect1Links">link1</a>
                                <a href="#" class="col-12 sect1Links">link1</a>
                                <a href="#" class="col-12 sect1Links">link1</a>
                                <a href="#" class="col-12 sect1Links">link1</a>
                                <a href="#" class="col-12 sect1Links">link1</a>
                            </div>
                        </div>       
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-md-8 col-lg-8">
            <svg width="100%" height="100%" viewBox="0 0 24 11" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" class="clip-svg">
                <defs>
                    <clipPath id="clip-polygon--uid126">
                        <polygon points="11 0, 11.1 0, 11.1 11, 0 11"></polygon>
                        <rect x="11" y="0" width="13" height="11"></rect>
                        {{-- <polygon points="15.9 0, 24 0, 16 11, 15.9 11"></polygon> --}}
                    </clipPath>
                </defs>
                <g clip-path="url(#clip-polygon--uid126)">
                    <image class="img-fluid" xlink:href="{{ asset('img/ferrari-499p-2023-red-beautiful-car.jpg') }}"
                        alt="Ferrari logo image" width="100%" height="100%" x="0%" y="0%">
                    </image>
                </g>
            </svg>

        </div>
    </div>
    {{-- </div> --}}
@endsection
@section('sect3')
<div class="container">
    <div class="radio-inputs">
        <label class="radio">
          <input type="radio" name="radio" checked="">
          <span class="name">Mẫu xe</span>
        </label>
        <label class="radio">
          <input type="radio" name="radio">
          <span class="name">Kiểu loại</span>
        </label>
            
        <label class="radio">
          <input type="radio" name="radio">
          <span class="name">Khác</span>
        </label>
      </div>
</div>
@endsection