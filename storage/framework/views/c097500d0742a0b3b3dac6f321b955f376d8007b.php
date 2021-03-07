<?php $__env->startSection('navbar'); ?>

      <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand text-uppercase" href="">Mally App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link btn btn-warning" href="<?php echo e(route('system')); ?>" >System</a>
        </li>
        <?php echo $__env->yieldContent('MoreLinks'); ?>
      </ul>
      
    </div>
  </div>
</nav>

<?php echo $__env->yieldSection(); ?><?php /**PATH C:\xampp\htdocs\CrcsMally\resources\views/inc/navbar.blade.php ENDPATH**/ ?>