<?php $__env->startSection('content'); ?>


<div class="container">
        <div class="row">
            <div class="col-sm-12">
        <div class="card card-primary">
                <div class="card-header">
                   <div class="row">    
                        <div class="col-sm-9">
                            <h5 class="card-title m-0">Motorista</h5>
                        </div>
                        <div class="col-sm-3">
                            <a class="btn-sm btn-warning" href="<?php echo e(route('motorista.edit', $motorista->id)); ?>">Editar</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               
                <div class="card-body">
                    <div class="row">

                        <div class="col-sm-4">
                                <img src="..." class="rounded float-left" alt="...">
                        </div>

                        <div class="col-sm-8">
                            <h6 class="card-title">Nome: <?php echo e($motorista->nome); ?></h6>
                            <br /><br />
                            <p class="card-text">CPF: <?php echo e($motorista->cpf); ?></p>
                        
                            <h6 class="card-title">Data de Nascimento: <?php echo e($motorista->data_nascimento); ?></h6>
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
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/hackathon/resources/views/motorista/motoristashow.blade.php ENDPATH**/ ?>