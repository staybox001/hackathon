<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Cadastrar Motorista</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action=<?php echo e(route('motorista.store')); ?>>
                <?php echo csrf_field(); ?>
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome do Motorista">
                        </div>
                        <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input name="cpf" type="text" class="form-control" id="cpf" placeholder="CPF do Motorista">
                        </div>
                  </div>
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="data">Data Nascimento</label>
                        <input name="data" type="date" class="form-control" id="data" placeholder="Data de Nascimento">
                        </div>
                        <div class="form-group">
                        <label for="senha">Senha</label>
                        <input name="senha" type="password" class="form-control" id="senha" placeholder="Senha">
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
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lenon/Downloads/hackathon/resources/views/motorista/cadastro.blade.php ENDPATH**/ ?>