<?php $__env->startSection('title',trans('Fund History')); ?>
<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('user.fund-history.search')); ?>" method="get">
                        <div class="row justify-content-between">
                            <div class="col-md-4">
                                <div class="form-group input-box mb-2">
                                    <input type="text" name="name" value="<?php echo e(@request()->name); ?>"
                                           class="form-control"
                                           placeholder="<?php echo app('translator')->get('Type Here'); ?>">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group input-box mb-2">
                                    <select name="status" class="form-select">
                                        <option value=""><?php echo app('translator')->get('All Payment'); ?></option>
                                        <option value="1"
                                                <?php if(@request()->status == '1'): ?> selected <?php endif; ?>><?php echo app('translator')->get('Complete Payment'); ?></option>
                                        <option value="2"
                                                <?php if(@request()->status == '2'): ?> selected <?php endif; ?>><?php echo app('translator')->get('Pending Payment'); ?></option>
                                        <option value="3"
                                                <?php if(@request()->status == '3'): ?> selected <?php endif; ?>><?php echo app('translator')->get('Cancel Payment'); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group input-box mb-2">
                                    <input type="date" class="form-control" name="date_time"
                                           id="datepicker"/>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group mb-2 h-fill">
                                    <button type="submit" class="btn-custom w-100">
                                        <i
                                            class="fas fa-search"></i> <?php echo app('translator')->get('Search'); ?></button>
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
                                <th scope="col"><?php echo app('translator')->get('Transaction ID'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Gateway'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Amount'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Charge'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Status'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Time'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $funds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>

                                    <td data-label="#<?php echo app('translator')->get('Transaction ID'); ?>">
                                        <strong><?php echo e($data->transaction); ?></strong>
                                    </td>
                                    <td data-label="<?php echo app('translator')->get('Gateway'); ?>"><?php echo app('translator')->get(optional($data->gateway)->name); ?></td>
                                    <td data-label="<?php echo app('translator')->get('Amount'); ?>">
                                        <strong><?php echo e(getAmount($data->amount)); ?> <?php echo app('translator')->get($basic->currency); ?></strong>
                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Charge'); ?>">
                                        <strong><?php echo e(getAmount($data->charge)); ?> <?php echo app('translator')->get($basic->currency); ?></strong>
                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Status'); ?>">
                                        <?php if($data->status == 1): ?>
                                            <span class="badge bg-success"><?php echo app('translator')->get('Complete'); ?></span>
                                        <?php elseif($data->status == 2): ?>
                                            <span class="badge bg-warning"><?php echo app('translator')->get('Pending'); ?></span>
                                        <?php elseif($data->status == 3): ?>
                                            <span class="badge bg-danger"><?php echo app('translator')->get('Cancel'); ?></span>
                                        <?php endif; ?>
                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Time'); ?>">
                                        <?php echo e(dateTime($data->created_at, 'd M Y h:i A')); ?>

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
                    <?php echo e($funds->appends($_GET)->links($theme.'partials.pagination')); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\football\resources\views/themes/betting/user/transaction/fundHistory.blade.php ENDPATH**/ ?>