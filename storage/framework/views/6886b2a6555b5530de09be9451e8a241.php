


<?php $__env->startSection('content'); ?>
<h2 class="text-center">Atualizar uma Série</h2>

<div class="container text-center" style="max-width: 700px; padding: 50px;">
    <div class="row">
        <div class="col">
            <form action="<?php echo e(route('series.update', $serie->id)); ?>" method="POST" enctype="multipart/form-data" class="form container">
                
                <?php echo csrf_field(); ?>
                
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col-12 mb-3">
                        <input class="form-control border-dark" type="text" name="nome" id="nome" required value="<?php echo e($serie->nome); ?>" placeholder="Nome">
                        <input class="form-control border-dark" type="number" name="ano" id="ano" required value="<?php echo e($serie->ano); ?>" placeholder="Ano">
                        <input class="form-control border-dark" type="text" name="estudio" id="estudio" required value="<?php echo e($serie->estudio); ?>" placeholder="Estúdio">
                        </form>
                        
                        <button class="btn btn-success" type="submit" value="Salvar">Salvar</button>
                        <button class="btn btn-danger" form="delete-form" type="submit" value="Excluir">Excluir</button>
                        <a href="<?php echo e(route('series.index')); ?>" class="btn btn-dark">Voltar</a>
                        
                        <form method="POST" class="form" id="delete-form" action="<?php echo e(route('series.destroy', $serie->id)); ?>">
                            <?php echo csrf_field(); ?>
                            
                            <?php echo method_field('DELETE'); ?>
                        </form>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\FASM\5 Periodo\Frameworks II\Trabalho Apresentação de Frameworks\Projeto Laravel\teste\resources\views/series/edit.blade.php ENDPATH**/ ?>