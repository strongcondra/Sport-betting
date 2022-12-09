<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Plugin Configuration'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row mt-sm-4">
            <div class="col-12 col-md-4 col-lg-4">
                <?php echo $__env->make('admin.plugin_panel.components.sidebar', ['settings' => config('generalsettings.plugin'), 'suffix' => ''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-12 col-md-8 col-lg-8">
                <div class="container-fluid" id="container-wrapper">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-12">
                            <div class="card mb-4 card-primary shadow">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-dark">
                                    <h5 class="text-white"><?php echo app('translator')->get('Plugin Configuration'); ?></h5>
                                </div>
                                <div class="card-body py-5">
                                    <div class="row justify-content-md-center">
                                        <div class="col-lg-10">
                                            <div class="card mb-4 shadow">
                                                <div class="card-body">
                                                    <div class="row justify-content-between align-items-center">
                                                        <div class="col-md-3"><img src="<?php echo e(asset('assets/uploads/plugin/tawk.png')); ?>" class="w-25"></div>
                                                        <div class="col-md-6"><?php echo app('translator')->get('Message your customers,they\'ll love you for it'); ?></div>
                                                        <div class="col-md-3"><a href="<?php echo e(route('admin.tawk.control')); ?>" class="btn btn-sm btn-primary" target="_blank"><?php echo app('translator')->get('Configuration'); ?></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-md-center d-none">
                                        <div class="col-lg-10">
                                            <div class="card mb-4 shadow">
                                                <div class="card-body">
                                                    <div class="row justify-content-between align-items-center">
                                                        <div class="col-md-3"><img src="<?php echo e(asset('assets/uploads/plugin/messenger.png')); ?>" class="w-25"></div>
                                                        <div class="col-md-6"><?php echo app('translator')->get('Message your customers,they\'ll love you for it'); ?></div>
                                                        <div class="col-md-3"><a href="<?php echo e(route('admin.fb.messenger.control')); ?>" class="btn btn-sm btn-primary" target="_blank"><?php echo app('translator')->get('Configuration'); ?></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-md-center">
                                        <div class="col-lg-10">
                                            <div class="card mb-4 shadow">
                                                <div class="card-body">
                                                    <div class="row justify-content-between align-items-center">
                                                        <div class="col-md-3"><img src="<?php echo e(asset('assets/uploads/plugin/reCaptcha.png')); ?>" class="w-25"></div>
                                                        <div class="col-md-6"><?php echo app('translator')->get('reCAPTCHA protects your website from fraud and abuse.'); ?></div>
                                                        <div class="col-md-3"><a href="<?php echo e(route('admin.google.recaptcha.control')); ?>" class="btn btn-sm btn-primary" target="_blank"><?php echo app('translator')->get('Configuration'); ?></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-md-center">
                                        <div class="col-lg-10">
                                            <div class="card mb-4 shadow">
                                                <div class="card-body">
                                                    <div class="row justify-content-between align-items-center">
                                                        <div class="col-md-3"><img src="<?php echo e(asset('assets/uploads/plugin/analytics.png')); ?>" class="w-25"></div>
                                                        <div class="col-md-6"><?php echo app('translator')->get('Google Analytics is a web analytics service offered by Google.'); ?></div>
                                                        <div class="col-md-3"><a href="<?php echo e(route('admin.google.analytics.control')); ?>" class="btn btn-sm btn-primary" target="_blank"><?php echo app('translator')->get('Configuration'); ?></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/admin/plugin_panel/pluginConfig.blade.php ENDPATH**/ ?>