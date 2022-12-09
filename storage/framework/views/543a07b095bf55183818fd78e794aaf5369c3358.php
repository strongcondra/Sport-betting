<?php $__env->startSection('title','Admin Reset Password'); ?>

<?php $__env->startSection('content'); ?>
    <div class="p-3">
        <div class="text-center">
            <img src=" <?php echo e(getFile(config('location.logoIcon.path').'favicon.png')); ?>" alt="wrapkit">
        </div>
        <h2 class="mt-3 text-center"><?php echo app('translator')->get('Reset Password'); ?></h2>

        <form method="POST" action="<?php echo e(route('admin.password.email')); ?>" class=" mt-4">
            <?php echo csrf_field(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="text-dark" for="pwd"><?php echo app('translator')->get('Enter Email Address'); ?></label>
                        <input  type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="off">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger" ><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-block btn-dark"><?php echo app('translator')->get('Send to reset link'); ?></button>
                </div>

                <div class="col-lg-12 text-center mt-5">
                    <?php echo app('translator')->get('Click to'); ?>  <a href="<?php echo e(route('admin.login')); ?>" class="text-danger"><?php echo e(trans('Sign In')); ?></a>
                </div>

            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        .auth-wrapper .auth-box {
            min-width: 600px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/admin/auth/passwords/email.blade.php ENDPATH**/ ?>