<?php $__env->startSection('title',trans($page_title)); ?>
<?php $__env->startSection('content'); ?>

    <div class="row ">
        <div class="col-12">
            <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">
                <div class="card-body">
                    <div class="media mb-4 justify-content-end">
                        <a href="<?php echo e(route('admin.payout-method')); ?>" class="btn btn-sm  btn-primary mr-2">
                            <span><i class="fas fa-eye"></i> <?php echo app('translator')->get('Payout Method'); ?></span>
                        </a>
                    </div>

                    <form method="post" action="<?php echo e(route('admin.payout-method.store')); ?>"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="form-group col-md-6 col-6">
                                <label><?php echo e(trans('Name')); ?></label>
                                <input type="text" class="form-control"
                                       name="name"
                                       value="<?php echo e(old('name')); ?>" >

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

                            <div class="form-group col-md-6 col-6">
                                <label> <?php echo e(trans('Duration')); ?> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                           name="duration"
                                           value="<?php echo e(old('duration')); ?>"
                                           >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <?php echo e(trans('Hour / Minutes/ Days ')); ?>

                                        </div>
                                    </div>
                                </div>

                                <?php $__errorArgs = ['duration'];
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


                        <div class="row">
                            <div class="form-group col-md-6 col-6">
                                <label><?php echo e(trans('Minimum Amount')); ?></label>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                           name="minimum_amount"
                                           value="<?php echo e(old('minimum_amount')); ?>"
                                           >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <?php echo e($basic->currency ?? 'USD'); ?>

                                        </div>
                                    </div>
                                </div>

                                <?php $__errorArgs = ['minimum_amount'];
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


                            <div class="form-group col-md-6 col-6">
                                <label><?php echo e(trans('Maximum Amount')); ?></label>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                           name="maximum_amount"
                                           value="<?php echo e(old('maximum_amount')); ?>"
                                           >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <?php echo e($basic->currency ?? 'USD'); ?>

                                        </div>
                                    </div>
                                </div>

                                <?php $__errorArgs = ['maximum_amount'];
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

                        <div class="row">
                            <div class="form-group col-md-6 col-6">
                                <label><?php echo app('translator')->get('Percent Charge'); ?></label>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                           name="percent_charge"
                                           value="<?php echo e(old('percent_charge')); ?>"
                                           >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            %
                                        </div>
                                    </div>
                                </div>
                                <?php $__errorArgs = ['percent_charge'];
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

                            <div class="form-group col-md-6 col-6">
                                <label><?php echo app('translator')->get('Fixed Charge'); ?></label>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                           name="fixed_charge"
                                           value="<?php echo e(old('fixed_charge')); ?>"
                                           >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <?php echo e($basic->currency ?? 'USD'); ?>

                                        </div>
                                    </div>
                                </div>

                                <?php $__errorArgs = ['fixed_charge'];
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


                        <div class="row justify-content-between">

                            <div class="col-sm-6 col-md-3">
                                <div class="image-input ">
                                    <label for="image-upload" id="image-label"><i class="fas fa-upload"></i></label>
                                    <input type="file" name="image" placeholder="<?php echo app('translator')->get('Choose image'); ?>" id="image">
                                    <img id="image_preview_container" class="preview-image"
                                         src="<?php echo e(getFile(config('location.withdraw.path'))); ?>"
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
                        <div class="row mt-3 justify-content-between">
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group ">
                                    <label><?php echo app('translator')->get('Status'); ?></label>
                                    <div class="custom-switch-btn">
                                        <input type='hidden' value='1' name='status'>
                                        <input type="checkbox" name="status" class="custom-switch-checkbox" id="status"
                                               value="0">
                                        <label class="custom-switch-checkbox-label" for="status">
                                            <span class="custom-switch-checkbox-inner"></span>
                                            <span class="custom-switch-checkbox-switch"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <a href="javascript:void(0)" class="btn btn-success float-right mt-3" id="generate"><i
                                            class="fa fa-plus-circle"></i> Add Field</a>
                                </div>
                            </div>

                        </div>


                        <div class="row addedField">

                        </div>

                        <button type="submit"
                                class="btn  btn-primary btn-block mt-3"><?php echo app('translator')->get('Save Changes'); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script>

        "use strict";
        $(document).ready(function (e) {

            $("#generate").on('click', function () {
                var form = `<div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="field_name[]" class="form-control " type="text" value="" required placeholder="<?php echo e(trans('Field Name')); ?>">

                                        <select name="type[]"  class="form-control  ">
                                            <option value="text"><?php echo e(trans('Input Text')); ?></option>
                                            <option value="textarea"><?php echo e(trans('Textarea')); ?></option>
                                            <option value="file"><?php echo e(trans('File upload')); ?></option>
                                        </select>

                                        <select name="validation[]"  class="form-control  ">
                                            <option value="required"><?php echo e(trans('Required')); ?></option>
                                            <option value="nullable"><?php echo e(trans('Optional')); ?></option>
                                        </select>

                                        <span class="input-group-btn">
                                            <button class="btn btn-danger delete_desc" type="button">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div> `;

                $('.addedField').append(form)
            });


            $(document).on('click', '.delete_desc', function () {
                $(this).closest('.input-group').parent().remove();
            });


            $('#image').change(function () {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#image_preview_container').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });


        });

        $(document).ready(function () {
            $('select').select2({
                selectOnClose: true
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/admin/payout/create.blade.php ENDPATH**/ ?>