<?php $__env->startSection('title',__($title)); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-header card card-primary m-0 m-md-4 my-4 m-md-0 p-5 shadow">
        <form action="<?php echo e(route('admin.ticket')); ?>" method="get">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="text" name="ticket" value="<?php echo e(@request()->ticket); ?>" class="form-control"
                               placeholder="<?php echo app('translator')->get('Ticket No'); ?>">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" name="email" value="<?php echo e(@request()->email); ?>"
                               class="form-control"
                               placeholder="<?php echo app('translator')->get('Email'); ?>">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <select name="status" class="form-control">
                            <option value=""><?php echo app('translator')->get('All Ticket'); ?></option>
                            <option value="0"
                                    <?php if(@request()->status == '0'): ?> selected <?php endif; ?>><?php echo app('translator')->get('Open Ticket'); ?></option>
                            <option value="1"
                                    <?php if(@request()->status == '1'): ?> selected <?php endif; ?>><?php echo app('translator')->get('Answered Ticket'); ?></option>
                            <option value="2"
                                    <?php if(@request()->status == '2'): ?> selected <?php endif; ?>><?php echo app('translator')->get('Replied Ticket'); ?></option>
                            <option value="3"
                                    <?php if(@request()->status == '3'): ?> selected <?php endif; ?>><?php echo app('translator')->get('Closed Ticket'); ?></option>
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
                        <th scope="col"><?php echo app('translator')->get('Subject'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('User'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('Status'); ?></th>
                        <th scope="col"><?php echo app('translator')->get('Last Reply'); ?></th>
                        <?php if(adminAccessRoute(config('role.support_ticket.access.view'))): ?>
                        <th scope="col"><?php echo app('translator')->get('Action'); ?></th>
                        <?php endif; ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td data-label="Subject">
                                <a href="<?php echo e(route('admin.ticket.view', $ticket->id)); ?>" class="font-weight-bold"
                                   target="_blank">
                                    [<?php echo e(trans('Ticket#').$ticket->ticket); ?>] <?php echo e($ticket->subject); ?> </a>
                            </td>

                            <td data-label="Submitted By">
                                <?php if($ticket->user_id): ?>
                                    <a href="<?php echo e(route('admin.user-edit', $ticket->user_id)); ?>"
                                       target="_blank"> <?php echo e($ticket->user->fullname); ?></a>
                                <?php else: ?>
                                    <p class="font-weight-bold"> <?php echo e($ticket->name); ?></p>
                                <?php endif; ?>
                            </td>
                            <td data-label="<?php echo app('translator')->get('Status'); ?>">
                                <?php if($ticket->status == 0): ?>
                                    <span class="badge badge-pill badge-success"><?php echo app('translator')->get('Open'); ?></span>
                                <?php elseif($ticket->status == 1): ?>
                                    <span class="badge badge-pill badge-primary"><?php echo app('translator')->get('Answered'); ?></span>
                                <?php elseif($ticket->status == 2): ?>
                                    <span
                                        class="badge badge-pill badge-warning"><?php echo app('translator')->get('Customer Reply'); ?></span>
                                <?php elseif($ticket->status == 3): ?>
                                    <span class="badge badge-pill badge-dark"><?php echo app('translator')->get('Closed'); ?></span>
                                <?php endif; ?>
                            </td>

                            <td data-label="<?php echo app('translator')->get('Last Reply'); ?>">
                                <?php echo e(diffForHumans($ticket->last_reply)); ?>

                            </td>

                            <?php if(adminAccessRoute(config('role.support_ticket.access.view'))): ?>
                            <td data-label="Action">
                                <a href="<?php echo e(route('admin.ticket.view', $ticket->id)); ?>"
                                   class="btn btn-sm btn-outline-info"
                                   data-toggle="tooltip" title="" data-original-title="Details">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="100%">
                                <p class="text-dark"><?php echo app('translator')->get($empty_message); ?></p>
                            </td>
                        </tr>

                    <?php endif; ?>
                    </tbody>
                </table>
                <?php echo e($tickets->appends($_GET)->links('partials.pagination')); ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('js'); ?>
    <script>
        $(document).ready(function () {
            $('select[name=status]').select2({
                selectOnClose: true
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/admin/ticket/index.blade.php ENDPATH**/ ?>