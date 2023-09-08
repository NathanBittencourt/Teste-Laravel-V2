<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?php echo e(env('APP_NAME')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <a href="/series" class="h2 text-white">Laravel - CRUD</a>
        <div class="container justify-content-center">
            <nav>
                
                <li><a href="/series" class="text-white">Início</a></li>
                <li><a href="/series/create" class="text-white">Cadastro de Séries</a></li>
            </nav>
    </header>
    <div class="container justify-content-center">
        <div class="content">
            
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\user\Desktop\FASM\5 Periodo\Frameworks II\Trabalho Apresentação de Frameworks\Projeto Laravel\teste\resources\views/base.blade.php ENDPATH**/ ?>