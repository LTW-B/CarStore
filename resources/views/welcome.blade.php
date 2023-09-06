@extends('layouts.app')
@section('title', $homeData['title'])
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
                        <h3 class="secondary texts-block-title--secondary">Tên Xe [Đừng có gắn mấy chữ tào lao =)) ] </h3>
                        <div>
                            <p>[Tên xe ] mẫu xe tiện ích , mang đến sự sang trọng, tính thể
                                thao và hiệu suất tuyệt vời , sự thoải mái và tính linh hoạt. Nó mang đến động học lái tốt
                                nhất
                                trong phân khúc, cùng với thiết kế không thể nhầm lẫn. Đây hiện thân cho những đặc điểm của
                                nhiều linh hồn: thể thao, lịch lãm và off-road, và có tính phù hợp cho việc lái hàng ngày
                                trong nhiều môi trường khác nhau. Với âm thanh động cơ độc đáo đầy bất ngờ, kết hợp với hiệu
                                suất cao,[Tên xe] đảm bảo sẽ đem đến cho bạn trải nghiệm tuyệt vời , vượt ngoài cả mong đợi
                                .</p>
                        </div>
                        <div class="links d-block">
                            <div class="row row-cols-1 row-cols-lg-1">
                                <a href="#" class="col-12 text-decoration-none fs-5">Thông số</a>
                                <hr>
                                <a href="#" class="col-12 text-decoration-none fs-5">Liên hệ</a>
                                <hr>
                                <a href="#" class="col-12 text-decoration-none fs-5">Chi Tiết</a>
                                <hr>
                            </div>
                        </div>
                        
                        <style>
                          
                            .row hr {
                                height: 2px;
                                background-color: transparent;
                                position: relative;
                                border: none;
                                transition: background-color 0.3s ease-in-out;
                            }

                    
                            .row a:hover+hr::before {
                                content: "";
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 0;
                                /* Ban đầu bề rộng là 0 */
                                height: 100%;
                                background: #000;
                                /* Màu nền đen khi hover */
                                transition: width 0.3s ease-in-out;
                                /* Hiệu ứng chuyển màu */
                                z-index: -1;
                                /* Đặt phía sau nội dung */
                            }

                            /* CSS cho hover out */
                            .row a:hover+hr::before {
                                width: 100%;
                                /* Khi hover out, thanh sẽ chuyển màu lại từ trái sang phải */
                            }
                        </style>









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
                    <image class="img-fluid" xlink:href="{{ asset('img/car1.jpg') }}" alt="Ferrari logo image"
                        width="100%" height="100%" x="0%" y="0%">
                    </image>
                </g>
            </svg>

        </div>
    </div>
    {{-- </div> --}}
@endsection
{{-- @section('sect3')
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
@endsection --}}





{{-- Phần đang làm ... --}}

{{-- 
@section('sect5')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="false">Contact</button>
        </li>
        <li class="nav-item dropdown" role="presentation">
            <button class="nav-link dropdown-toggle" id="dropdownTab" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Dropdown
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownTab">
                <li><a class="dropdown-item" href="#child1" data-bs-toggle="tab" role="tab"
                        aria-controls="child1">Child 1</a></li>
                <li><a class="dropdown-item" href="#child2" data-bs-toggle="tab" role="tab"
                        aria-controls="child2">Child 2</a></li>
            </ul>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('img/1.png') }}" alt="product" srcset="" class="img-fluid">

                </div>
                <div class="card-info">
                    <p class="text-title">Product title </p>
                    <p class="text-body">Product description and details</p>
                </div>
                <div class="card-footer">
                    <span class="text-title">$499.49</span>
                    <div class="card-button">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                            <path
                                d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z">
                            </path>
                            <path
                                d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z">
                            </path>
                            <path
                                d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Profile</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Contact</div>
        <div class="tab-pane fade" id="child1" role="tabpanel" aria-labelledby="child1-tab">Child 1</div>
        <div class="tab-pane fade" id="child2" role="tabpanel" aria-labelledby="child2-tab">Child 2</div>
    </div>
@endsection --}}
