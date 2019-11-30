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
                        <option id="1">Caixa D'água 500l</option>
                        <option id="2">Caixa D'água 1000l</option>
                        <option id="3">Piscina 30000l</option>
                        <option id="4">Piscina 50000l</option>
                    </select>
                    </div>
                  <div class="col-6">
                    <label for="cliente">Cliente</label>
                    <select id="cliente" name="cliente" class="form-control">

                 

                        <option selected>Selecione</option>
                        <option id="1">Lenon</option>
                        <option id="2">Gabriel</option>
                        <option id="3">Jonathan</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <label for="motorista">Motorista</label>
                    <select id="motorista" name="motorista"class="form-control">
                        <option selected>Selecione</option>
                        <option id="1">Lenon</option>
                        <option id="2">Gabriel</option>
                        <option id="3">Jonathan</option>
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