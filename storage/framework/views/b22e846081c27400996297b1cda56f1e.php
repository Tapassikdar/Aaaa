<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php echo $__env->yieldContent('meta'); ?>

    <title>MODEL APPLICATION - Alluring Intros and Arrangements</title>

    <!-- Font Awesome Icons -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('favicon.jpeg')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <?php echo Html::style('/assets/backend/plugins/fontawesome-free/css/all.min.css'); ?>

    <?php echo Html::style('/assets/backend/plugins/toaster/css/toaster.min.css'); ?>

    <?php echo Html::style('/assets/backend/dist/css/adminlte.min.css'); ?>

    <?php echo Html::style('/assets/backend/dist/css/custom.css'); ?>

    <?php echo Html::style('/assets/backend/plugins/sweet-alert/css/sweetalert.min.css'); ?>

    <?php echo $__env->yieldContent('header-css'); ?>
    <style>
        .loader-screen {
            width: 100%;
            height: 100vh;
            position: fixed;
            display: flex;
            z-index: 999;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #ffffff;
            top: 0;
            left: 0;
        }
        .loader {
            width: 50px;
            aspect-ratio: 1;
            border-radius: 50%;
            border: 8px solid #514b82;
            left: 50%;
            top: 50vh;
            z-index: 999;
            animation:
                l20-1 0.8s infinite linear alternate,
                l20-2 1.6s infinite linear;
            }
            @keyframes l20-1{
            0%    {clip-path: polygon(50% 50%,0       0,  50%   0%,  50%    0%, 50%    0%, 50%    0%, 50%    0% )}
            12.5% {clip-path: polygon(50% 50%,0       0,  50%   0%,  100%   0%, 100%   0%, 100%   0%, 100%   0% )}
            25%   {clip-path: polygon(50% 50%,0       0,  50%   0%,  100%   0%, 100% 100%, 100% 100%, 100% 100% )}
            50%   {clip-path: polygon(50% 50%,0       0,  50%   0%,  100%   0%, 100% 100%, 50%  100%, 0%   100% )}
            62.5% {clip-path: polygon(50% 50%,100%    0, 100%   0%,  100%   0%, 100% 100%, 50%  100%, 0%   100% )}
            75%   {clip-path: polygon(50% 50%,100% 100%, 100% 100%,  100% 100%, 100% 100%, 50%  100%, 0%   100% )}
            100%  {clip-path: polygon(50% 50%,50%  100%,  50% 100%,   50% 100%,  50% 100%, 50%  100%, 0%   100% )}
            }
            @keyframes l20-2{
            0%    {transform:scaleY(1)  rotate(0deg)}
            49.99%{transform:scaleY(1)  rotate(135deg)}
            50%   {transform:scaleY(-1) rotate(0deg)}
            100%  {transform:scaleY(-1) rotate(-135deg)}
            }
    </style>
</head>

<body class="hold-transition" style="background-color: #e9ecef">
    <div class="loader-screen" style="display: none;">
        <div class="loader"></div>
        <div>
            <h1 style="text-align: center; font-size: 26px;">Please wait while we process your data</h1>
            <p style="text-align: center;">Do not refresh the page or navigate away <br>Thank you for your patience</p>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid my-lg-5">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!--/. container-fluid -->
    </section>

<!-- REQUIRED SCRIPTS -->
<?php echo Html::script('/assets/backend/plugins/jquery/jquery.min.js'); ?>

<?php echo Html::script('/assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>

<?php echo Html::script('/assets/backend/plugins/toaster/js/toaster.min.js'); ?>

<?php echo Html::script('/assets/backend/dist/js/adminlte.js'); ?>

<?php echo Html::script('/assets/backend/plugins/sweet-alert/js/sweetalert.min.js'); ?>

<?php echo Html::script('/assets/backend/plugins/jquery/jquery.validate.min.js'); ?>


<?php echo Toastr::message(); ?>


<?php echo $__env->yieldContent('footer-script'); ?>
</body>

</html>
<?php /**PATH /home/mytopten/model.alluringintros.eu/resources/views/layouts/app.blade.php ENDPATH**/ ?>