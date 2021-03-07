<!doctype html>
        <html lang="en">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="keywords" content="">
            <link rel="shortcut icon" href="" type="image/x-icon">
            <!--CSS Files-->
            <link href="<?php echo e(asset('css/fontawsome/all.min.css')); ?>" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
            <title> <?php echo $__env->yieldContent('title', 'Mally App'); ?> </title>
          </head>
          <body>


<?php echo $__env->make('inc/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<section class="appContnt py-5">

    <div class="container">

        <?php echo $__env->yieldContent('content'); ?>
    
    </div>
    
</section>


<?php echo $__env->make('inc/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/fontawsome/all.min.js')); ?>"></script>

    <?php echo $__env->yieldContent('additionJS'); ?>

  </body>
</html><?php /**PATH C:\xampp\htdocs\CrcsMally\resources\views/inc/layout.blade.php ENDPATH**/ ?>