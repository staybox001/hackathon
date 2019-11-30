<?php $__env->startSection('content'); ?>


<div class="container">
        <div class="row">
            <div class="col-sm-12">
        <div class="card card-primary">
                <div class="card-header">
                   <div class="row">    
                        <div class="col-sm-9">
                            <h5 class="card-title m-0">Produto</h5>
                        </div>
                        <div class="col-sm-3">
                            <a class="btn-sm btn-warning" href="<?php echo e(route('produto.edit', $produto->id)); ?>">Editar</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               
                <div class="card-body">
                   <div class="row">
                        <div class="col-sm-4">


                            <img class="img-fluid" src="<?php echo e(url('storage/'.$produto->imagem)); ?>" alt="Photo">


                        </div>
                    
                        <div class="col-sm-8">
                            <h6 class="card-title">Nome: <?php echo e($produto->nome); ?></h6>
                            <br /><br />
                            <p class="card-text">Categoria: <?php echo e($categoria->nome); ?></p>
                    
                           <p class="card-text">Preço: <?php echo e($produto->valor); ?> </p>

                           <p class="card-text">Peso: <?php echo e($produto->peso); ?> </p>

                          <br /><br />
                        </div>
                    
            
                    </div>
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer">
                   
                </div>
               
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lenon/Downloads/hackathon/resources/views/produto/produtoshow.blade.php ENDPATH**/ ?>