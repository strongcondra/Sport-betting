<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get($user->username); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-0 m-md-4 my-4 m-md-0">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo app('translator')->get('Profile'); ?></h4>
                        <div class="form-group">
                            <div class="image-input">
                                <img id="image_preview_container" class="preview-image"
                                     src="<?php echo e(getFile(config('location.user.path').$user->image)); ?>"
                                     alt="preview image">
                            </div>
                        </div>
                        <h3> <?php echo app('translator')->get(ucfirst($user->username)); ?></h3>
                        <p><?php echo app('translator')->get('Joined At'); ?> <?php echo app('translator')->get($user->created_at->format('d M,Y h:i A')); ?> </p>
                    </div>
                </div>

                <div class="card card-primary">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo app('translator')->get('User information'); ?></h4>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo app('translator')->get('Email'); ?>
                                <span><?php echo e($user->email); ?></span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo app('translator')->get('Username'); ?>
                                <span><?php echo e($user->username); ?></span></li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo app('translator')->get('Status'); ?>
                                <span
                                    class="badge badge-<?php echo e(($user->status==1) ? 'success' :'danger'); ?> success badge-pill"><?php echo e(($user->status==1) ? trans('Active') : trans('Inactive')); ?></span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo app('translator')->get('Balance'); ?>
                                <span><?php echo app('translator')->get(config('basic.currency_symbol')); ?><?php echo e(getAmount($user->balance, config('basic.fraction_number'))); ?> </span>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="card card-primary">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo app('translator')->get('User action'); ?></h4>


                        <div class="btn-list ">
                            <?php if(adminAccessRoute(config('role.user_management.access.edit'))): ?>
                                <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                                        data-target="#balance">
                                    <span class="btn-label"><i class="fas fa-hand-holding-usd"></i></span>
                                    <?php echo app('translator')->get('Add/Subtract Fund'); ?>
                                </button>
                            <?php endif; ?>

                            <?php if(adminAccessRoute(config('role.user_management.access.view'))): ?>
                                <a href="<?php echo e(route('admin.user.transaction',$user->id)); ?>"
                                   class="btn btn-info btn-sm">
                                    <span class="btn-label"><i
                                            class="fas fa-exchange-alt"></i></span> <?php echo app('translator')->get('Transaction Log'); ?>
                                </a>


                                <a href="<?php echo e(route('admin.user.fundLog',$user->id)); ?>"
                                   class="btn btn-info btn-sm">
                                    <span class="btn-label"><i
                                            class="fas fa-money-bill-alt"></i></span> <?php echo app('translator')->get('Fund Log'); ?>
                                </a>


                                <a href="<?php echo e(route('admin.user.withdrawal',$user->id)); ?>"
                                   class="btn btn-info btn-sm">
                                    <span class="btn-label"><i
                                            class="fas fa-hand-holding"></i></span> <?php echo app('translator')->get('Payout History'); ?>
                                </a>

                            <?php endif; ?>

                            <?php if(adminAccessRoute(config('role.user_management.access.edit'))): ?>
                                <a href="<?php echo e(route('admin.send-email',$user->id)); ?>"
                                   class="btn btn-info btn-sm">
                                    <span class="btn-label"><i
                                            class="fas fa-envelope-open"></i></span> <?php echo app('translator')->get('Send Email'); ?>
                                </a>
                            <?php endif; ?>


                            <?php if(adminAccessRoute(config('role.user_management.access.view'))): ?>
                                <a href="<?php echo e(route('admin.user.userKycHistory',$user)); ?>"
                                   class="btn btn-info btn-sm">
                                    <span class="btn-label"><i
                                            class="fas fa-file-invoice"></i></span> <?php echo app('translator')->get('KYC Records'); ?>
                                </a>

                                <a href="<?php echo e(route('admin.historyBet',$user->id)); ?>"
                                   class="btn btn-info btn-sm">
                                    <span class="btn-label"><i
                                            class="fas fa-history"></i></span> <?php echo app('translator')->get('Betting Records'); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">

                <div class="card card-primary">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo e(ucfirst($user->username)); ?> <?php echo app('translator')->get('Information'); ?></h4>
                        <form method="post" action="<?php echo e(route('admin.user-update', $user->id)); ?>"
                              enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label><?php echo app('translator')->get('First Name'); ?></label>
                                        <input class="form-control" type="text" name="firstname"
                                               value="<?php echo e($user->firstname); ?>"
                                               required>
                                        <?php $__errorArgs = ['firstname'];
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

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label><?php echo app('translator')->get('Last Name'); ?></label>
                                        <input class="form-control" type="text" name="lastname"
                                               value="<?php echo e($user->lastname); ?>"
                                               required>
                                        <?php $__errorArgs = ['lastname'];
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

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label><?php echo app('translator')->get('Username'); ?></label>
                                        <input class="form-control" type="text" name="username"
                                               value="<?php echo e($user->username); ?>" required>
                                        <?php $__errorArgs = ['username'];
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

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label><?php echo app('translator')->get('Email'); ?></label>
                                        <input class="form-control" type="email" name="email" value="<?php echo e($user->email); ?>"
                                               required>
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
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label><?php echo app('translator')->get('Phone Number'); ?></label>
                                        <input class="form-control" type="text" name="phone" value="<?php echo e($user->phone); ?>">
                                        <?php $__errorArgs = ['phone'];
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

                                <div class="col-md-4">

                                    <div class="form-group ">
                                        <label><?php echo app('translator')->get('Preferred language'); ?></label>

                                        <select name="language_id" id="language_id" class="form-control">
                                            <option value="" disabled><?php echo app('translator')->get('Select Language'); ?></option>
                                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $la): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($la->id); ?>"
                                                    <?php echo e(old('language_id', $user->language_id) == $la->id ? 'selected' : ''); ?>><?php echo app('translator')->get($la->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                        <?php $__errorArgs = ['language_id'];
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
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label><?php echo app('translator')->get('Address'); ?></label>
                                        <textarea class="form-control" name="address"
                                                  rows="2"><?php echo e($user->address); ?></textarea>
                                        <?php $__errorArgs = ['address'];
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
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label><?php echo app('translator')->get('Status'); ?></label>
                                            <div class="custom-switch-btn w-md-80">
                                                <input type='hidden' value='1' name='status'>
                                                <input type="checkbox" name="status" class="custom-switch-checkbox"
                                                       id="status" <?php echo e($user->status == 0 ? 'checked' : ''); ?> >
                                                <label class="custom-switch-checkbox-label" for="status">
                                                    <span class="status custom-switch-checkbox-inner"></span>
                                                    <span class="custom-switch-checkbox-switch"></span>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <label><?php echo app('translator')->get('Email Verification'); ?></label>
                                            <div class="custom-switch-btn w-md-80">
                                                <input type='hidden' value='1' name='email_verification'>
                                                <input type="checkbox" name="email_verification"
                                                       class="custom-switch-checkbox"
                                                       id="email_verification" <?php echo e($user->email_verification == 0 ? 'checked' : ''); ?>>
                                                <label class="custom-switch-checkbox-label" for="email_verification">
                                                    <span class="verify custom-switch-checkbox-inner"></span>
                                                    <span class="custom-switch-checkbox-switch"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label><?php echo app('translator')->get('SMS Verification'); ?></label>
                                            <div class="custom-switch-btn w-md-80">
                                                <input type='hidden' value='1' name='sms_verification'>
                                                <input type="checkbox" name="sms_verification"
                                                       class="custom-switch-checkbox"
                                                       id="sms_verification" <?php echo e($user->sms_verification == 0 ? 'checked' : ''); ?>>
                                                <label class="custom-switch-checkbox-label" for="sms_verification">
                                                    <span class="verify custom-switch-checkbox-inner"></span>
                                                    <span class="custom-switch-checkbox-switch"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label><?php echo app('translator')->get('2FA Secturity'); ?></label>
                                            <div class="custom-switch-btn w-md-80">
                                                <input type='hidden' value='0' name='two_fa_verify'>
                                                <input type="checkbox" name="two_fa_verify"
                                                       class="custom-switch-checkbox"
                                                       id="two_fa_verify" <?php echo e($user->two_fa_verify == 1 ? 'checked' : ''); ?>>
                                                <label class="custom-switch-checkbox-label" for="two_fa_verify">
                                                    <span class="custom-switch-checkbox-inner"></span>
                                                    <span class="custom-switch-checkbox-switch"></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="submit-btn-wrapper mt-md-3  text-center text-md-left">
                                <button type="submit"
                                        class=" btn waves-effect waves-light btn-rounded btn-primary btn-block">
                                    <span><?php echo app('translator')->get('Update User'); ?></span></button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="card card-primary ">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo app('translator')->get('Password Change'); ?></h4>

                        <form method="post" action="<?php echo e(route('admin.userPasswordUpdate',$user->id)); ?>"
                              enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label><?php echo app('translator')->get('New Password'); ?></label>
                                        <input id="new_password" type="password" class="form-control" name="password"
                                               autocomplete="current-password">
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
                                    <div class="form-group ">
                                        <label><?php echo app('translator')->get('Confirm Password'); ?></label>
                                        <input id="confirm_password" type="password" name="password_confirmation"
                                               autocomplete="current-password" class="form-control">
                                        <?php $__errorArgs = ['password_confirmation'];
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
                            <div class="submit-btn-wrapper mt-md-3 text-center text-md-left">
                                <button type="submit"
                                        class="btn waves-effect waves-light btn-rounded btn-primary btn-block">
                                    <span><?php echo app('translator')->get('Update Password'); ?></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal fade" id="balance">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" action="<?php echo e(route('admin.user-balance-update',$user->id)); ?>"
                      enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <!-- Modal Header -->
                    <div class="modal-header modal-colored-header bg-primary">
                        <h4 class="modal-title"><?php echo app('translator')->get('Add / Subtract Balance'); ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group ">
                            <label><?php echo app('translator')->get('Amount'); ?></label>
                            <input class="form-control" type="text" name="balance" id="balance">
                        </div>

                        <div class="form-group">
                            <div class="custom-switch-btn w-md-100">
                                <input type='hidden' value='1' name='add_status'>
                                <input type="checkbox" name="add_status" class=" custom-switch-checkbox" id="add_status"
                                       value="0">
                                <label class="custom-switch-checkbox-label" for="add_status">
                                    <span class="modal_status custom-switch-checkbox-inner"></span>
                                    <span class="custom-switch-checkbox-switch"></span>
                                </label>
                            </div>
                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal"><span><?php echo app('translator')->get('Close'); ?></span>
                        </button>
                        <button type="submit" class=" btn btn-primary balanceSave"><span><?php echo app('translator')->get('Submit'); ?></span>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <style>
        .modal_status.custom-switch-checkbox-inner:before {
            content: "+ Add Balance";
        }

        .modal_status.custom-switch-checkbox-inner:after {
            content: "- Substruct Balance";
        }

        .status.custom-switch-checkbox-inner:before {
            content: "Active";
        }

        .status.custom-switch-checkbox-inner:after {
            content: "Banned";
        }

        .verify.custom-switch-checkbox-inner:before {
            content: "Verfied";
        }

        .verify.custom-switch-checkbox-inner:after {
            content: "Unverfied";
        }

    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        "use strict";
        $(document).ready(function () {
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
            $(document).on('click', '.balanceSave', function () {
                var bala = $('#balance').text();
            });


            $('select').select2({
                selectOnClose: true
            });
        });


    </script>
<?php $__env->stopPush(); ?>



<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/admin/users/edit-user.blade.php ENDPATH**/ ?>