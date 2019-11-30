<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Cadastrar Categoria</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="<?php echo e(route('categoria.store')); ?>">
                <?php echo csrf_field(); ?>
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome da categoria">
                        </div>
                  </div>
              </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea name="descricao" type="text" class="form-control" id="endereco" placeholder="Descrição"></textarea>
                        </div>
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
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lenon/Downloads/hackathon/resources/views/categoria/cadastro.blade.php ENDPATH**/ ?>