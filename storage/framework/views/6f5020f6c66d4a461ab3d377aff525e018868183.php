<?php $__env->startSection('title',__($page_title)); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-sm-12">
            <div class="card ">
                <div class="card-header  d-flex flex-wrap justify-content-between align-items-center">
                    <h5 class="card-title "><?php echo app('translator')->get($page_title); ?></h5>
                    <a href="<?php echo e(route('user.ticket.create')); ?>" class="btn-custom line-h22"> <i
                            class="fa fa-plus-circle"></i> <?php echo app('translator')->get('Create Ticket'); ?></a>
                </div>
                <div class="card-body">

                    <div class="table-parent table-responsive m-0">
                        <table class="table table-striped" id="service-table">
                            <thead>
                            <tr>
                                <th scope="col"><?php echo app('translator')->get('Subject'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Status'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Last Reply'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td data-label="<?php echo app('translator')->get('Subject'); ?>">
                                        <p> [<?php echo e(trans('Ticket#').$ticket->ticket); ?>

                                            ] <?php echo e($ticket->subject); ?>

                                        </p>
                                    </td>
                                    <td data-label="<?php echo app('translator')->get('Status'); ?>">
                                        <?php if($ticket->status == 0): ?>
                                            <span
                                                class="badge bg-success"><?php echo app('translator')->get('Open'); ?></span>
                                        <?php elseif($ticket->status == 1): ?>
                                            <span
                                                class="badge bg-primary"><?php echo app('translator')->get('Answered'); ?></span>
                                        <?php elseif($ticket->status == 2): ?>
                                            <span
                                                class="badge bg-warning"><?php echo app('translator')->get('Replied'); ?></span>
                                        <?php elseif($ticket->status == 3): ?>
                                            <span class="badge bg-dark"><?php echo app('translator')->get('Closed'); ?></span>
                                        <?php endif; ?>
                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Last Reply'); ?>">
                                        <?php echo e(diffForHumans($ticket->last_reply)); ?>

                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Action'); ?>">
                                        <a href="<?php echo e(route('user.ticket.view', $ticket->ticket)); ?>"

                                           data-toggle="tooltip" title="" data-original-title="Details">
                                            <button class="action-btn"><i class="fal fa-pencil" aria-hidden="true"></i></button>
                                        </a>
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
                    <?php echo e($tickets->appends($_GET)->links($theme.'partials.pagination')); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/themes/betting/user/support/index.blade.php ENDPATH**/ ?>