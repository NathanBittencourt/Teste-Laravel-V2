


<?php $__env->startSection('content'); ?>
    <h2 class="text-center">Cadastrar Nova Série</h2>
    

    <div class="container text-center" style="max-width: 700px; padding: 50px;">
        <div class="row">
            <div class="col">
                <form action="<?php echo e(route('series.store')); ?>" method="POST" enctype="multipart/form-data" class="form container">
                
                <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <input class="form-control border-dark" name="nome" id="nome" type="text" placeholder="Nome">
                            <input class="form-control border-dark" name="ano" id="ano" type="number" placeholder="Ano">
                            <input class="form-control border-dark" name="estudio" id="estudio" type="text" placeholder="Estúdio">
                            <button class="btn btn-primary" type="submit" value="Salvar">Salvar</button>
                            <button class="btn btn-success" type="reset" value="Limpar">Limpar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\FASM\5 Periodo\Frameworks II\Trabalho Apresentação de Frameworks\Projeto Laravel\teste\resources\views/series/create.blade.php ENDPATH**/ ?>