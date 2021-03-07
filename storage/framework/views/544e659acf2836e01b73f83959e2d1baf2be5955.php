<?php $__env->startSection('content'); ?>
    <form method="post" enctype="multipart/form-data" action="#" class="py-5">
  <div class="mb-3">
    <label for="exampleInputUser" class="form-label">Username</label>
    <input type="text" required   name="user" class="form-control" id="exampleInputUser">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password"  required name="pass" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">log in</button>
</form>
<br>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CrcsMally\resources\views/welcome.blade.php ENDPATH**/ ?>