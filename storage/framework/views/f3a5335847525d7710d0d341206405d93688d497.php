<?php $__env->startSection('title',trans($title)); ?>
<?php $__env->startSection('content'); ?>

    <div class="row justify-content-between ">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <h5 class="title text-start m-0"><?php echo app('translator')->get('Referral link'); ?></h5>
                </div>
                <div class="card-body">
                    <p>
                        <?php echo app('translator')->get('Automatically top up your account balance by sharing your referral link, Earn a percentage of whatever plan your referred user buys.'); ?></p>
                    <div>
                        <form>
                            <div class="form-group">
                                <div class="input-group input-box">
                                    <input type="text"
                                           value="<?php echo e(route('register.sponsor',[Auth::user()->username])); ?>"
                                           class="form-control" id="sponsorURL" readonly="">
                                    <div class="input-group-append">
                                            <span class="input-group-text form-control copytext" id="copyBoard"
                                                  onclick="copyFunction()">
                                                    <i class="fa fa-copy"></i>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <?php if(0 < count($referrals)): ?>
                <div class="card ">
                    <div class="card-header">
                        <h5 class="title text-start m-0"><?php echo app('translator')->get('Referral Members'); ?></h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-start flex-column flex-wrap" id="ref-label">
                            <div class="nav w-sm-100 nav-pills mx-2 d-flex flex-wrap" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                <?php $__currentLoopData = $referrals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $referral): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class=" nav-link <?php if($key == '1'): ?>   active  <?php endif; ?> "
                                       id="v-pills-<?php echo e($key); ?>-tab" href="javascript:void(0)" data-bs-toggle="pill"
                                       data-bs-target="#v-pills-<?php echo e($key); ?>" role="tab"
                                       aria-controls="v-pills-<?php echo e($key); ?>"
                                       aria-selected="true"><?php echo app('translator')->get('Level'); ?> <?php echo e($key); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="tab-content w-sm-100" id="v-pills-tabContent">
                                <?php $__currentLoopData = $referrals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $referral): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if($key == '1'): ?> show active  <?php endif; ?> "
                                         id="v-pills-<?php echo e($key); ?>" role="tabpanel"
                                         aria-labelledby="v-pills-<?php echo e($key); ?>-tab">
                                        <?php if( 0 < count($referral)): ?>
                                            <div class="table-parent table-responsive m-0 mt-4">
                                                <table class="table table-striped service-table" >
                                                    <thead>
                                                    <tr>
                                                        <th scope="col"><?php echo app('translator')->get('Username'); ?></th>
                                                        <th scope="col"><?php echo app('translator')->get('Email'); ?></th>
                                                        <th scope="col"><?php echo app('translator')->get('Mobile'); ?></th>
                                                        <th scope="col"><?php echo app('translator')->get('Joined At'); ?></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $__currentLoopData = $referral; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>

                                                            <td data-label="<?php echo app('translator')->get('Username'); ?>">
                                                                <?php echo app('translator')->get($user->username); ?>
                                                            </td>
                                                            <td data-label="<?php echo app('translator')->get('Email'); ?>"
                                                                class=""><?php echo e($user->email); ?></td>
                                                            <td data-label="<?php echo app('translator')->get('Mobile'); ?>">
                                                                <?php echo e($user->phone); ?>

                                                            </td>
                                                            <td data-label="<?php echo app('translator')->get('Joined At'); ?>">
                                                                <?php echo e(dateTime($user->created_at)); ?>

                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script>
        "use strict";

        function copyFunction() {
            var copyText = document.getElementById("sponsorURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            Notiflix.Notify.Success(`Copied: ${copyText.value}`);
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\c\resources\views/themes/betting/user/referral.blade.php ENDPATH**/ ?>