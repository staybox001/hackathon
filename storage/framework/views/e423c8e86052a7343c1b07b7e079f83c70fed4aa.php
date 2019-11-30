<?php $__env->startSection('content'); ?>


<div class="container">
        <div class="row">
            <div class="col-sm-6">
        <div class="card card-primary">
                <div class="card-header">
                   <div class="row">    
                        <div class="col-sm-9">
                            <h5 class="card-title m-0">Cliente</h5>
                        </div>
                        <div class="col-sm-3">
                            <a class="btn-sm btn-warning" href="<?php echo e(route('cliente.edit', $cliente->id)); ?>">Editar</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               
                <div class="card-body">
                   
                <h6 class="card-title">Nome: <?php echo e($cliente->nome); ?></h6>
                <br /><br />
                <p class="card-text">Endereço: <?php echo e($cliente->endereco); ?></p>
            
                <h6 class="card-title">Cidade: <?php echo e($cliente->cidade); ?> - <?php echo e($cliente->estado); ?></h6>
                <br /><br />
            
            
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer">
                   
                </div>
               
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/hackathon/resources/views/cliente/clienteshow.blade.php ENDPATH**/ ?>