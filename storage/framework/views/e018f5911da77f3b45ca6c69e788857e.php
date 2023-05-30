<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/myfile.css">
</head>

<body>

    <nav>
        <ul>
            <li <?php if(Request::is('/')): ?> class="wgb" <?php endif; ?>><a href="/">Home</a> </li>
            <li <?php if(Request::is('news')): ?> class="wgb" <?php endif; ?>><a href="/news">News</a> </li>
            <li <?php if(Request::is('fav')): ?> class="wgb" <?php endif; ?>><a href="/fav">Fav</a> </li>
        </ul>
    </nav>
    <div class="mid">
        <?php echo $__env->yieldContent('content'); ?>
    </div>



</body>

</html><?php /**PATH C:\Users\Administrator\Desktop\sites\example-app\resources\views/layout.blade.php ENDPATH**/ ?>