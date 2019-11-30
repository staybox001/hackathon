<?php $__env->startSection('content'); ?>


<div class="container">
        <div class="row">
            <div class="col-sm-12">
        <div class="card card-primary">
                <div class="card-header">
                   <div class="row">    
                        <div class="col-sm-11">
                            <h5 class="card-title m-0">Categoria</h5>
                        </div>
                        <div class="col-sm-1">
                            <a class="btn-sm btn-warning" href="<?php echo e(route('categoria.edit', $categoria->id)); ?>">Editar</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               
                <div class="card-body">
                   
                <h6 class="card-title">Nome: <?php echo e($categoria->nome); ?></h6>
                <br /><br />
                <p class="card-text">Descrição: <?php echo e($categoria->descricao); ?></p>
            
               
            
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer">
                   
                </div>
               
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/hackathon/resources/views/categoria/categoriashow.blade.php ENDPATH**/ ?>