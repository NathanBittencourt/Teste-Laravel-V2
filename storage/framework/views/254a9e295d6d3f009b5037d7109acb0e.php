


<?php $__env->startSection('content'); ?>
    <h2 class="text-center">Cadastrar Nova Série</h2>
    
    
    <form class="form container" method="POST" action="<?php echo e(route('series.store')); ?>">
        
        <?php echo csrf_field(); ?>
        <label for="Nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label for="Nome">Ano:</label>
        <input type="number" name="ano" id="ano" required>
        <label for="Nome">Estúdio:</label>
        <input type="text" name="estudio" id="estudio" required>
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\FASM\5 Periodo\Frameworks II\Trabalho Apresentação de Frameworks\Projeto Laravel\teste\resources\views/series/destroy.blade.php ENDPATH**/ ?>