<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Logo & Seo Settings'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <div class="alert alert-warning mb-4" role="alert">
            <i class="fas fa-info-circle mr-2"></i> <?php echo app('translator')->get('After changes images/SEO. Please clear your browser\'s cache to see changes.'); ?>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card card-primary shadow">
                    <div class="card-body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link <?php echo e($errors->has('profile') ? 'active' : ($errors->has('password') ? '' : 'active')); ?>"
                                   data-toggle="tab" href="#home"><?php echo app('translator')->get('Logo Favicon & Image'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e($errors->has('password') ? 'active' : ''); ?>" data-toggle="tab"
                                   href="#menu1"><?php echo app('translator')->get('SEO & META Keywords'); ?></a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home"
                                 class="mt-3 container tab-pane <?php echo e($errors->has('profile') ? 'active' : ($errors->has('password') ? '' : 'active')); ?>">
                                <form action="<?php echo e(route('admin.logoUpdate')); ?>" method="post"
                                      enctype="multipart/form-data">
                                    <?php echo method_field('put'); ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="row justify-content-center">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5 class="text-dark"><?php echo app('translator')->get('Frontend Logo'); ?></h5>
                                                <div class="image-input">
                                                    <label for="image-upload" id="image-label"><i
                                                            class="fas fa-upload"></i></label>
                                                    <input type="file" name="image" placeholder="<?php echo app('translator')->get('Choose image'); ?>"
                                                           id="image">
                                                    <img id="image_preview_container" class="preview-image"
                                                         src="<?php echo e(getFile(config('location.logo.path').'logo.png') ? : 0); ?>"
                                                         alt="preview image">
                                                </div>
                                                <?php $__errorArgs = ['image'];
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
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5 class="text-dark"><?php echo app('translator')->get('Admin Panel Logo'); ?></h5>
                                                <div class="image-input">
                                                    <label for="image-upload" id="adminLogo-label"><i
                                                            class="fas fa-upload"></i></label>
                                                    <input type="file" name="admin_logo" placeholder="<?php echo app('translator')->get('Choose image'); ?>"
                                                           id="adminLogo">
                                                    <img id="adminLogo_preview_container" class="preview-image"
                                                         src="<?php echo e(getFile(config('location.logo.path').'admin-logo.png') ? : 0); ?>"
                                                         alt="preview image">
                                                </div>
                                                <?php $__errorArgs = ['image'];
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

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5 class="text-dark"><?php echo app('translator')->get('Favicon'); ?></h5>
                                                <div class="image-input ">
                                                    <label for="image-upload" id="image-label"><i
                                                            class="fas fa-upload"></i></label>
                                                    <input type="file" name="favicon" placeholder="<?php echo app('translator')->get('Choose image'); ?>"
                                                           id="favicon">
                                                    <img id="favicon_preview_container" class="preview-image"
                                                         src="<?php echo e(getFile(config('location.logo.path').'favicon.png') ? : 0); ?>"
                                                         alt="preview image">
                                                </div>
                                                <?php $__errorArgs = ['favicon'];
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


                                        <div class="col-md-9">

                                            <div class="submit-btn-wrapper text-center mt-4">
                                                <button type="submit"
                                                        class="btn waves-effect waves-light btn-primary btn-block btn-rounded">
                                                    <span><?php echo app('translator')->get('Save Changes'); ?></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>


                            <div id="menu1"
                                 class="mt-3 container tab-pane <?php echo e($errors->has('password') ? 'active' : ''); ?>">


                                <form method="post" action="<?php echo e(route('admin.seoUpdate')); ?>"
                                      enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('put'); ?>


                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <?php echo csrf_field(); ?>
                                                <div class="image-input ">
                                                    <label for="meta_image-upload" id="image-label"><i
                                                            class="fas fa-upload"></i></label>
                                                    <input type="file" name="meta_image" placeholder="<?php echo app('translator')->get('Choose image'); ?>"
                                                           id="meta_image">
                                                    <img id="meta_image_preview_container" class="preview-image"
                                                         src="<?php echo e(getFile(config('location.logo.path').config('seo.meta_image')) ? : 0); ?>"
                                                         alt="preview image">
                                                </div>
                                                <?php $__errorArgs = ['favicon'];
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

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label><?php echo app('translator')->get('Meta keywords'); ?></label>
                                                <input type="text" class="form-control" name="meta_keywords"
                                                       autocomplete="off"
                                                       value="<?php echo e(old('meta_keywords',@$seo->meta_keywords)); ?>">
                                                <span class="text-muted"><?php echo app('translator')->get("Keyword should separated by coma (,)"); ?></span>
                                                <?php if($errors->has('meta_keywords')): ?>
                                                    <div
                                                        class="error text-danger"><?php echo app('translator')->get($errors->first('meta_keywords')); ?> </div>
                                                <?php endif; ?>
                                            </div>


                                            <div class="form-group">
                                                <label><?php echo app('translator')->get('Meta Description'); ?></label>

                                                <textarea name="meta_description" rows="3" class="form-control"
                                                          placeholder="<?php echo app('translator')->get('Meta description'); ?>"
                                                          required><?php echo e(old('meta_description',@$seo->meta_description)); ?></textarea>

                                                <?php if($errors->has('meta_description')): ?>
                                                    <div class="error text-danger"><?php echo app('translator')->get($errors->first('meta_description')); ?> </div>
                                                <?php endif; ?>
                                            </div>


                                            <div class="form-group">
                                                <label><?php echo app('translator')->get('Social title'); ?></label>
                                                <input type="text" class="form-control" name="social_title"
                                                       value="<?php echo e((old('social_title',$seo->social_title))); ?>"
                                                       autocomplete="off">
                                                <?php if($errors->has('social_title')): ?>
                                                    <div
                                                        class="error text-danger"><?php echo app('translator')->get($errors->first('social_title')); ?> </div>
                                                <?php endif; ?>
                                            </div>


                                            <div class="form-group">
                                                <label
                                                    class="form-control-label  font-weight-bold"><?php echo app('translator')->get('Social Description'); ?></label>
                                                <textarea name="social_description" rows="3" class="form-control"
                                                          placeholder="<?php echo app('translator')->get('Social Share meta description'); ?>"
                                                          required><?php echo e(old('social_description',@$seo->social_description)); ?></textarea>

                                                <?php if($errors->has('social_description')): ?>
                                                    <div
                                                        class="error text-danger"><?php echo app('translator')->get($errors->first('social_description')); ?> </div>
                                                <?php endif; ?>

                                            </div>

                                            <div class="form-group">
                                                <div class="submit-btn-wrapper text-center">
                                                    <button type="submit"
                                                            class=" btn waves-effect waves-light btn-primary btn-block btn-rounded">
                                                        <span><?php echo app('translator')->get('Save Changes'); ?></span></button>
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
        </div>
    </div>







<?php $__env->stopSection(); ?>

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

            $('#adminLogo').change(function () {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#adminLogo_preview_container').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

            $('#favicon').change(function () {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#favicon_preview_container').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
            $('#meta_image').change(function () {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#meta_image_preview_container').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });


        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/admin/logo.blade.php ENDPATH**/ ?>