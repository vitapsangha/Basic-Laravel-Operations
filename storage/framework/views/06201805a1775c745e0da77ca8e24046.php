<h1>Details</h1>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Contact</td>
        <td>Operations</td>
</tr>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($item['id']); ?></td>
    <td><?php echo e($item['name']); ?></td>
    <td><?php echo e($item['contact']); ?></td>
    <td>
    <a href=<?php echo e('delete/'.$item['$id']); ?>>Delete</a>
    <a href=<?php echo e('edit/'.$item['$id']); ?>>Update</a>
</td>

</tr>

<?php /**PATH C:\projectlaravel\resources\views/list.blade.php ENDPATH**/ ?>