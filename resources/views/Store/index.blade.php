@extends('layouts.app')
@section('sect5')
    <div class="container">
        <div style="right: 2em; position:fixed; ">
            <select name="cate" id="cate">
                <option value="car">Loại</option>
                <option value="car">Xe oto</option>
                <option value="linhkien">Linh Kiện</option>
            </select>
        </div>

        <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 row-cols-lg-6  gap-3 ">
            @foreach ($storeData['stores'] as $store)
                @if ($store->getCategory() == request('selectedCategory'))
                    <div class="col-md-4 col-lg-3 col-sm-12 mb-2 d-flex row">
                        <div class="card">
                            {{-- Set a fixed height for the image container --}}
                            <div class="image-container" style="height: 200px; overflow: hidden;">
                                <img src="{{ route('store.showImage', ['filename' => $store['image']]) }}" alt="image"
                                    class="card-img-top img-card">
                            </div>
                            <div class="card-footer">

                                <span class="text-title">
                                    <a href="{{ route('store.show', ['id' => $store->getId()]) }}" class="text-capitalize">
                                        {{ $store->getName() }}
                                    </a>
                                </span>
                                <div class="card-button">
                                    <svg fill="#000000" height="46px" width="46px" version="1.1" id="Icons"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 32 32" xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M24,16c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8S28.4,16,24,16z M27,25h-2v2c0,0.6-0.4,1-1,1s-1-0.4-1-1v-2h-2 c-0.6,0-1-0.4-1-1s0.4-1,1-1h2v-2c0-0.6,0.4-1,1-1s1,0.4,1,1v2h2c0.6,0,1,0.4,1,1S27.6,25,27,25z">
                                            </path>
                                            <path
                                                d="M8.4,22l1.2-2.3c0.5-1,1.5-1.7,2.7-1.7h3.5c0.1,0,0.2,0,0.2,0c1.8-2.4,4.7-4,8-4c1.2,0,2.3,0.2,3.4,0.6 C27,14,26.5,13.4,26,13h1c0.6,0,1-0.4,1-1s-0.4-1-1-1h-2.8L23,8c-0.8-1.8-2.6-3-4.6-3H9.6C7.6,5,5.8,6.2,5,8l-1.3,3H1 c-0.6,0-1,0.4-1,1s0.4,1,1,1h1c-1.2,0.9-2,2.4-2,4v4c0,0.9,0.4,1.7,1,2.2V25c0,1.7,1.3,3,3,3h2c1.7,0,3-1.3,3-3v-1h5 c0-0.7,0.1-1.4,0.2-2H8.4z M7,19H4c-0.6,0-1-0.4-1-1s0.4-1,1-1h3c0.6,0,1,0.4,1,1S7.6,19,7,19z M5.5,12l1.4-3.2C7.4,7.7,8.4,7,9.6,7 h8.7c1.2,0,2.3,0.7,2.8,1.8l1.4,3.2H5.5z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                {{-- <div class="col me-auto text-title" style="">
                                
                            </div>
                            <div class="col ms-auto">
                                
                            </div> --}}

                            </div>
                        </div>
                    </div>
                    <style>
                        .card-footer {
                            width: 100%;
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            padding-top: 10px;
                            border-top: 1px solid #ddd;
                        }

                        .text-title>a {
                            text-decoration: none;
                        }

                        .text-title {
                            font-weight: 900;
                            font-size: 1.2em;
                            line-height: 1.5;
                        }


                        /*Button*/
                        .card-button {
                            border: 1px solid #252525;
                            display: flex;
                            padding: .3em;
                            cursor: pointer;
                            border-radius: 50px;
                            transition: .3s ease-in-out;
                        }

                        /*Hover*/
                        /* Khi ảnh nằm trong một container */
                        .image-container {
                            position: relative;
                            /* Để xác định vị trí tương đối */
                            overflow: hidden;
                            /* Ẩn phần ảnh vượt ra khỏi container */
                        }

                        /* Ảnh ban đầu */
                        .image-container img {
                            width: 100%;
                            /* Đặt chiều rộng ban đầu */
                            height: auto;
                            /* Tự động tính chiều cao */
                            transition: transform 0.3s;
                            /* Hiệu ứng chuyển đổi */
                        }

                        /* Ảnh khi hover */
                        .image-container:hover img {
                            transform: scale(1.1);
                            /* Phóng to ảnh khi hover */
                        }

                        .card-button:hover {
                            border: 1px solid #ffcaa6;
                            background-color: #ffcaa6;
                        }
                    </style>
                @endif

                <script>
                    // Lắng nghe sự kiện change của dropdown
                    document.getElementById('cate').addEventListener('change', function() {
                        // Lấy giá trị của option đã chọn
                        var selectedValue = this.value;
                        
                        // Cập nhật tham số selectedCategory trong URL
                        var currentUrl = window.location.href;
                        var newUrl;
                
                        // Kiểm tra xem tham số selectedCategory đã tồn tại trong URL hay chưa
                        if (currentUrl.includes('selectedCategory=')) {
                            newUrl = currentUrl.replace(/selectedCategory=([^&]*)/, 'selectedCategory=' + selectedValue);
                        } else {
                            // Nếu tham số chưa tồn tại, thêm nó vào URL
                            newUrl = currentUrl + (currentUrl.includes('?') ? '&' : '?') + 'selectedCategory=' + selectedValue;
                        }
                
                        // Chuyển hướng đến URL mới
                        window.location.href = newUrl;
                    });
                </script>
            @endforeach
        </div>
    </div>
@endsection
