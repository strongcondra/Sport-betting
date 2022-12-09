<?php $__env->startSection('title'); ?>
    <?php echo e($page_title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-12">
                <div class="card card-primary shadow">
                    <div class="card-body">
                        <form method="post" action="<?php echo e(route('admin.update.payment.methods', $method->id)); ?>"
                              class="needs-validation base-form" novalidate="" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <div class="mt-0 section-title">
                                Edit <?php echo e(strtoupper($method->name)); ?>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-6">
                                    <label>Name</label>
                                    <input type="text" class="form-control "
                                           name="name"
                                           value="<?php echo e(old('name', $method->name ? : '')); ?>" disabled required="">
                                    <div class="invalid-feedback">
                                        Please fill in the payment method name
                                    </div>
                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-text">
                                                <?php echo e($errors->first('name')); ?>

                                            </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group col-md-6 col-6">
                                    <label>Currency</label>
                                    <select class="form-control  selectpicker currency-change"
                                            data-live-search="true" name="currency"
                                            required="">
                                        <option disabled selected>Select Currency</option>
                                        <?php $__currentLoopData = $method->currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $__currentLoopData = $currency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curKey => $singleCurrency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    value="<?php echo e($curKey); ?>" <?php echo e(old('currency', $method->currency) == $curKey ? 'selected' : ''); ?> data-fiat="<?php echo e($key); ?>"><?php echo e($curKey); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please fill in the currency
                                    </div>
                                    <?php if($errors->has('currency')): ?>
                                        <span class="invalid-text">
                                                <?php echo e($errors->first('currency')); ?>

                                            </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-6">
                                    <label>Currency Symbol</label>
                                    <input type="text" class="form-control "
                                           name="currency_symbol"
                                           value="<?php echo e(old('currency_symbol', $method->symbol ?: '')); ?>" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the currency symbol
                                    </div>
                                    <?php if($errors->has('currency_symbol')): ?>
                                        <span class="invalid-text">
                                                <?php echo e($errors->first('currency_symbol')); ?>

                                            </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group col-md-6 col-6">
                                    <label>Convention Rate</label>
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                1 <?php echo e($basic->currency ? : 'USD'); ?> =
                                            </div>
                                        </div>
                                        <input type="text" class="form-control "
                                               name="convention_rate"
                                               value="<?php echo e(old('convention_rate', getAmount($method->convention_rate) ?: '')); ?>"
                                               required="">
                                        <div class="input-group-append">
                                            <div class="input-group-text set-currency">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the convention rate
                                    </div>
                                    <?php if($errors->has('convention_rate')): ?>
                                        <span class="invalid-text">
                                                <?php echo e($errors->first('currency_symbol')); ?>

                                            </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-6">
                                    <label>Minimum Deposit Amount</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control "
                                               name="minimum_deposit_amount"
                                               value="<?php echo e(old('minimum_deposit_amount', round($method->min_amount, 2) ?: '')); ?>"
                                               required="">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <?php echo e($basic->currency ?? 'USD'); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the minimum deposit amount
                                    </div>
                                    <?php if($errors->has('minimum_deposit_amount')): ?>
                                        <span class="invalid-text">
                                                <?php echo e($errors->first('minimum_deposit_amount')); ?>

                                            </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group col-md-6 col-6">
                                    <label>Maximum Deposit Amount</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control "
                                               name="maximum_deposit_amount"
                                               value="<?php echo e(old('maximum_deposit_amount', round($method->max_amount, 2) ?: '')); ?>"
                                               required="">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <?php echo e($basic->currency ?? 'USD'); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the maximum deposit amount
                                    </div>
                                    <?php if($errors->has('maximum_deposit_amount')): ?>
                                        <span class="invalid-text">
                                                <?php echo e($errors->first('maximum_deposit_amount')); ?>

                                            </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-6">
                                    <label>Percentage Charge</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control "
                                               name="percentage_charge"
                                               value="<?php echo e(old('percentage_charge', round($method->percentage_charge, 2) ?: 0)); ?>"
                                               required="">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                %
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the percentage charge
                                    </div>
                                    <?php if($errors->has('percentage_charge')): ?>
                                        <span class="invalid-text">
                                                <?php echo e($errors->first('percentage_charge')); ?>

                                            </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group col-md-6 col-6">
                                    <label>Fixed Charge</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control "
                                               name="fixed_charge"
                                               value="<?php echo e(old('fixed_charge', round($method->fixed_charge, 2) ?: 0)); ?>"
                                               required="">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <?php echo e($basic->currency ?? 'USD'); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the fixed charge
                                    </div>
                                    <?php if($errors->has('fixed_charge')): ?>
                                        <span class="invalid-text">
                                                <?php echo e($errors->first('fixed_charge')); ?>

                                            </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <?php $__currentLoopData = $method->parameters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $parameter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-group  col-md-6 col-6">
                                        <label for="<?php echo e($key); ?>"><?php echo e(strtoupper(str_replace('_',' ', $key))); ?></label>
                                        <input type="text" name="<?php echo e($key); ?>" value="<?php echo e(old($key, $parameter)); ?>"
                                               class="form-control " id="<?php echo e($key); ?>">
                                        <div class="invalid-feedback">
                                            Please fill in the <?php echo e(str_replace('_',' ', $key)); ?>

                                        </div>
                                        <?php if($errors->has($key)): ?>
                                            <span class="invalid-text">
                                                <?php echo e($errors->first($key)); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php if($method->extra_parameters): ?>
                                <div class="row">
                                    <?php $__currentLoopData = $method->extra_parameters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $param): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-group  col-md-6 col-6">
                                            <label><?php echo e(strtoupper(str_replace('_',' ', $key))); ?></label>
                                            <div class="input-group">
                                                <input type="text" name="<?php echo e($key); ?>"
                                                       value="<?php echo e(old($key, route($param, $method->code ))); ?>"
                                                       class="form-control" disabled>
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-info copy-btn">
                                                        <i class="fas fa-copy"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                            <div class="row justify-content-between">

                                <div class="col-sm-6 col-md-3">
                                    <div class="image-input ">
                                        <label for="image-upload" id="image-label"><i class="fas fa-upload"></i></label>
                                        <input type="file" name="image" placeholder="<?php echo app('translator')->get('Choose image'); ?>" id="image">
                                        <img id="image_preview_container" class="preview-image" src="<?php echo e(getFile(config('location.gateway.path').$method->image)); ?>"
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
                            <div class="row mt-3">

                                <div class="form-group col-lg-3 col-md-6">
                                    <label><?php echo app('translator')->get('Status'); ?></label>

                                    <div class="custom-switch-btn">
                                        <input type='hidden' value='1' name='status'>
                                        <input type="checkbox" name="status" class="custom-switch-checkbox" id="status" value = "0" <?php if( $method->status == 0):echo 'checked'; endif ?> >
                                        <label class="custom-switch-checkbox-label" for="status">
                                            <span class="custom-switch-checkbox-inner"></span>
                                            <span class="custom-switch-checkbox-switch"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary btn-block mt-3">Save Changes</button>
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

        $(document).ready(function () {
            setCurrency();
            $(document).on('change', '.currency-change', function (){
                setCurrency();
            });

            function setCurrency() {
                let currency = $('.currency-change').val();
                let fiatYn = $('.currency-change option:selected').attr('data-fiat');
                if(fiatYn == 0){
                    $('.set-currency').text(currency);
                }else{
                    $('.set-currency').text('USD');
                }
            }

            $(document).on('click', '.copy-btn', function () {
                var _this = $(this)[0];
                var copyText = $(this).parents('.input-group-append').siblings('input');
                $(copyText).prop('disabled', false);
                copyText.select();
                document.execCommand("copy");
                $(copyText).prop('disabled', true);
                $(this).text('Coppied');
                setTimeout(function () {
                    $(_this).text('');
                    $(_this).html('<i class="fas fa-copy"></i>');
                }, 500)
            });

            $('#image').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#image_preview_container').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

            $('select').select2({
                selectOnClose: true
            });

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/admin/payment_methods/edit.blade.php ENDPATH**/ ?>