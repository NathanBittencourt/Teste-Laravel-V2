


<?php $__env->startSection('content'); ?>
<h2 class="text-center">Séries Cadastradas</h2>

<?php if(!isset($series)): ?>
<h3 style="color: red">Nenhum Registro Encontrado!</h3>

<?php else: ?>
<table id="listaProduto" class="table table-bordered table-condensed table-striped table-sm border-black" style="width: 100% !important;">
    <thead>
        <tr>
            <th class="text-center">Nome</th>
            <th class="text-center">Ano</th>
            <th class="text-center">Estúdio</th>
            <th colspan="3" class="text-center">Opções</th>
        </tr>
    </thead>
    <tbody>
        
        <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="text-center"><?php echo e($s->nome); ?> </td>
            <td class="text-center"> <?php echo e($s->ano); ?> </td>
            <td class="text-center"> <?php echo e($s->estudio); ?> </td>
            
            <td class="text-center"><a href="<?php echo e(route('series.show', $s->id)); ?>" class="btn btn-primary">Exibir</a></td>
            <td class="text-center"><a href="<?php echo e(route('series.edit', $s->id)); ?>" class="btn btn-success">Editar</a></td>
            <td class="text-center">
            <button form="delete-form-<?php echo e($s->id); ?>" type="submit" value="Excluir" class="btn btn-danger">Excluir</button>
            
            <form method="POST" class="form" id="delete-form-<?php echo e($s->id); ?>" action="<?php echo e(route('series.destroy', $s->id)); ?>">
                <?php echo csrf_field(); ?>
                
                <?php echo method_field('DELETE'); ?>
            </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfoot>
        <tr>
            
            <th colspan="6" class="text-black text-center">Séries Cadastradas: <?php echo e($series->count()); ?></th>
        </tr>
    </tfoot>
</table>

<?php endif; ?>
<?php if(isset($msg)): ?>
<script>
    alert("<?php echo e($msg); ?>");
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\FASM\5 Periodo\Frameworks II\Trabalho Apresentação de Frameworks\Projeto Laravel\teste\resources\views/series/index.blade.php ENDPATH**/ ?>