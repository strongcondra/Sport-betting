<?php $__env->startSection('title',__($page_title)); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-8">
            <div class="card secbg form-block br-4">
                <div class="card-body">
                    <div class="card-body-inner">
                        <form class="form-row" action="<?php echo e(route('user.ticket.store')); ?>" method="post"
                              enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="col-md-12">
                                <label><?php echo app('translator')->get('Subject'); ?></label>
                                <div class="form-group input-box mb-3">
                                    <input class="form-control" type="text" name="subject"
                                           value="<?php echo e(old('subject')); ?>" placeholder="<?php echo app('translator')->get('Enter Subject'); ?>">
                                    <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="error text-danger"><?php echo app('translator')->get($message); ?> </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label><?php echo app('translator')->get('Message'); ?></label>
                                <div class="form-group input-box mb-3">
                                    <textarea class="form-control ticket-box" name="message" rows="5"
                                              id="textarea1"
                                              placeholder="<?php echo app('translator')->get('Enter Message'); ?>"><?php echo e(old('message')); ?></textarea>
                                    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="error text-danger"><?php echo app('translator')->get($message); ?> </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group input-box">
                                    <input type="file" name="attachments[]"
                                           class="form-control "
                                           multiple
                                           placeholder="<?php echo app('translator')->get('Upload File'); ?>">

                                    <?php $__errorArgs = ['attachments'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e(trans($message)); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <button type="submit"
                                            class="btn-custom w-100">
                                        <span><?php echo app('translator')->get('Submit'); ?></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/themes/betting/user/support/create.blade.php ENDPATH**/ ?>