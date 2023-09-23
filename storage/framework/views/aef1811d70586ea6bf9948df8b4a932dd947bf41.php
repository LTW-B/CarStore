
<?php $__env->startSection('title',  $showCart['title']); ?>
<?php $__env->startSection('sect8'); ?>

        <div class="card ">
            <div class="card-header">
                Products in cart
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th class="col">Name</th>
                            <th class="col">Price</th>
                            <th class="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $showCart['stores']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($store->name); ?></td>
                                <td><?php echo e($store->price); ?></td>
                                <td><?php echo e(session('stores')[$store->id]); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="text-end">
                        <a class="btn btn-outline-secondary mb-2">
                            <b>
                                Total to pay: $<?php echo e($showCart['total']); ?>

                            </b>
                        </a>
                        <?php if(count($showCart['stores']) > 0): ?>
                            <a href="<?php echo e(route('cart.purchase')); ?>" class="btn bg-primary text-white mb-2">
                                thanh toán
                            </a>
                            <a href="<?php echo e(route('cart.delete')); ?>">
                                <button class="btn btn-danger mb-2">
                                    Xóa
                                </button>
                            </a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\D\resources\views/cart/index.blade.php ENDPATH**/ ?>