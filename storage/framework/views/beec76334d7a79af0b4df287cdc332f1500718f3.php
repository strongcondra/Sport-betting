<?php $__env->startSection('title',trans($title)); ?>
<?php $__env->startSection('content'); ?>

    <div class="row justify-content-between">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('user.referral.bonus.search')); ?>" method="get">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-box mb-2">
                                    <input type="text" name="search_user"
                                           value="<?php echo e(@request()->search_user); ?>"
                                           class="form-control"
                                           placeholder="<?php echo app('translator')->get('Search User'); ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-box mb-2">
                                    <input type="date" class="form-control" name="datetrx" id="datepicker"/>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-box mb-2 h-fill">
                                    <button type="submit" class="btn-custom w-100">
                                        <i class="fas fa-search"></i> <?php echo app('translator')->get('Search'); ?></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body ">

                    <div class="table-parent table-responsive m-0">
                        <table class="table table-striped" id="service-table">
                            <thead>
                            <tr>
                                <th><?php echo app('translator')->get('SL No.'); ?></th>
                                <th><?php echo app('translator')->get('Bonus From'); ?></th>
                                <th><?php echo app('translator')->get('Amount'); ?></th>
                                <th><?php echo app('translator')->get('Remarks'); ?></th>
                                <th><?php echo app('translator')->get('Time'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td data-label="<?php echo app('translator')->get('SL No.'); ?>">
                                        <?php echo e(loopIndex($transactions) + $loop->index); ?></td>
                                    <td data-label="<?php echo app('translator')->get('Bonus From'); ?>"><?php echo app('translator')->get(optional($transaction->bonusBy)->fullname); ?></td>
                                    <td data-label="<?php echo app('translator')->get('Amount'); ?>">
                                                    <span
                                                        class="font-weight-bold text-success"><?php echo e(getAmount($transaction->amount, config('basic.fraction_number')). ' ' . trans(config('basic.currency'))); ?></span>
                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Remarks'); ?>"> <?php echo app('translator')->get($transaction->remarks); ?></td>
                                    <td data-label="<?php echo app('translator')->get('Time'); ?>">
                                        <?php echo e(dateTime($transaction->created_at, 'd M Y h:i A')); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr class="text-center">
                                    <td colspan="100%"><?php echo e(trans('No Data Found!')); ?></td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>

                    </div>
                    <?php echo e($transactions->appends($_GET)->links($theme.'partials.pagination')); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\football\resources\views/themes/betting/user/transaction/referral-bonus.blade.php ENDPATH**/ ?>