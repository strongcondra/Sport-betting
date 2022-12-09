<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get($user->username); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="page-header card card-primary m-0 m-md-4 my-4 m-md-0 p-5 shadow">
        <form action="<?php echo e(route('admin.payment.search')); ?>" method="get">
            <div class="row justify-content-between ">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="name" value="<?php echo e(@request()->name); ?>" class="form-control"
                               placeholder="<?php echo app('translator')->get('Type Here'); ?>">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <select name="status" class="form-control">
                            <option value="-1"
                                    <?php if(@request()->status == '-1'): ?> selected <?php endif; ?>><?php echo app('translator')->get('All Payment'); ?></option>
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
                    <div class="form-group">
                        <input type="date" class="form-control" name="date_time" id="datepicker"/>
                    </div>
                </div>


                <div class="col-md-2">
                    <div class="form-group">
                        <button type="submit" class="btn waves-effect waves-light btn-primary"><i
                                class="fas fa-search"></i> <?php echo app('translator')->get('Search'); ?></button>
                    </div>
                </div>
            </div>
        </form>

    </div>


    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body">

            <div class="table-responsive">
                <table class="categories-show-table table table-hover table-striped table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col"><?php echo app('translator')->get('Date'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('Trx Number'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('Username'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('Method'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('Amount'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('Charge'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('Payable'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('Status'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $funds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $fund): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td data-label="<?php echo app('translator')->get('Date'); ?>"> <?php echo e(DateTime($fund->created_at,'d M,Y H:i')); ?></td>
                            <td data-label="<?php echo app('translator')->get('Trx Number'); ?>"
                                class="font-weight-bold text-uppercase"><?php echo e($fund->transaction); ?></td>
                            <td data-label="<?php echo app('translator')->get('Username'); ?>"><a
                                    href="<?php echo e(route('admin.user-edit', $fund->user_id)); ?>"
                                    target="_blank"><?php echo e(optional($fund->user)->username); ?></a>
                            </td>
                            <td data-label="<?php echo app('translator')->get('Method'); ?>"><?php echo e(optional($fund->gateway)->name); ?></td>
                            <td data-label="<?php echo app('translator')->get('Amount'); ?>"
                                class="font-weight-bold"><?php echo e(getAmount($fund->amount )); ?> <?php echo e($basic->currency); ?></td>
                            <td data-label="<?php echo app('translator')->get('Charge'); ?>"
                                class="text-success"><?php echo e(getAmount($fund->charge)); ?> <?php echo e($basic->currency); ?></td>
                            <td data-label="<?php echo app('translator')->get('Payable'); ?>"
                                class="font-weight-bold"><?php echo e(getAmount($fund->final_amount)); ?> <?php echo e($fund->gateway_currency); ?></td>


                            <td data-label="<?php echo app('translator')->get('Status'); ?>">
                                <?php if($fund->status == 2): ?>
                                    <span class="badge badge-warning"><?php echo app('translator')->get('Pending'); ?></span>
                                <?php elseif($fund->status == 1): ?>
                                    <span class="badge badge-success"><?php echo app('translator')->get('Approved'); ?></span>
                                <?php elseif($fund->status == 3): ?>
                                    <span class="badge badge-danger"><?php echo app('translator')->get('Rejected'); ?></span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="100%">
                                <p class="text-danger text-center"><?php echo app('translator')->get('No Data Found'); ?></p>
                            </td>
                        </tr>

                    <?php endif; ?>
                    </tbody>
                </table>
                <?php echo e($funds->appends($_GET)->links('partials.pagination')); ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('js'); ?>
    <script>
        "use strict";
        $(document).ready(function () {
            $('select').select2({
                selectOnClose: true
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/admin/users/fund-log.blade.php ENDPATH**/ ?>