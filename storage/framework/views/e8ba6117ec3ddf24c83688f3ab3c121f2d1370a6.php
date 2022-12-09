<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo e($basic->site_title); ?></title>
</head>

<body>
<form action="<?php echo e($data->url); ?>" method="<?php echo e($data->method); ?>" id="auto_submit">
    <?php $__currentLoopData = $data->val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input type="hidden" name="<?php echo e($k); ?>" value="<?php echo e($v); ?>"/>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</form>
<script>
    document.getElementById("auto_submit").submit();
</script>
</body>

</html>

<?php /**PATH C:\xampp\htdocs\c\resources\views/themes/betting/user/payment/redirect.blade.php ENDPATH**/ ?>