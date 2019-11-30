<?php $__env->startSection('content'); ?>

    <div class="container">
        <form method="POST" action="<?php echo e(route('entrega.store')); ?>">
          <?php echo csrf_field(); ?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cadastro de entrega</h3>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="produto">Produto</label>


                    <select id="produto" name="produto" class="form-control">

                        <option selected>Selecionar</option>
                        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($produto->id); ?>"><?php echo e($produto->nome); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div>
                  <div class="col-6">
                    <label for="cliente">Cliente</label>
                    <select id="cliente" name="cliente" class="form-control">

                 

                        <option selected>Selecione</option>
                        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($cliente->id); ?>"><?php echo e($cliente->nome); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                  <div class="col-6">
                    <label for="motorista">Motorista</label>
                    <select id="motorista" name="motorista"class="form-control">
                        <option selected>Selecione</option>
                        <?php $__currentLoopData = $motoristas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $motorista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($motorista->id); ?>"><?php echo e($motorista->nome); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>

                  <div name="status" hidden value="0"></div>

                </div>
            </div>
            <div class="card-footer"> 
              <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>

                </div>
            </div>
            
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/hackathon/resources/views/entrega/cadastro.blade.php ENDPATH**/ ?>