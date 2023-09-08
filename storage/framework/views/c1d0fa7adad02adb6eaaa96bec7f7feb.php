


<?php $__env->startSection('content'); ?>
    
    <?php if(isset($msg)): ?>
    <h3 style="color: red" class="text-center">Série não encontrada!</h3>
    <?php else: ?>
    
    <h2 class="text-center">Mostrando dados da série</h2>

    <div class="container text-center" style="max-width: 700px; padding: 50px;">
        <h4><strong>Nome:</strong> <?php echo e($serie->nome); ?> </h4>
        <h4><strong>Ano:</strong> <?php echo e($serie->ano); ?> </h4>
        <h4><strong>Estúdio:</strong> <?php echo e($serie->estudio); ?> </h4>
        <a href="<?php echo e(route('series.index')); ?>" class="btn btn-dark">Voltar</a>
    </div>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\FASM\5 Periodo\Frameworks II\Trabalho Apresentação de Frameworks\Projeto Laravel\teste\resources\views/series/show.blade.php ENDPATH**/ ?>