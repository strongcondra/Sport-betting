<?php $__env->startSection('title',trans($title)); ?>

<?php $__env->startSection('content'); ?>
    <!-- contact section -->
    <div class="contact-section">
        <div class="container">
            <div class="row gy-5 g-lg-5 align-items-center">
                <div class="col-lg-6">
                    <div class="text-box">
                        <div class="header-text">
                            <h5><?php echo app('translator')->get(@$contact->heading); ?></h5>
                            <h3><?php echo app('translator')->get(@$contact->sub_heading); ?></h3>
                            <p>
                                <?php echo app('translator')->get(@$contact->short_description); ?>
                            </p>
                        </div>
                        <div class="row">
                            <div class="info-box col-md-6">
                                <div class="icon-box">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <h5><?php echo app('translator')->get('Address'); ?></h5>
                                    <p><?php echo app('translator')->get($contact->address); ?></p>
                                </div>
                            </div>
                            <div class="info-box col-md-6">
                                <div class="icon-box">
                                    <i class="fal fa-building"></i>
                                </div>
                                <div class="text">
                                    <h5><?php echo app('translator')->get('House'); ?></h5>
                                    <p><?php echo app('translator')->get($contact->house); ?></p>
                                </div>
                            </div>
                            <div class="info-box col-md-6">
                                <div class="icon-box">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <h5><?php echo app('translator')->get('Email'); ?></h5>
                                    <p><?php echo app('translator')->get($contact->email); ?></p>
                                </div>
                            </div>
                            <div class="info-box col-md-6">
                                <div class="icon-box">
                                    <i class="fal fa-phone-alt"></i>
                                </div>
                                <div class="text">
                                    <h5><?php echo app('translator')->get('Phone'); ?></h5>
                                    <p><?php echo app('translator')->get($contact->phone); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="<?php echo e(route('contact.send')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <h4><?php echo app('translator')->get('just drop us a line'); ?></h4>
                        <div class="row g-3">
                            <div class="input-box col-md-6">
                                <input class="form-control" type="text" name="name" value="<?php echo e(old('name')); ?>"
                                       placeholder="<?php echo app('translator')->get('Full name'); ?>"/>
                                <?php $__errorArgs = ['name'];
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
                            <div class="input-box col-md-6">
                                <input class="form-control" type="email" name="email" value="<?php echo e(old('email')); ?>"
                                       placeholder="<?php echo app('translator')->get('Email address'); ?>"/>
                                <?php $__errorArgs = ['email'];
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
                            <div class="input-box col-12">
                                <input class="form-control" type="text" name="subject"
                                       value="<?php echo e(old('subject')); ?>" placeholder="<?php echo app('translator')->get('Subject'); ?>"/>
                                <?php $__errorArgs = ['subject'];
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
                            <div class="input-box col-12">
                           <textarea class="form-control" cols="30" rows="3" name="message"
                                     placeholder="<?php echo app('translator')->get('Your message'); ?>"><?php echo e(old('message')); ?></textarea>
                                <?php $__errorArgs = ['message'];
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
                            <div class="input-box col-12">
                                <button type="submit" class="btn-custom"><?php echo app('translator')->get('submit'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\football\resources\views/themes/betting/contact.blade.php ENDPATH**/ ?>