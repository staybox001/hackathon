<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Editar Cliente</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action=<?php echo e(route('cliente.update', $cliente->id)); ?>>
                <?php echo method_field('PUT'); ?>}
                <?php echo csrf_field(); ?>
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" value="<?php echo e($cliente->nome); ?>">
                        </div>
                        <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input name="endereco" type="text" class="form-control" id="endereco" value="<?php echo e($cliente->endereco); ?>">
                        </div>
                  </div>
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input name="cidade" type="text" class="form-control" id="cidade" value="<?php echo e($cliente->cidade); ?>">
                        </div>
                        <div class="form-group">
                        <label for="estado">Estado</label>
                        <input name="estado" type="text" class="form-control" id="estado" value="<?php echo e($cliente->estado); ?>">
                        </div>
                  </div>
              </div>
                        
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/hackathon/resources/views/cliente/edit.blade.php ENDPATH**/ ?>