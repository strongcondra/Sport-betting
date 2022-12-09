<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get($gameQuestion->name); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card card-primary m-0 m-md-4  m-md-0 shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="categories-show-table table table-hover table-striped table-bordered" id="zero_config">
                    <thead class="thead-dark">
                    <tr>
                        <th><?php echo app('translator')->get('SL No.'); ?></th>
                        <th><?php echo app('translator')->get('Options'); ?></th>
                        <th><?php echo app('translator')->get('Ratio'); ?></th>
                        <th><?php echo app('translator')->get('Total Prediction'); ?></th>
                        <th class="text-center"><?php echo app('translator')->get('Status'); ?></th>
                        <?php if(adminAccessRoute(config('role.manage_result.access.edit'))): ?>
                            <th class="text-center"><?php echo app('translator')->get('Action'); ?></th>
                        <?php endif; ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $gameQuestion->gameOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td data-label="<?php echo app('translator')->get('SL No.'); ?>"><?php echo e(++$key); ?></td>
                            <td data-label="<?php echo app('translator')->get('Options'); ?>"><?php echo app('translator')->get($item->option_name); ?></td>
                            <td data-label="<?php echo app('translator')->get('Ratio'); ?>"><?php echo app('translator')->get($item->ratio); ?></td>
                            <td data-label="<?php echo app('translator')->get('Total Prediction'); ?>">
                                <span class="badge badge-success"><?php echo e(count($item->betInvestLog)); ?></span>
                            </td>
                            <td data-label="<?php echo app('translator')->get('Status'); ?>" class="text-lg-center text-right">
                                <?php if($item->status == 1): ?>
                                    <span class="badge badge-light">
                                         <i class="fa fa-circle text-warning warning font-12"></i> <?php echo app('translator')->get('Pending'); ?></span>
                                <?php elseif($item->status == 2): ?>
                                    <span class="badge badge-light">
                                        <i class="fa fa-circle text-success success font-12"></i> <?php echo app('translator')->get('Win'); ?></span>
                                <?php elseif($item->status == 0): ?>
                                    <span class="badge badge-light">
                                        <i class="fa fa-circle text-danger danger font-12"></i> <?php echo app('translator')->get('DeActive'); ?></span>
                                <?php elseif($item->status == -2): ?>
                                    <span class="badge badge-light">
                                        <i class="fa fa-circle text-danger danger font-12"></i> <?php echo app('translator')->get('Lost'); ?></span>
                                <?php elseif($item->status == 3): ?>
                                    <span class="badge badge-light">
                                        <i class="fa fa-circle text-danger danger font-12"></i> <?php echo app('translator')->get('Refunded'); ?></span>
                                <?php endif; ?>
                            </td>
                            <?php if(adminAccessRoute(config('role.manage_result.access.edit'))): ?>
                                <td data-label="<?php echo app('translator')->get('Action'); ?>" class="text-center">
                                    <button type="button" data-id="<?php echo e($item->id); ?>"
                                            data-route="<?php echo e(route('admin.makeWinner')); ?>" data-target="#makeWinner"
                                            data-toggle="modal"
                                            class="btn btn-sm btn-outline-primary makeWinner" <?php echo e(($gameQuestion->result == 1)?'disabled':''); ?>>
                                        <i class="fa fa-paper-plane"></i></button>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <div id="makeWinner" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="primary-header-modalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h4 class="modal-title" id="primary-header-modalLabel"><?php echo app('translator')->get('Make Winner'); ?>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo app('translator')->get('Are you want to make winner this?'); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    <form action="" method="post" class="winnerRoute">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('post'); ?>
                        <input type="hidden" name="optionId" value="" class="optionId">
                        <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('Yes'); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        'use script'
        $(document).ready(function () {

            $('.makeWinner').on('click', function () {
                var route = $(this).data('route');
                $('.optionId').val($(this).data('id'));
                $('.winnerRoute').attr('action', route)
            });
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/admin/result_history/optionList.blade.php ENDPATH**/ ?>