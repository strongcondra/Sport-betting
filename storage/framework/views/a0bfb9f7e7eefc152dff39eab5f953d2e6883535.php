<?php $__env->startSection('title', trans($title)); ?>

<?php $__env->startSection('content'); ?>

    <div class="row g-3">
        <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-1 col-6 col-sm-4 col-md-3">
                <div class="deposit-box addFund"
                     data-id="<?php echo e($gateway->id); ?>"
                     data-name="<?php echo e($gateway->name); ?>"
                     data-min_amount="<?php echo e(getAmount($gateway->minimum_amount, $basic->fraction_number)); ?>"
                     data-max_amount="<?php echo e(getAmount($gateway->maximum_amount,$basic->fraction_number)); ?>"
                     data-percent_charge="<?php echo e(getAmount($gateway->percent_charge,$basic->fraction_number)); ?>"
                     data-fix_charge="<?php echo e(getAmount($gateway->fixed_charge, $basic->fraction_number)); ?>"

                     data-backdrop='static' data-keyboard='false'
                     data-bs-toggle="modal" data-bs-target="#makeDeposit">
                    <div class="img-box">
                        <img class="img-fluid gateway" src="<?php echo e(getFile(config('location.withdraw.path').$gateway->image)); ?>"
                             alt="<?php echo e($gateway->name); ?>">
                    </div>
                    <p><?php echo e(trans($gateway->name)); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php $__env->startPush('loadModal'); ?>
        <div id="makeDeposit" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="method-name"></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text"></span>
                        </button>
                    </div>

                    <form action="<?php echo e(route('user.payout.moneyRequest')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body ">
                                <div class="payment-form">
                                    <p class="text-danger depositLimit"></p>
                                    <p class="text-danger depositCharge"></p>

                                    <input type="hidden" class="gateway" name="gateway" value="">
                                    <div class="form-group">
                                        <label><?php echo app('translator')->get('Amount'); ?></label>
                                        <div class="input-box">
                                            <div class="input-group input-group-lg">
                                                <input type="text" class="amount form-control" name="amount">
                                                <div class="input-group-append">
                                                    <span class="input-group-text show-currency"></span>
                                                </div>
                                            </div>
                                            <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer border-top-0">
                            <button type="submit" class="btn-custom"><?php echo app('translator')->get('Next'); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>

    <?php if(count($errors) > 0 ): ?>
        <script>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            Notiflix.Notify.Failure("<?php echo app('translator')->get($error); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </script>
    <?php endif; ?>

    <script>
        "use strict";

        var id, minAmount, maxAmount, baseSymbol, fixCharge, percentCharge, currency, gateway;

        $('.addFund').on('click', function () {
            id = $(this).data('id');
            gateway = $(this).data('gateway');
            minAmount = $(this).data('min_amount');
            maxAmount = $(this).data('max_amount');
            baseSymbol = "<?php echo e(config('basic.currency_symbol')); ?>";
            fixCharge = $(this).data('fix_charge');
            percentCharge = $(this).data('percent_charge');
            currency = $(this).data('currency');
            $('.depositLimit').text(`<?php echo app('translator')->get('Transaction Limit:'); ?> ${minAmount} - ${maxAmount}  ${baseSymbol}`);

            var depositCharge = `<?php echo app('translator')->get('Charge:'); ?> ${fixCharge} ${baseSymbol}  ${(0 < percentCharge) ? ' + ' + percentCharge + ' % ' : ''}`;
            $('.depositCharge').text(depositCharge);
            $('.method-name').text(`<?php echo app('translator')->get('Payout By'); ?> ${$(this).data('name')}`);
            $('.show-currency').text("<?php echo e(config('basic.currency')); ?>");
            $('.gateway').val(id);
        });
        $('.close').on('click', function (e) {
            $('#loading').hide();
            $('.amount').val(``);
            $("#makeDeposit").modal("hide");
        });

    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\football\resources\views/themes/betting/user/payout/money.blade.php ENDPATH**/ ?>