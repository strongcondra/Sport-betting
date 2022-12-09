<?php $__env->startSection('title',__('2 Step Security')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php if(auth()->user()->two_fa): ?>
            <div class="col-lg-6 col-md-6 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title text-start m-0"><?php echo app('translator')->get('Two Factor Authenticator'); ?></h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <div class="input-group input-box">
                                    <input type="text" value="<?php echo e($previousCode); ?>"
                                           class="form-control" id="referralURL"
                                           readonly>
                                    <div class="input-group-append">
                                            <span class="input-group-text copytext" id="copyBoard"
                                                  onclick="copyFunction()">
                                                <i class="fa fa-copy"></i>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mx-auto text-center mt-3">
                                <img class="mx-auto" src="<?php echo e($previousQR); ?>">
                            </div>

                            <div class="form-group mx-auto text-center">
                                <a href="javascript:void(0)" class="btn-custom line-h22 w-100 mt-4"
                                   data-bs-toggle="modal"
                                   data-bs-target="#disableModal"><?php echo app('translator')->get('Disable Two Factor Authenticator'); ?></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="col-lg-6 col-md-6 mb-3">
                <div class="card ">
                    <div class="card-header text-center">
                        <h5 class="title text-start m-0"><?php echo app('translator')->get('Two Factor Authenticator'); ?></h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group input-box">
                                <div class="input-group ">
                                    <input type="text" value="<?php echo e($secret); ?>"
                                           class="form-control" id="referralURL"
                                           readonly>
                                    <div class="input-group-append">
                                                <span class="input-group-text copytext" id="copyBoard"
                                                      onclick="copyFunction()">
                                                    <i class="fa fa-copy"></i>
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="form-group mx-auto text-center mt-3">
                            <img class="mx-auto" src="<?php echo e($qrCodeUrl); ?>">
                        </div>

                        <div class="form-group mx-auto text-center">
                            <a href="javascript:void(0)" class="btn-custom line-h22 w-100 mt-4"
                               data-bs-toggle="modal"
                               data-bs-target="#enableModal"><?php echo app('translator')->get('Enable Two Factor Authenticator'); ?></a>
                        </div>
                    </div>

                </div>
            </div>

        <?php endif; ?>


        <div class="col-lg-6 col-md-6 mb-3">
            <div class="card">
                <div class="card-header text-center">
                    <h5 class="title text-start m-0"><?php echo app('translator')->get('Google Authenticator'); ?></h5>
                </div>
                <div class="card-body">
                    <h6 class="text-uppercase my-3"><?php echo app('translator')->get('Use Google Authenticator to Scan the QR code  or use the code'); ?></h6>
                    <p ><?php echo app('translator')->get('Google Authenticator is a multifactor app for mobile devices. It generates timed codes used during the 2-step verification process. To use Google Authenticator, install the Google Authenticator application on your mobile device.'); ?></p>
                    <a class="btn-custom line-h22 mt-3"
                       href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"
                       target="_blank"><?php echo app('translator')->get('DOWNLOAD APP'); ?></a>
                </div>
            </div>
        </div>
    </div>

    <!--Enable Modal -->
    <div id="enableModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">

            <!-- Modal content-->
            <div class="modal-custom-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo app('translator')->get('Verify Your OTP'); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                </div>
                <form action="<?php echo e(route('user.twoStepEnable')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group input-box">
                            <input type="hidden" name="key" value="<?php echo e($secret); ?>">
                            <input type="text" class="form-control" name="code"
                                   placeholder="<?php echo app('translator')->get('Enter Google Authenticator Code'); ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                        <button type="submit" class="btn-custom"><?php echo app('translator')->get('Verify'); ?></button>
                    </div>

                </form>
            </div>

        </div>
    </div>

    <!--Disable Modal -->
    <div id="disableModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-custom-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo app('translator')->get('Verify Your OTP to Disable'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="<?php echo e(route('user.twoStepDisable')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group input-box">
                            <input type="text" class="form-control bg-transparent" name="code"
                                   placeholder="<?php echo app('translator')->get('Enter Google Authenticator Code'); ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                        <button type="submit" class="btn-custom"><?php echo app('translator')->get('Verify'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script>
        function copyFunction() {
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            Notiflix.Notify.Success(`Copied: ${copyText.value}`);
        }
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\football\resources\views/themes/betting/user/twoFA/index.blade.php ENDPATH**/ ?>