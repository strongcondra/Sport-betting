<?php $__env->startSection('title'); ?>
    <?php echo e(@$matchName); ?> <small>(<?php echo e($question->name); ?>)</small>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card card-primary m-0 m-md-4  m-md-0 shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="categories-show-table table table-hover table-striped table-bordered" id="zero_config">
                    <thead class="thead-dark">
                    <tr>
                        <th><?php echo app('translator')->get('SL No.'); ?></th>
                        <th><?php echo app('translator')->get('User'); ?></th>
                        <th><?php echo app('translator')->get('Question'); ?></th>
                        <th><?php echo app('translator')->get('Option'); ?></th>
                        <th><?php echo app('translator')->get('Result'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $betInvestLogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td data-label="<?php echo app('translator')->get('SL No.'); ?>"><?php echo e(++$key); ?></td>
                            <td data-label="<?php echo app('translator')->get('User'); ?>">
                                <a href="<?php echo e(route('admin.user-edit',[optional($item->user)->id])); ?>">
                                    <div class="d-lg-flex d-block align-items-center ">
                                        <div class="mr-3"><img
                                                src="<?php echo e(getFile(config('location.user.path').optional($item->user)->image)); ?>"
                                                alt="user" class="rounded-circle" width="45"
                                                height="45"></div>
                                        <div class="">
                                            <h5 class="text-dark mb-0 font-16 font-weight-medium"><?php echo app('translator')->get(optional($item->user)->username); ?></h5>
                                            <span class="text-muted font-14"><?php echo e(optional($item->user)->email); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td data-label="<?php echo app('translator')->get('Question'); ?>"><?php echo app('translator')->get(optional($item->gameQuestion)->name); ?></td>
                            <td data-label="<?php echo app('translator')->get('Option'); ?>"><?php echo app('translator')->get(optional($item->gameOption)->option_name); ?></td>
                            <td data-label="<?php echo app('translator')->get('Result'); ?>">
                                <?php if($item->gameQuestion->winOption): ?>
                                    <span class="badge badge-success"><?php echo e(@$item->gameQuestion->winOption->option_name); ?></span>
                                <?php else: ?>
                                    <span class="badge badge-warning"><?php echo app('translator')->get('N/A'); ?></span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <?php endif; ?>
                    </tbody>
                </table>
                <?php echo e($betInvestLogs->appends(@$search)->links('partials.pagination')); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/admin/result_history/userList.blade.php ENDPATH**/ ?>