<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Editar Produtos</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action=<?php echo e(route('produto.update', $produto->id)); ?>>
                <?php echo method_field('PUT'); ?>

                <?php echo csrf_field(); ?>
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" value="<?php echo e($produto->nome); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="data">Categoria</label>
                            <select id="categoria" name="categoria"class="form-control" required>
                                    <option selected>Selecione</option>
                                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($categoria->id == $produto->id_categoria): ?>
                                            <?php   
                                                $selected = 'selected';
                                            ?>
                                        <?php endif; ?>
                                        <option value="<?php echo e($categoria->id); ?>"<?php echo e($selected); ?>><?php echo e($categoria->nome); ?></option>
                                            <?php   
                                                $selected = '';
                                            ?>    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                  </div>
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="valor">Valor</label>
                        <input name="valor" type="number" step="any" class="form-control" id="valor" value="<?php echo e($produto->valor); ?>" required>
                        </div>
                        <div class="form-group">
                        <label for="peso">Peso</label>
                        <input name="peso" type="number" step="any" class="form-control" id="peso" value="<?php echo e($produto->peso); ?>" required>
                        </div>
                  </div>
                  <div class="form-group">
                        <label for="image">Foto</label>
                        <input type="file" id="image" name="img_produto">
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
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lenon/Downloads/hackathon/resources/views/produto/edit.blade.php ENDPATH**/ ?>