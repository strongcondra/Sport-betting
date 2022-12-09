<?php $__env->startSection('title',trans('Profile Settings')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-4">
            <div class="card secbg br-4">
                <div class="card-body br-4">
                    <form method="post" action="<?php echo e(route('user.updateProfile')); ?>"
                          enctype="multipart/form-data">
                        <div class="form-group">
                            <?php echo csrf_field(); ?>
                            <div class="image-input ">
                                <label for="image-upload" id="image-label"><i
                                        class="fas fa-upload"></i></label>
                                <input type="file" name="image" placeholder="Choose image" id="image">
                                <img id="image_preview_container" class="preview-image"
                                     src="<?php echo e(getFile(config('location.user.path').$user->image)); ?>"
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
                        <h3><?php echo app('translator')->get(ucfirst($user->name)); ?></h3>
                        <p><?php echo app('translator')->get('Joined At'); ?> <?php echo app('translator')->get($user->created_at->format('d M, Y g:i A')); ?></p>
                        <div class="submit-btn-wrapper text-center text-md-left">
                            <button type="submit" class="btn-custom w-100">
                                <span><?php echo app('translator')->get('Image Update'); ?></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="card secbg form-block br-4">
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($errors->has('profile') ? 'active' : (($errors->has('password') || $errors->has('identity') || $errors->has('addressVerification')) ? '' : ' active')); ?>"
                               data-bs-toggle="tab" href="#home"><?php echo app('translator')->get('Profile Information'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($errors->has('password') ? 'active' : ''); ?>"
                               data-bs-toggle="tab"
                               href="#menu1"><?php echo app('translator')->get('Password Setting'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($errors->has('identity') ? 'active' : ''); ?>"
                               data-bs-toggle="tab"
                               href="#identity"><?php echo app('translator')->get('Identity Verification'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($errors->has('addressVerification') ? 'active' : ''); ?>"
                               data-bs-toggle="tab"
                               href="#addressVerification"><?php echo app('translator')->get('Address Verification'); ?></a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content ">
                        <div id="home"
                             class="container mt-4 tab-pane  <?php echo e($errors->has('profile') ? ' active' : (($errors->has('password') || $errors->has('identity') || $errors->has('addressVerification')) ? '' :  ' active')); ?>">

                            <form action="<?php echo e(route('user.updateInformation')); ?>" method="post">
                                <?php echo method_field('put'); ?>
                                <?php echo csrf_field(); ?>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label><?php echo app('translator')->get('First Name'); ?></label>
                                        <div class="form-group input-box mb-3">
                                            <input class="form-control" type="text" name="firstname"
                                                   value="<?php echo e(old('firstname')?: $user->firstname); ?>">
                                            <?php if($errors->has('firstname')): ?>
                                                <div
                                                    class="error text-danger"><?php echo app('translator')->get($errors->first('firstname')); ?> </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label><?php echo app('translator')->get('Last Name'); ?></label>
                                        <div class="form-group input-box mb-3">
                                            <input class="form-control" type="text" name="lastname"
                                                   value="<?php echo e(old('lastname')?: $user->lastname); ?>">
                                            <?php if($errors->has('lastname')): ?>
                                                <div
                                                    class="error text-danger"><?php echo app('translator')->get($errors->first('lastname')); ?> </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label><?php echo app('translator')->get('Username'); ?></label>
                                        <div class="form-group input-box mb-3">
                                            <input class="form-control" type="text" name="username"
                                                   value="<?php echo e(old('username')?: $user->username); ?>">
                                            <?php if($errors->has('username')): ?>
                                                <div
                                                    class="error text-danger"><?php echo app('translator')->get($errors->first('username')); ?> </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <label><?php echo app('translator')->get('Email Address'); ?></label>
                                        <div class="form-group input-box mb-3">
                                            <input class="form-control" type="email"
                                                   value="<?php echo e($user->email); ?>" readonly>
                                            <?php if($errors->has('email')): ?>
                                                <div
                                                    class="error text-danger"><?php echo app('translator')->get($errors->first('email')); ?> </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label><?php echo app('translator')->get('Phone Number'); ?></label>
                                        <div class="form-group input-box mb-3">
                                            <input class="form-control" type="text" readonly
                                                   value="<?php echo e($user->phone); ?>">

                                            <?php if($errors->has('phone')): ?>
                                                <div
                                                    class="error text-danger"><?php echo app('translator')->get($errors->first('phone')); ?> </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label><?php echo app('translator')->get('Preferred language'); ?></label>
                                        <div class="form-group input-box mb-3">
                                            <select name="language_id" id="language_id" class="form-select">
                                                <option value="" disabled><?php echo app('translator')->get('Select Language'); ?></option>
                                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $la): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($la->id); ?>"

                                                        <?php echo e(old('language_id', $user->language_id) == $la->id ? 'selected' : ''); ?>><?php echo app('translator')->get($la->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                            <?php if($errors->has('language_id')): ?>
                                                <div
                                                    class="error text-danger"><?php echo app('translator')->get($errors->first('language_id')); ?> </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <label><?php echo app('translator')->get('Address'); ?></label>
                                <div class="form-group input-box mb-3">
                                    <textarea class="form-control" name="address"
                                              rows="5"><?php echo app('translator')->get($user->address); ?></textarea>

                                    <?php if($errors->has('address')): ?>
                                        <div
                                            class="error text-danger"><?php echo app('translator')->get($errors->first('address')); ?> </div>
                                    <?php endif; ?>
                                </div>

                                <div class="submit-btn-wrapper text-center text-md-left">
                                    <button type="submit"
                                            class="btn-custom w-100">
                                        <span><?php echo app('translator')->get('Update User'); ?></span></button>
                                </div>
                            </form>
                        </div>


                        <div id="menu1" class="container mt-4 tab-pane <?php echo e($errors->has('password') ? 'active' : ''); ?>">

                            <form method="post" action="<?php echo e(route('user.updatePassword')); ?>">
                                <?php echo csrf_field(); ?>
                                <label><?php echo app('translator')->get('Current Password'); ?></label>
                                <div class="form-group input-box mb-3">
                                    <input id="password" type="password" class="form-control"
                                           name="current_password" autocomplete="off">
                                    <?php if($errors->has('current_password')): ?>
                                        <div
                                            class="error text-danger"><?php echo app('translator')->get($errors->first('current_password')); ?> </div>
                                    <?php endif; ?>
                                </div>
                                <label><?php echo app('translator')->get('New Password'); ?></label>
                                <div class="form-group input-box mb-3">
                                    <input id="password" type="password" class="form-control"
                                           name="password" autocomplete="off">
                                    <?php if($errors->has('password')): ?>
                                        <div
                                            class="error text-danger"><?php echo app('translator')->get($errors->first('password')); ?> </div>
                                    <?php endif; ?>
                                </div>

                                <label><?php echo app('translator')->get('Confirm Password'); ?></label>
                                <div class="form-group input-box mb-3">
                                    <input id="password_confirmation" type="password"
                                           name="password_confirmation" autocomplete="off"
                                           class="form-control">
                                    <?php if($errors->has('password_confirmation')): ?>
                                        <div
                                            class="error text-danger"><?php echo app('translator')->get($errors->first('password_confirmation')); ?> </div>
                                    <?php endif; ?>
                                </div>

                                <div class="submit-btn-wrapper text-center">
                                    <button type="submit"
                                            class="btn-custom w-100">
                                        <span><?php echo app('translator')->get('Update Password'); ?></span></button>
                                </div>
                            </form>
                        </div>


                        <div id="identity"
                             class="container mt-4 tab-pane <?php echo e($errors->has('identity') ? 'active' : ''); ?>">
                            <?php if(in_array($user->identity_verify,[0,3])  ): ?>
                                <?php if($user->identity_verify == 3): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo app('translator')->get('You previous request has been rejected'); ?>
                                    </div>
                                <?php endif; ?>
                                <form method="post" action="<?php echo e(route('user.verificationSubmit')); ?>"
                                      enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-md-12">
                                        <label class="form-label"
                                               for="identity_type"><?php echo app('translator')->get('Identity Type'); ?></label>
                                        <div class="form-group input-box mb-3">
                                            <select name="identity_type" id="identity_type"
                                                    class="form-select">
                                                <option value="" selected disabled><?php echo app('translator')->get('Select Type'); ?></option>
                                                <?php $__currentLoopData = $identityFormList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sForm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        value="<?php echo e($sForm->slug); ?>" <?php echo e(old('identity_type', @$identity_type) == $sForm->slug ? 'selected' : ''); ?>><?php echo app('translator')->get($sForm->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['identity_type'];
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
                                    <?php if(isset($identityForm)): ?>
                                        <?php $__currentLoopData = $identityForm->services_form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($v->type == "text"): ?>
                                                <div class="col-md-12">
                                                    <label
                                                        for="<?php echo e($k); ?>"><?php echo e(trans($v->field_level)); ?> <?php if($v->validation == 'required'): ?>
                                                            <span class="text-danger">*</span>
                                                        <?php endif; ?>
                                                    </label>
                                                    <div class="form-group input-box mb-3">
                                                        <input type="text" name="<?php echo e($k); ?>"
                                                               class="form-control "
                                                               value="<?php echo e(old($k)); ?>" id="<?php echo e($k); ?>"
                                                               <?php if($v->validation == 'required'): ?> required <?php endif; ?>>

                                                        <?php if($errors->has($k)): ?>
                                                            <div
                                                                class="error text-danger"><?php echo app('translator')->get($errors->first($k)); ?> </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php elseif($v->type == "textarea"): ?>
                                                <div class="col-md-12">
                                                    <label
                                                        for="<?php echo e($k); ?>"><?php echo e(trans($v->field_level)); ?> <?php if($v->validation == 'required'): ?>
                                                            <span
                                                                class="text-danger">*</span>
                                                        <?php endif; ?>
                                                    </label>
                                                    <div class="form-group input-box mb-3">
                                                        <textarea name="<?php echo e($k); ?>" id="<?php echo e($k); ?>"
                                                                  class="form-control "
                                                                  rows="5"
                                                                  placeholder="<?php echo e(trans('Type Here')); ?>"
                                                                          <?php if($v->validation == 'required'): ?><?php endif; ?>><?php echo e(old($k)); ?></textarea>
                                                        <?php $__errorArgs = [$k];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="error text-danger">
                                                            <?php echo e(trans($message)); ?>

                                                        </div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            <?php elseif($v->type == "file"): ?>
                                                <div class="col-md-12">
                                                    <label><?php echo e(trans($v->field_level)); ?> <?php if($v->validation == 'required'): ?>
                                                            <span class="text-danger">*</span>
                                                        <?php endif; ?>
                                                    </label>
                                                    <div class="form-group input-box">

                                                        <br>
                                                        <div class="fileinput fileinput-new "
                                                             data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail "
                                                                 data-trigger="fileinput">
                                                                <img class="wh-200-150"
                                                                     src="<?php echo e(getFile(config('location.default'))); ?>"
                                                                     alt="...">
                                                            </div>
                                                            <div
                                                                class="fileinput-preview fileinput-exists thumbnail wh-200-150 "></div>

                                                            <div class="img-input-div">
                                                                    <span class="btn btn-success btn-file">
                                                                        <span
                                                                            class="fileinput-new "> <?php echo app('translator')->get('Select'); ?> <?php echo e($v->field_level); ?></span>
                                                                        <span
                                                                            class="fileinput-exists"> <?php echo app('translator')->get('Change'); ?></span>
                                                                        <input type="file" name="<?php echo e($k); ?>"
                                                                               value="<?php echo e(old($k)); ?>" accept="image/*"
                                                                               <?php if($v->validation == "required"): ?><?php endif; ?>>
                                                                    </span>
                                                                <a href="#"
                                                                   class="btn btn-danger fileinput-exists"
                                                                   data-dismiss="fileinput"> <?php echo app('translator')->get('Remove'); ?></a>
                                                            </div>
                                                        </div>
                                                        <?php $__errorArgs = [$k];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="error text-danger">
                                                            <?php echo e(trans($message)); ?>

                                                        </div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <div class="submit-btn-wrapper text-center text-md-left">
                                            <button type="submit"
                                                    class="btn-custom w-100"><?php echo app('translator')->get('Submit'); ?></button>
                                        </div>
                                    <?php endif; ?>
                                </form>
                            <?php elseif($user->identity_verify == 1): ?>
                                <div class="alert alert-warning" role="alert">
                                    <?php echo app('translator')->get('Your KYC submission has been pending'); ?>
                                </div>
                            <?php elseif($user->identity_verify == 2): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo app('translator')->get('Your KYC already verified'); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div id="addressVerification"
                             class="container mt-4 tab-pane <?php echo e($errors->has('addressVerification') ? 'active' : ''); ?>">
                            <?php if(in_array($user->address_verify,[0,3])  ): ?>
                                <?php if($user->address_verify == 3): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo app('translator')->get('You previous request has been rejected'); ?>
                                    </div>
                                <?php endif; ?>
                                <form method="post" action="<?php echo e(route('user.addressVerification')); ?>"
                                      enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-md-12">
                                        <label class="form-label"><?php echo e(trans('Address Proof')); ?> <span
                                                class="text-danger">*</span> </label><br>
                                        <div class="form-group input-box">
                                            <div class="fileinput fileinput-new "
                                                 data-provides="fileinput">
                                                <div class="fileinput-new thumbnail "
                                                     data-trigger="fileinput">
                                                    <img class="wh-200-150"
                                                         src="<?php echo e(getFile(config('location.default'))); ?>"
                                                         alt="...">
                                                </div>
                                                <div
                                                    class="fileinput-preview fileinput-exists thumbnail wh-200-150 "></div>

                                                <div class="img-input-div">
                                                    <span class="btn btn-success btn-file">
                                                        <span
                                                            class="fileinput-new "> <?php echo app('translator')->get('Select Image'); ?> </span>
                                                        <span
                                                            class="fileinput-exists"> <?php echo app('translator')->get('Change'); ?></span>
                                                        <input type="file" name="addressProof"
                                                               value="<?php echo e(old('addressProof')); ?>"
                                                               accept="image/*">
                                                    </span>
                                                    <a href="#" class="btn btn-danger fileinput-exists"
                                                       data-dismiss="fileinput"> <?php echo app('translator')->get('Remove'); ?></a>
                                                </div>

                                            </div>

                                            <?php $__errorArgs = ['addressProof'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="error text-danger">
                                                <?php echo e(trans($message)); ?>

                                            </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="submit-btn-wrapper text-center text-md-left">
                                        <button type="submit"
                                                class="btn-custom w-100"><?php echo app('translator')->get('Submit'); ?></button>
                                    </div>
                                </form>
                            <?php elseif($user->address_verify == 1): ?>
                                <div class="alert alert-warning" role="alert">
                                    <?php echo app('translator')->get('Your KYC submission has been pending'); ?>
                                </div>
                            <?php elseif($user->address_verify == 2): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo app('translator')->get('Your KYC already verified'); ?>
                                </div>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css-lib'); ?>
    <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/bootstrap-fileinput.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('extra-js'); ?>
    <script src="<?php echo e(asset($themeTrue.'js/bootstrap-fileinput.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        "use strict";
        $(document).on('click', '#image-label', function () {
            $('#image').trigger('click');
        });
        $(document).on('change', '#image', function () {
            var _this = $(this);
            var newimage = new FileReader();
            newimage.readAsDataURL(this.files[0]);
            newimage.onload = function (e) {
                $('#image_preview_container').attr('src', e.target.result);
            }
        });

        $(document).on('change', "#identity_type", function () {
            let value = $(this).find('option:selected').val();
            window.location.href = "<?php echo e(route('user.profile')); ?>/?identity_type=" + value
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\football\resources\views/themes/betting/user/profile/myprofile.blade.php ENDPATH**/ ?>