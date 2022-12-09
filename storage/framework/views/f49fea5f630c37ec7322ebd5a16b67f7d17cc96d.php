<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Transaction'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row justify-content-between">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('user.transaction.search')); ?>" method="get">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group input-box mb-2">
                                    <input type="text" name="transaction_id"
                                           value="<?php echo e(@request()->transaction_id); ?>"
                                           class="form-control"
                                           placeholder="<?php echo app('translator')->get('Search for Transaction ID'); ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group input-box mb-2">
                                    <input type="text" name="remark" value="<?php echo e(@request()->remark); ?>"
                                           class="form-control"
                                           placeholder="<?php echo app('translator')->get('Remark'); ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group input-box mb-2">
                                    <input type="date" class="form-control" name="datetrx" id="datepicker"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group input-box">
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
                        <table class="table  table-striped" id="service-table">
                            <thead>
                            <tr>
                                <th><?php echo app('translator')->get('SL No.'); ?></th>
                                <th><?php echo app('translator')->get('Transaction ID'); ?></th>
                                <th><?php echo app('translator')->get('Amount'); ?></th>
                                <th><?php echo app('translator')->get('Remarks'); ?></th>
                                <th><?php echo app('translator')->get('Time'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td data-label="<?php echo app('translator')->get('SL No.'); ?>"><?php echo e(loopIndex($transactions) + $loop->index); ?></td>
                                    <td data-label="<?php echo app('translator')->get('Transaction ID'); ?>"><?php echo app('translator')->get($transaction->trx_id); ?></td>
                                    <td data-label="<?php echo app('translator')->get('Amount'); ?>">
                                        <span class="font-weight-bold text-<?php echo e(($transaction->trx_type == "+") ? 'success': 'danger'); ?>"><?php echo e(($transaction->trx_type == "+") ? '+': '-'); ?><?php echo e(getAmount($transaction->amount, config('basic.fraction_number')). ' ' . trans(config('basic.currency'))); ?></span>
                                    </td>
                                    <td data-label="<?php echo app('translator')->get('Remarks'); ?>"> <?php echo app('translator')->get($transaction->remarks); ?></td>
                                    <td data-label="<?php echo app('translator')->get('Time'); ?>">
                                        <?php echo e(dateTime($transaction->created_at, 'd M Y h:i A')); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <tr class="text-center">
                                    <td colspan="100%"><?php echo e(__('No Data Found!')); ?></td>
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

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/themes/betting/user/transaction/index.blade.php ENDPATH**/ ?>