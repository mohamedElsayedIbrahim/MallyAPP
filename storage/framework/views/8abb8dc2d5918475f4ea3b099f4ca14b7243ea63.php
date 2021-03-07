

<?php $__env->startSection('title','Mally App || New Courses'); ?>

<?php $__env->startSection('MoreLinks'); ?>
    <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#sign" type="button" tabindex="-1" aria-disabled="true">Mohamed</a>
        </li>
<?php $__env->stopSection(); ?>





<?php $__env->startSection('content'); ?>

<div class="row">
<div class="page-navigate pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('system')); ?> ">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('course.index')); ?> ">Courses</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create new course</li>
        </ol>
    </nav>
</div>

<div class="page-title">
    <p class="lead fw-bold">
        Courses Settings
    </p>
</div>

<?php echo $__env->make('inc.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form accept-charset="utf8" enctype="multipart/form-data" method="POST" action="<?php echo e(route('course.store')); ?>" class="mb-5">
                <?php echo csrf_field(); ?>
                <div class="form-floating mb-3">
                    <input type="text" name="CourseName" class="form-control" id="floatingInputName" placeholder="enter course name" value="<?php echo e(old('CourseName')); ?>">
                    <label for="floatingInput">course name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" name="CoursePrice" class="form-control" id="floatingInputPrice" placeholder="enter course price" value="<?php echo e(old('CoursePrice')); ?>">
                    <label for="floatingInput">course price</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" value="<?php echo e(old('CourseDiscount')); ?>" name="CourseDiscount" class="form-control" id="floatingInputOffer" placeholder="enter course dicscount">
                    <label for="floatingInput">course discount</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea rows="12" cols="5" name="CourseDesc" class="form-control" id="floatingInputDesc" placeholder="enter course Description"><?php echo e(old('CourseDesc')); ?></textarea>
                    <label for="floatingInput">course Description</label>
                </div>

                <div class="mb-3">
                    <input type="file" name="CourseImage" class="form-control" title="course logo">
                </div>

                <button type="submit" role="button" class="btn btn-primary" value="Save data" id="save-data">Save data</button>
                </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CrcsMally\resources\views//cources/create.blade.php ENDPATH**/ ?>