@extends('layouts.app')
@section('title', $homeData['title'])
@section('beta')
    {{-- Fav icon --}}
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="./img/bg-carosel-2.jpg" alt="Image" style="width: 100%; height: 100vh;">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">Sản phẩm mới </h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Mercedes-AMG S63E
                                        Performance 2023</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Xem thêm <i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn" style=" height: 40vh;">
                                    <img class="img-fluid" src="./img/rmbg-carosel-2.png" alt="new">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="./img/bg-carosel-3.jpg" alt="Image" style="width: 100%; height: 100vh;">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">Bán chạy</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Mercedes-AMG GT Black
                                        Series 2021</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Xem thêm<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn" style=" height: 40vh;">
                                    <img class="img-fluid" src="./img/rmbg-carosel-3.png" alt="hotsale">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

   
    
    <div class="container">
        <div class="row">
            <div class="texts col col-md-4 col-lg-4 d-flex justify-content-between">
                <!-- ... (Phần nội dung văn bản) ... -->
                <div class="row align-items-center">
                    <div class="col offset-1 offset-xl-2 no-gutters">
                        <div class="texts-wrapper css-1v6uxg8">
                            <h2 class="primary texts-block-title--primary"></h2>
                            <h3 class="secondary texts-block-title--secondary">Aston Martin DBSV12 2019
                            </h3>
                            <div>
                                <p>Aston Martin DBS V12 2019 là một siêu xe thể thao đỉnh cao của hãng Aston
                                   Martin. Thiết kế quyến rũ và động cơ V12 mạnh mẽ, đây không chỉ là
                                   biểu tượng của sự sang trọng mà còn là hiện thân của tốc độ và hiệu suất.
                                   <br>
                                   Động cơ V12 6.0L cung cấp khả năng tăng tốc mạnh mẽ, đưa bạn từ 0 đến 100 km/h chỉ trong vài giây.
                                   <br>
                                   Nội thất được trang bị da và các vật liệu cao cấp, tạo nên không gian sang trọng và tiện nghi. 
                                   
                                    </p>
                            </div>
                            <div class="links d-block">
                                <div class="row row-cols-1 row-cols-lg-1">
                                    <a href="#" class="col-12 text-decoration-none fs-6">Thông số</a>
                                    <hr>
                                    <a href="#" class="col-12 text-decoration-none fs-6">Chi Tiết</a>
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
                                    width: 0;
                                    /* Ban đầu bề rộng là 0 */
                                    /* Màu nền đen khi hover */
                                    /* Hiệu ứng chuyển màu */
                                    z-index: -1;
                                    pointer-events: none;
                                    left: 0;
                                    height: 2px;
                                    background: red;
                                    transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
                                    transition-duration: 400ms;
                                    transition-property: width, left;
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
    
            <div class="col d-none d-lg-flex animated zoomIn align-self-center" style="height: 40vh;">
                <img class="img-fluid" src="./img/rv-1.png" alt="hotsale">
            </div>

            <div class="col d-none d-lg-flex animated zoomIn align-self-center" style="height: 40vh;">
                <img class="img-fluid" src="./img/rv-1-end.png" alt="hotsale">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="texts col col-md-4 col-lg-4 d-flex justify-content-between">
                <!-- ... (Phần nội dung văn bản) ... -->
                <div class="row align-items-center">
                    <div class="col offset-1 offset-xl-2 no-gutters">
                        <div class="texts-wrapper css-1v6uxg8">
                            <h2 class="primary texts-block-title--primary"></h2>
                            <h3 class="secondary texts-block-title--secondary">Aston Martin DBSV12 2019
                            </h3>
                            <div>
                                <p>Aston Martin DBS V12 2019 là một siêu xe thể thao đỉnh cao của hãng Aston
                                   Martin. Thiết kế quyến rũ và động cơ V12 mạnh mẽ, đây không chỉ là
                                   biểu tượng của sự sang trọng mà còn là hiện thân của tốc độ và hiệu suất.
                                   <br>
                                   Động cơ V12 6.0L cung cấp khả năng tăng tốc mạnh mẽ, đưa bạn từ 0 đến 100 km/h chỉ trong vài giây.
                                   <br>
                                   Nội thất được trang bị da và các vật liệu cao cấp, tạo nên không gian sang trọng và tiện nghi. 
                                   
                                    </p>
                            </div>
                            <div class="links d-block">
                                <div class="row row-cols-1 row-cols-lg-1">
                                    <a href="#" class="col-12 text-decoration-none fs-6">Thông số</a>
                                    <hr>
                                    <a href="#" class="col-12 text-decoration-none fs-6">Chi Tiết</a>
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
                                    width: 0;
                                    /* Ban đầu bề rộng là 0 */
                                    /* Màu nền đen khi hover */
                                    /* Hiệu ứng chuyển màu */
                                    z-index: -1;
                                    pointer-events: none;
                                    left: 0;
                                    height: 2px;
                                    background: red;
                                    transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
                                    transition-duration: 400ms;
                                    transition-property: width, left;
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
    
            <div class="col d-none d-lg-flex animated zoomIn align-self-center" style="height: 40vh;">
                <img class="img-fluid" src="./img/rv-2.png" alt="hotsale">
            </div>

            <div class="col d-none d-lg-flex animated zoomIn align-self-center" style="height: 40vh;">
                <img class="img-fluid" src="./img/rv-2-end.png" alt="hotsale">
            </div>
        </div>
    </div>
   
    <div class="container">
        <div class="row">
            <div class="texts col col-md-4 col-lg-4 d-flex justify-content-between">
                <!-- ... (Phần nội dung văn bản) ... -->
                <div class="row align-items-center">
                    <div class="col offset-1 offset-xl-2 no-gutters">
                        <div class="texts-wrapper css-1v6uxg8">
                            <h2 class="primary texts-block-title--primary"></h2>
                            <h3 class="secondary texts-block-title--secondary">Aston Martin DBSV12 2019
                            </h3>
                            <div>
                                <p>Aston Martin DBS V12 2019 là một siêu xe thể thao đỉnh cao của hãng Aston
                                   Martin. Thiết kế quyến rũ và động cơ V12 mạnh mẽ, đây không chỉ là
                                   biểu tượng của sự sang trọng mà còn là hiện thân của tốc độ và hiệu suất.
                                   <br>
                                   Động cơ V12 6.0L cung cấp khả năng tăng tốc mạnh mẽ, đưa bạn từ 0 đến 100 km/h chỉ trong vài giây.
                                   <br>
                                   Nội thất được trang bị da và các vật liệu cao cấp, tạo nên không gian sang trọng và tiện nghi. 
                                   
                                    </p>
                            </div>
                            <div class="links d-block">
                                <div class="row row-cols-1 row-cols-lg-1">
                                    <a href="#" class="col-12 text-decoration-none fs-6">Thông số</a>
                                    <hr>
                                    <a href="#" class="col-12 text-decoration-none fs-6">Chi Tiết</a>
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
                                    width: 0;
                                    /* Ban đầu bề rộng là 0 */
                                    /* Màu nền đen khi hover */
                                    /* Hiệu ứng chuyển màu */
                                    z-index: -1;
                                    pointer-events: none;
                                    left: 0;
                                    height: 2px;
                                    background: red;
                                    transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
                                    transition-duration: 400ms;
                                    transition-property: width, left;
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
    
            <div class="col d-none d-lg-flex animated zoomIn align-self-center" style="height: 40vh;">
                <img class="img-fluid" src="./img/rv-3.png" alt="hotsale">
            </div>

            <div class="col d-none d-lg-flex animated zoomIn align-self-center" style="height: 40vh;">
                <img class="img-fluid" src="./img/rv-3-end.png" alt="hotsale">
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;"
                            alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                            style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">30 <span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">Giới thiệu</h6>
                    <h1 class="mb-4"><span class="text-primary">LexuZ</span> - Nơi tốt nhất cho dịch vụ chăm sóc xe của
                        bạn</h1>
                    <p class="mb-4">LexuZ là nơi bạn có thể tin tưởng để chăm sóc chiếc xe của mình. Chúng tôi cam kết
                        cung cấp
                        các dịch vụ chất lượng cao và đội ngũ chuyên nghiệp và giàu kinh nghiệm sẽ đảm bảo rằng chiếc xe của
                        bạn
                        luôn trong tình trạng tốt nhất.</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Chuyên nghiệp và Kỹ thuật viên lành nghề</h6>
                                    <span>Đội ngũ của chúng tôi luôn sẵn sàng để phục vụ bạn một cách chuyên nghiệp</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Trung tâm dịch vụ chất lượng</h6>
                                    <span>Chúng tôi cam kết cung cấp dịch vụ chất lượng hàng đầu</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Đội ngũ làm việc đã đoạt giải thưởng</h6>
                                    <span>Chúng tôi tự hào về đội ngũ làm việc xuất sắc của mình đã đạt nhiều giải thưởng
                                        trong những năm qua</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary py-3 px-5">Tìm hiểu thêm<i
                            class="fa fa-arrow-right ms-3"></i></a>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->


   

    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Dịch vụ của Chúng Tôi //</h6>
                <h1 class="mb-5">Khám phá Dịch vụ của Chúng Tôi</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Kiểm tra chẩn đoán</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Dịch vụ động cơ</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Thay thế lốp xe</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-oil-can fa-2x me-3"></i>
                            <h4 class="m-0">Thay dầu máy</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">30 Năm Kinh Nghiệm Trong Dịch Vụ Ô Tô</h3>
                                    <p class="mb-4">Chúng tôi có đội ngũ kỹ thuật viên chuyên nghiệp và hiện đại với hơn
                                        30 năm kinh nghiệm trong lĩnh vực ô tô. Chúng tôi cam kết đưa ra các dịch vụ
                                        kiểm tra chẩn đoán chất lượng hàng đầu.
                                    </p>
                                    <p><i class="fa fa-check text-success me-3"></i>Dịch vụ chất lượng</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Kỹ thuật viên lành nghề</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Thiết bị hiện đại</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Xem thêm<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">30 Năm Kinh Nghiệm Trong Dịch Vụ Ô Tô</h3>
                                    <p class="mb-4">Chúng tôi có đội ngũ kỹ thuật viên chuyên nghiệp và hiện đại với hơn
                                        30 năm kinh nghiệm trong lĩnh vực ô tô. Chúng tôi cam kết đưa ra các dịch vụ
                                        động cơ chất lượng hàng đầu.
                                    </p>
                                    <p><i class="fa fa-check text-success me-3"></i>Dịch vụ chất lượng</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Kỹ thuật viên lành nghề</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Thiết bị hiện đại</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Xem thêm<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">30 Năm Kinh Nghiệm Trong Dịch Vụ Ô Tô</h3>
                                    <p class="mb-4">Chúng tôi có đội ngũ kỹ thuật viên chuyên nghiệp và hiện đại với hơn
                                        30 năm kinh nghiệm trong lĩnh vực ô tô. Chúng tôi cam kết đưa ra các dịch vụ
                                        thay thế lốp xe chất lượng hàng đầu.
                                    </p>
                                    <p><i class="fa fa-check text-success me-3"></i>Dịch vụ chất lượng</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Kỹ thuật viên lành nghề</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Thiết bị hiện đại</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Xem thêm<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">30 Năm Kinh Nghiệm Trong Dịch Vụ Ô Tô</h3>
                                    <p class="mb-4">Chúng tôi có đội ngũ kỹ thuật viên chuyên nghiệp và hiện đại với hơn
                                        30 năm kinh nghiệm trong lĩnh vực ô tô. Chúng tôi cam kết đưa ra các dịch vụ
                                        thay dầu máy chất lượng hàng đầu.
                                    </p>
                                    <p><i class="fa fa-check text-success me-3"></i>Dịch vụ chất lượng</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Kỹ thuật viên lành nghề</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Thiết bị hiện đại</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Xem thêm<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Service End -->

     <!-- Fact Start -->
     <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">30</h2>
                    <p class="text-white mb-0">Kinh nghiệm 30 năm</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">400</h2>
                    <p class="text-white mb-0">Các kỹ thuật viên chuyên nghiệp</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">100.000</h2>
                    <p class="text-white mb-0">Khách hàng hài lòng</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">10.000</h2>
                    <p class="text-white mb-0">Dự án đã hoàn thành</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Certified and Award Winning Car Repair Service Provider</h1>
                        <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum.
                            Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero
                            eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit.
                            Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Book For A Service</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control border-0 datetimepicker-input"
                                            placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker"
                                            style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Request"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Technicians //</h6>
                <h1 class="mb-5">Our Expert Technicians</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection

@section('sect2')

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
