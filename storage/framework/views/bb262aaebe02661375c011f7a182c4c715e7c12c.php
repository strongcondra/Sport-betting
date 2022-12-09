<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('profile'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5"><i class="icon-key"></i> <?php echo app('translator')->get('Password Setting'); ?></h4>
                        <form action="" method="post" class="form-body file-upload">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>


                            <div class="form-body">

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-lg-2"><?php echo app('translator')->get('Current Password'); ?></label>
                                        <div class="col-lg-6">
                                            <input type="password" class="form-control" name="current_password" placeholder="<?php echo app('translator')->get('Current Password'); ?>">

                                            <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-lg-2"><?php echo app('translator')->get('New Password'); ?></label>
                                        <div class="col-lg-6">
                                            <input type="password" name="password" class="form-control" placeholder="<?php echo app('translator')->get('New Password'); ?>">
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-lg-2"><?php echo app('translator')->get('Confirm Password'); ?></label>
                                        <div class="col-lg-6">
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="<?php echo app('translator')->get('Confirm Password'); ?>">
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <div class="row ">
                                        <div class="col-md-6 offset-md-2">
                                                <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary btn-block mt-3"><?php echo app('translator')->get('Change Password'); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>







<?php $__env->stopSection(); ?>

<?php $__env->startPush('js-lib'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        $(document).ready(function (e) {
            "use strict";

            $('#image').change(function () {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#image_preview_container').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/admin/password.blade.php ENDPATH**/ ?>