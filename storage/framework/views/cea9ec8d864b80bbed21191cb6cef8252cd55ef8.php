

<?php $__env->startSection('title','Mally App || Courses'); ?>

<?php $__env->startSection('MoreLinks'); ?>
    <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#sign" type="button" tabindex="-1" aria-disabled="true">Mohamed</a>
        </li>
<?php $__env->stopSection(); ?>





<?php $__env->startSection('content'); ?>
<div class="main">
<div class="row">
<div class="page-navigate pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('system')); ?> ">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Branches Settings</li>
        </ol>
    </nav>
</div>

<div class="page-title">
    <p class="lead fw-bold">
        Courses Settings
    </p>
</div>

<div class="mb-5"><a href="<?php echo e(route('course.create')); ?>" class="btn btn-danger">Add new course</a></div>

            <form accept-charset="utf8" enctype="multipart/form-data" method="POST" action="#" class="mb-5">
                <div class="form-floating mb-3">
                    <input type="number" required class="form-control" id="floatingInput" placeholder="enter course code">
                    <label for="floatingInput">branch Code</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" required class="form-control" id="floatingInput" placeholder="enter course name">
                    <label for="floatingInput">Organization name</label>
                </div>

                <button type="button" role="button" class="btn btn-primary" value="Search Data" id="searchData">Search</button>
                </form>
</div>
</div>
                <table class="table">
                    <thead>
                        <tr>
                            
                            <th scope="col">Code</th>
                            <th scope="col">course Name</th>
                            <th scope="col">Procedure</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <?php $counter=1; ?>  
                        

                       <?php if(!$cources): ?>
                       <div class="branch-data p-5">
                        <p class="lead">
                            there are no data
                        </p>
                    </div>
                       <?php else: ?>
                                <?php $__currentLoopData = $cources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($counter); ?></th>
                                    <th><?php echo e($cource->title); ?></th>
                                    <th><a type="button" class="btn btn-danger" href="<?php echo e(route('course.delete',$cource->id)); ?>" ><i class="far fa-trash-alt"></i></a> <a type="button" class="btn btn-success" href="<?php echo e(route('course.edit',$cource->id)); ?>"><i class="far fa-edit"></i></a></th>
                                </tr>
                                <?php $counter++;?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       <?php endif; ?>
                    </tbody>
                </table>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('inc/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CrcsMally\resources\views/cources/index.blade.php ENDPATH**/ ?>