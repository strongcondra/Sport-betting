<?php $__env->startSection('title','419'); ?>
<?php $__env->startSection('content'); ?>
    <!-- not found -->
    <section class="not-found">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col">
                    <div class="text-box text-center">
                        <img src="<?php echo e(asset($themeTrue . '/images/error.svg')); ?>" alt="..." />
                        <h1><?php echo app('translator')->get('419'); ?></h1>
                        <p><?php echo app('translator')->get("Sorry, your session has expired"); ?></p>
                        <a href="<?php echo e(url('/')); ?>" class="btn-custom text-white line-h22"><?php echo app('translator')->get('Back To Home'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\football\resources\views/themes/betting/errors/419.blade.php ENDPATH**/ ?>