
<?php $__env->startSection('title', $linhkienData['title']); ?>
<?php $__env->startSection('sect4'); ?>
<div class="row">
    <?php $__currentLoopData = $linhkienData['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 col-lg-3 col-sm-12 mb-2 row d-flex">
            <div class="card">
                
                <div class="image-container" style="height: 200px; overflow: hidden;">
                    <img src="<?php echo e(route('upload.show', ['filename' => $product['image']])); ?>" alt="image" class="card-img-top img-card">
                </div>
                <div class="card-body text-center">
                    <a href="#" class="btn btn-primary text-white">
                        <?php echo e($product->getName()); ?>

                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\D\resources\views/home/linhkien.blade.php ENDPATH**/ ?>