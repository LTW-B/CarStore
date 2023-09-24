@extends('layouts.app')
@section('beta')
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

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
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('./img/service-1.jpg') }}" style="object-fit: cover;"
                                            alt="Kiểm tra chẩn đoán ô tô">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Kiểm Tra Chẩn Đoán Ô Tô</h3>
                                    <p class="mb-4">Dịch vụ kiểm tra chẩn đoán ô tô giúp đảm bảo rằng xe của bạn hoạt
                                        động trong tình trạng tốt nhất. Chúng tôi sử dụng các thiết bị hiện đại và đội ngũ
                                        kỹ thuật viên lành nghề để kiểm tra các hệ thống và linh kiện của xe, từ động cơ đến
                                        hệ thống điện và điều hòa không khí.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Kiểm tra toàn diện</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Xác định sớm sự cố tiềm ẩn</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Đảm bảo an toàn khi lái xe</p>
                                    <a href="/chi-tiet-khac/kiem-tra-chan-doan" class="btn btn-primary py-3 px-5 mt-3">Xem
                                        thêm<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('./img/service-2.jpg') }}" style="object-fit: cover;"
                                            alt="Dịch vụ động cơ ô tô">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Dịch Vụ Động Cơ Ô Tô</h3>
                                    <p class="mb-4">Với hơn 30 năm kinh nghiệm trong dịch vụ động cơ ô tô, chúng tôi cung
                                        cấp các dịch vụ bảo dưỡng và sửa chữa động cơ để đảm bảo hiệu suất tối ưu của xe của
                                        bạn. Đội ngũ kỹ thuật viên chuyên nghiệp của chúng tôi sẽ kiểm tra, bảo trì và sửa
                                        chữa động cơ của bạn.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Bảo dưỡng định kỳ</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Sửa chữa động cơ</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Tư vấn chuyên nghiệp</p>
                                    <a href="/chi-tiet-khac/dich-vu-dong-co" class="btn btn-primary py-3 px-5 mt-3">Xem
                                        thêm<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('./img/service-3.jpg') }}" style="object-fit: cover;"
                                            alt="Thay thế lốp xe ô tô">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Thay Thế Lốp Xe Ô Tô</h3>
                                    <p class="mb-4">Chúng tôi cung cấp dịch vụ thay thế lốp xe chất lượng hàng đầu. Đội
                                        ngũ kỹ thuật viên của chúng tôi sẽ thay thế lốp xe cũ bằng các lốp mới và đảm bảo xe
                                        của bạn sẽ luôn an toàn trên mọi cung đường.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Thay thế lốp xe chất lượng</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Cung cấp các loại lốp chất lượng</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Tư vấn lựa chọn lốp phù hợp</p>
                                    <a href="/chi-tiet-khac/thay-the-lop-xe" class="btn btn-primary py-3 px-5 mt-3">Xem
                                        thêm<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('./img/service-4.jpg') }}" style="object-fit: cover;"
                                            alt="Thay dầu máy ô tô">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Thay Dầu Máy Ô Tô</h3>
                                    <p class="mb-4">Chúng tôi cung cấp dịch vụ thay dầu máy chất lượng hàng đầu. Việc
                                        thay dầu máy định kỳ là quan trọng để bảo vệ động cơ và duy trì hiệu suất xe của
                                        bạn. Hãy để chúng tôi chăm sóc xe của bạn bằng cách thay dầu máy đúng cách.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Thay dầu máy chất lượng</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Chất lượng dầu động cơ</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Bảo trì động cơ</p>
                                    <a href="/chi-tiet-khac/thay-dau-may" class="btn btn-primary py-3 px-5 mt-3">Xem
                                        thêm<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s" id="anoun">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Nhà cung cấp Dịch vụ Sửa chữa Ô tô uy tín và chất lượng hàng đầu </h1>
                        <p class="text-white mb-0">Chúng tôi tự hào là nhà cung cấp dịch vụ sửa chữa ô tô được chứng nhận
                            và đã nhận nhiều giải thưởng. Với kinh nghiệm nhiều năm, chúng tôi cam kết mang đến cho bạn
                            những dịch vụ sửa chữa chất lượng và uy tín.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Đặt lịch Dịch vụ</h1>
                        @if (session('success'))
                            <script>
                                // Hàm để hiển thị cửa sổ pop-up
                                function showSuccessPopup() {
                                    alert("{{ session('success') }}");
                                }

                                // Gọi hàm showSuccessPopup khi trang được tải xong
                                window.onload = showSuccessPopup;
                            </script>
                        @endif

                        <form method="POST" action="{{ route('Serviceadd') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input name="name" type="text" class="form-control border-0"
                                        placeholder="Họ và Tên của bạn" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input name="phone" type="number" class="form-control border-0"
                                        placeholder="Số điện thoại" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select name="service" class="form-select border-0" style="height: 55px;">
                                        <option selected>Chọn Dịch vụ</option>
                                        <option value="Kiểm tra chuẩn đoán">Kiểm tra chuẩn đoán</option>
                                        <option value="Sữa chữa và bảo dưỡng động cơ">Sữa chữa và bảo dưỡng động cơ</option>
                                        <option value="Thay thế lốp xe">Thay thế lốp xe</option>
                                        <option value="Thay dầu máy ">Thay dầu máy </option>
                                        <option value="Khác">Khác (vui lòng thêm mô tả trong yêu cầu đặc biệt) </option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input name="date" type="date"
                                            class="form-control border-0 datetimepicker-input" placeholder="Ngày Dịch vụ"
                                            data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea name="description" class="form-control border-0" placeholder="Yêu cầu Đặc biệt"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Đặt Ngay</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
@endsection
