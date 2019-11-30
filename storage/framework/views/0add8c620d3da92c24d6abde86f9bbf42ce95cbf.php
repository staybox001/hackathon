<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Editar Motorista</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action=<?php echo e(route('motorista.update', $motorista->id)); ?>>
                <?php echo method_field('PUT'); ?>}
                <?php echo csrf_field(); ?>
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" value="<?php echo e($motorista->nome); ?>" required>
                        </div>
                        <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input name="cpf" type="text" class="form-control" id="cpf" value="<?php echo e($motorista->cpf); ?>" required>
                        </div>
                  </div>
                  <div class="col-sm-6">

                        <div class="form-group">
                        <label for="senha">Senha</label>
                        <input name="senha" type="password" class="form-control" id="senha"     >
                        </div>
                  </div>
                  <div class="form-group">
                        <label for="image">Foto</label>
                        <input type="file" id="image" name="img_motorista">
                  </div>
              </div>
                        
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/hackathon/resources/views/motorista/editar.blade.php ENDPATH**/ ?>