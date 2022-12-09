<?php $__env->startSection('title',trans($title)); ?>
<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card secbg form-block p-0 br-4">
                <div class="card-body">
                    <form action="<?php echo e(route('user.payout.history.search')); ?>" method="get">
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
                                    <select name="status" class="form-control">
                                        <option value=""><?php echo app('translator')->get('All Payment'); ?></option>
                                        <option value="1"
                                                <?php if(@request()->status == '1'): ?> selected <?php endif; ?>><?php echo app('translator')->get('Pending Payment'); ?></option>
                                        <option value="2"
                                                <?php if(@request()->status == '2'): ?> selected <?php endif; ?>><?php echo app('translator')->get('Complete Payment'); ?></option>
                                        <option value="3"
                                                <?php if(@request()->status == '3'): ?> selected <?php endif; ?>><?php echo app('translator')->get('Rejected Payment'); ?></option>
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
            <div class="card secbg ">
                <div class="card-body ">

                    <div class="table-parent table-responsive m-0">
                        <table class="table table-striped " id="service-table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col"><?php echo app('translator')->get('Trx ID'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Gateway'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Amount'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Charge'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Status'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Time'); ?></th>
                                <th scope="col"><?php echo app('translator')->get('Detail'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $payoutLog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td data-label="#<?php echo app('translator')->get('Trx ID'); ?>"><?php echo e($item->trx_id); ?></td>
                                    <td data-label="<?php echo app('translator')->get('Gateway'); ?>" class="d-initial">
                                        <strong ><?php echo app('translator')->get(optional($item->method)->name); ?></strong>
                                    </td>
                                    <td data-label="<?php echo app('translator')->get('Amount'); ?>">
                                        <strong><?php echo e(getAmount($item->amount)); ?> <?php echo app('translator')->get($basic->currency); ?></strong>
                                    </td>
                                    <td data-label="<?php echo app('translator')->get('Charge'); ?>">
                                        <strong><?php echo e(getAmount($item->charge)); ?> <?php echo app('translator')->get($basic->currency); ?></strong>
                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Status'); ?>">
                                        <?php if($item->status == 1): ?>
                                            <span class="badge bg-warning"><?php echo app('translator')->get('Pending'); ?></span>
                                        <?php elseif($item->status == 2): ?>
                                            <span class="badge bg-success"><?php echo app('translator')->get('Complete'); ?></span>
                                        <?php elseif($item->status == 3): ?>
                                            <span class="badge bg-danger"><?php echo app('translator')->get('Cancel'); ?></span>
                                        <?php endif; ?>
                                    </td>

                                    <td data-label="<?php echo app('translator')->get('Time'); ?>">
                                        <?php echo e(dateTime($item->created_at, 'd M Y h:i A')); ?>

                                    </td>
                                    <td data-label="<?php echo app('translator')->get('Detail'); ?>">
                                        <button type="button" class="action-btn infoButton "
                                                data-information="<?php echo e(json_encode($item->information)); ?>"
                                                data-feedback="<?php echo e($item->feedback); ?>"
                                                data-trx_id="<?php echo e($item->trx_id); ?>"><i
                                                class="fa fa-info-circle"></i></button>
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
                    <?php echo e($payoutLog->appends($_GET)->links($theme.'partials.pagination')); ?>

                </div>
            </div>
        </div>
    </div>

    <div id="infoModal" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content form-block">

                <div class="modal-header">
                    <h4 class="modal-title"><?php echo app('translator')->get('Details'); ?></h4>
                    <button type="button" class="btn-close closeModal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="payment-info">
                        <ul class="list-group ">
                            <li class="list-group-item bg-transparent"><?php echo app('translator')->get('Transactions'); ?> : <span class="trx"></span>
                            </li>
                            <li class="list-group-item bg-transparent"><?php echo app('translator')->get('Admin Feedback'); ?> : <span
                                    class="feedback"></span></li>
                        </ul>
                    </div>
                    <div class="payment-info">
                        <div class="payout-detail">

                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class=" btn-custom mb-2 me-3 closeModal" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

    <script>
        "use strict";

        $(document).ready(function () {
            $('.infoButton').on('click', function () {
                var infoModal = $('#infoModal');
                infoModal.find('.trx').text($(this).data('trx_id'));
                infoModal.find('.feedback').text($(this).data('feedback'));
                var list = [];
                var information = Object.entries($(this).data('information'));

                var ImgPath = "<?php echo e(asset(config('location.withdrawLog.path'))); ?>/";
                var result = ``;
                for (var i = 0; i < information.length; i++) {
                    if (information[i][1].type == 'file') {
                        result += `<li class="list-group-item bg-transparent">
                                            <span class="font-weight-bold "> ${information[i][0].replaceAll('_', " ")} </span> : <img class="w-100"src="${ImgPath}/${information[i][1].field_name}" alt="..." class="w-100">
                                        </li>`;
                    } else {
                        result += `<li class="list-group-item bg-transparent">
                                            <span class="font-weight-bold "> ${information[i][0].replaceAll('_', " ")} </span> : <span class="font-weight-bold ml-3">${information[i][1].field_name}</span>
                                        </li>`;
                    }
                }

                if (result) {
                    infoModal.find('.payout-detail').html(`<br><strong class="my-3"><?php echo app('translator')->get('Payment Information'); ?></strong>  ${result}`);
                } else {
                    infoModal.find('.payout-detail').html(`${result}`);
                }
                infoModal.modal('show');
            });


            $('.closeModal').on('click', function (e) {
                $("#infoModal").modal("hide");
            });
        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/themes/betting/user/payout/log.blade.php ENDPATH**/ ?>