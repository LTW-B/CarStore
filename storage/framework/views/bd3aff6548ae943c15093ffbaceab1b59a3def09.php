

<?php $__env->startSection('sect5'); ?>
    <div class="container-fluid bg-dark-subtle py-4 my-2 rounded-5 d-flex align-items-center ">
        <div class="container ">
            <div class="col-12 mb-2">
                <div class="d-flex row-cols align-items-canter">
                    <label class="mt-2">Bộ lọc <i class="fa-solid fa-filter"></i>:</label>
                    <form action="<?php echo e(route('filterStores')); ?>" method="POST" id="myForm">
                        <?php echo csrf_field(); ?>
                        <select name="selectedCategory" id="selectedCategory" class="form-select ms-3">
                            <option value="0">Lọc theo hãng xe</option>
                            <?php
                                $uniqueCategories = [];
                            ?>

                            <?php $__currentLoopData = $storeData['stores']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!in_array($store->category, $uniqueCategories)): ?>
                                    <option value="<?php echo e($store->category); ?>">
                                        <?php echo e($store->category); ?>

                                    </option>
                                    <?php
                                        $uniqueCategories[] = $store->category;
                                    ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                    </form>
                    <div class="col mx-5">
                        <a href="/store/index" class="btn btn-outline-light">Hủy lọc</a>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="col mx-5 ">
                            <a href="/cart" class="btn btn-warning">Giỏ hàng <i class="fa-solid fa-cart-plus"></i></a>
                        </div>
                    </div>

                </div>

            </div>


            <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 row-cols-lg-4 gap-3">
                <?php if(isset($storeData['selectedResults'])): ?>
                    <?php $__currentLoopData = $storeData['selectedResults']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-lg-4 col-sm-12 mb-2 d-flex row">
                            <div class="card">
                                <div class="image-container" style="height: 350px; overflow: hidden; margin-top: 10px;">
                                    <img src="<?php echo e(route('store.showImage', ['filename' => $store['image']])); ?>" alt="image"
                                        class="card-img-top img-card">
                                </div>

                                <div class="position-absolute">
                                    <svg height="100px" width="100px" version="1.1" id="_x32_"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="-107.52 -107.52 727.04 727.04" xml:space="preserve" fill="#ee3a3a"
                                        stroke="#ee3a3a">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <style type="text/css">
                                                .st0 {
                                                    fill: #de1717;
                                                }
                                            </style>
                                            <g>
                                                <polygon class="st0"
                                                    points="217.989,246.205 214.344,276.8 233.322,273.071 218.355,246.134 ">
                                                </polygon>
                                                <path class="st0"
                                                    d="M512,255.996l-63.298-51.631l29.002-76.362l-80.641-13.07L384,34.3l-76.362,29.002L256,0.004l-51.638,63.299 L128.007,34.3l-13.07,80.634l-80.633,13.07l28.995,76.362L0,255.996l63.299,51.632l-28.995,76.368l80.633,13.07l13.07,80.633 l76.355-29.002L256,511.996l51.639-63.298L384,477.7l13.062-80.633l80.641-13.07l-29.002-76.368L512,255.996z M154.768,321.77 c-12.809,2.524-26.252-0.106-33.866-5.006c-0.578-0.388-0.994-1.191-0.522-2.03l7.113-12.316c0.366-0.712,1.092-0.854,1.783-0.487 c6.296,3.285,14.48,5.943,23.18,4.23c8.572-1.685,12.626-6.62,11.491-12.422c-0.959-4.836-4.455-7.282-14.494-6.69l-4.469,0.247 c-17.13,0.98-27.973-5.034-30.828-19.535c-2.968-15.107,6.415-27.374,24.18-30.863c10.871-2.143,21.664-0.867,29.594,3.088 c0.825,0.345,1.036,0.796,0.599,1.762l-5.216,12.45c-0.36,0.698-0.945,0.938-1.608,0.691c-7.099-2.869-13.571-3.856-20.331-2.524 c-7.254,1.424-10.257,5.908-9.235,11.103c0.923,4.709,4.892,7.071,14.593,6.542l4.462-0.246 c17.363-1.03,27.832,4.941,30.757,19.802C184.87,304.427,176.036,317.589,154.768,321.77z M266.18,298.485l-15.707,3.095 c-0.846,0.162-1.403-0.099-1.812-0.91l-7.536-13.444l-28.763,5.654l-1.769,15.276c-0.07,0.902-0.48,1.354-1.325,1.523 l-15.826,3.108c-0.846,0.17-1.184-0.268-1.086-1.043l12.591-85.308c0.099-0.782,0.486-1.353,1.332-1.516l15.227-2.996 c0.846-0.169,1.424,0.219,1.812,0.902l43.468,74.282C267.167,297.787,267.026,298.322,266.18,298.485z M333.743,285.196 l-53.528,10.532c-0.726,0.141-1.304-0.254-1.452-0.972l-15.686-79.746c-0.141-0.734,0.254-1.311,0.98-1.452l15.347-3.017 c0.726-0.149,1.297,0.24,1.438,0.972l12.668,64.406c0.099,0.479,0.388,0.676,0.867,0.585l36.249-7.128 c0.733-0.148,1.311,0.233,1.452,0.959l2.636,13.416C334.857,284.477,334.476,285.055,333.743,285.196z M399.382,272.295 l-52.689,10.356c-0.726,0.148-1.304-0.247-1.445-0.973l-15.678-79.745c-0.148-0.734,0.24-1.304,0.966-1.452l52.688-10.356 c0.719-0.148,1.297,0.24,1.445,0.973l2.538,12.922c0.141,0.726-0.247,1.304-0.966,1.445l-35.41,6.966 c-0.48,0.098-0.676,0.38-0.585,0.874l3.207,16.312c0.099,0.48,0.395,0.677,0.874,0.578l29.482-5.794 c0.719-0.142,1.304,0.247,1.445,0.966l2.516,12.809c0.148,0.726-0.247,1.304-0.966,1.445l-29.488,5.794 c-0.48,0.099-0.677,0.388-0.578,0.867l3.349,17.046c0.092,0.479,0.388,0.669,0.867,0.571l35.41-6.958 c0.719-0.148,1.296,0.247,1.444,0.973l2.538,12.929C400.489,271.569,400.101,272.147,399.382,272.295z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>

                                </div>

                                <div class="card-footer">
                                    <span class="text-title">
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="<?php echo e(route('store.show', ['id' => $store->id])); ?>"
                                                    class="text-capitalize"><?php echo e($store->name); ?>

                                                </a>
                                            </div>
                                            <div class="col">
                                                <?php echo e($store->price); ?>$
                                            </div>
                                            <div class="col text-muted">
                                                <del><?php echo e($store->sale_price); ?>$</del>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="row-cols card-footer">
                                    <a href="" class="btn btn-warning my-2 mx-2">
                                        Thêm vào giỏ hàng
                                    </a>
                                    <a href="" class="btn btn-primary my-2 mx-2">
                                        Mua ngay
                                    </a>
                                    <a href="<?php echo e(route('store.show', ['id' => $store->id])); ?>" class="text-capitalize col">
                                        <div class="card-button" type="submit">
                                            <svg fill="#000000" height="30px" width="30px" version="1.1" id="Icons"
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
                                    </a>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>

        
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                document.querySelector("#selectedCategory").addEventListener("change", function() {
                    // Submit the form when an option is selected
                    document.querySelector("#myForm").submit();
                });
            });
        </script>
    </div>
<?php $__env->stopSection(); ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\D\resources\views/Store/index.blade.php ENDPATH**/ ?>