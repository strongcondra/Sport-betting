<?php $__env->startSection('title',trans(ucfirst(kebab2Title($content)))); ?>

<?php $__env->startSection('content'); ?>
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">


        <div class="card card-primary  my-4 ">
            <div class="card-body">
                <div class="media align-items-center justify-content-between mb-3">
                    <h4 class="card-title"><?php echo app('translator')->get(ucfirst(kebab2Title(@$content))); ?></h4>
                    <?php if(adminAccessRoute(config('role.theme_settings.access.add'))): ?>
                        <a href="<?php echo e(route('admin.content.create',@$content)); ?>"
                           class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i> <?php echo app('translator')->get('Add New'); ?></a>
                    <?php endif; ?>

                </div>


                <div class="table-responsive">
                    <table class="categories-show-table table table-hover table-striped table-bordered">
                        <thead class="thead-primary">
                        <tr>
                            <th><?php echo app('translator')->get('SL'); ?></th>
                            <th><?php echo app('translator')->get(ucfirst(array_key_first(config('contents.'.@$content)['field_name']))); ?></th>
                            <?php if(adminAccessRoute(config('role.theme_settings.access.edit'))): ?>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            <?php endif; ?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = @$contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$key); ?></td>
                                <td>
                                    <?php echo optional(optional(@$value->contentDetails[0])->description)->{array_key_first(config('contents.' . $content)['field_name'])} ?? 'N/A';?>
                                </td>
                                <td>

                                    <?php if(adminAccessRoute(config('role.theme_settings.access.edit'))): ?>
                                        <a href="<?php echo e(route('admin.content.show',[$value,$value->name])); ?>"
                                           class="btn btn-primary btn-sm"><i
                                                class="fas fa-edit"></i> <?php echo app('translator')->get('Edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if(adminAccessRoute(config('role.theme_settings.access.delete'))): ?>
                                        <a href="javascript:void(0)"
                                           data-route="<?php echo e(route('admin.content.delete',$value->id)); ?>"
                                           data-toggle="modal"
                                           data-target="#delete-modal"
                                           class="btn btn-danger btn-sm notiflix-confirm"><i
                                                class="fas fa-trash"></i> <?php echo app('translator')->get('Delete'); ?></a>

                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!---Container Fluid-->


    <!-- Primary Header Modal -->
    <div id="delete-modal" class="modal fade" tabindex="-1" role="dialog"
         aria-labelledby="primary-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h4 class="modal-title" id="primary-header-modalLabel"><?php echo app('translator')->get('Delete Confirmation'); ?>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo app('translator')->get('Are you sure to delete this?'); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light"
                            data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    <form action="" method="post" class="deleteRoute">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('Yes'); ?></button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        'use strict'
        $(document).ready(function () {
            $('.notiflix-confirm').on('click', function () {
                var route = $(this).data('route');
                $('.deleteRoute').attr('action', route)
            })
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/admin/content/index.blade.php ENDPATH**/ ?>