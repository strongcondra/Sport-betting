<div class="card card-primary shadow">
    <div class="card-header bg-dark">
        <h5 class="text-white"><?php echo app('translator')->get('Jump To'); ?></h5>
    </div>
    <div class="card-body">
        <ul class="nav nav-pills flex-column">
            <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item">
					<a href="<?php echo e(getRoute($setting['route'], $setting['route_segment'] ?? null)); ?>" class="nav-link <?php echo e(isMenuActive($setting['route'])); ?>">
						<i class="<?php echo e($setting['icon']); ?> <?php echo e(isMenuActive($setting['route'],2) ? 'text-white' : 'text-primary'); ?> pr-2"></i>
						<?php echo e(__(getTitle($key.' '.$suffix))); ?>

					</a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\c\resources\views/admin/plugin_panel/components/sidebar.blade.php ENDPATH**/ ?>