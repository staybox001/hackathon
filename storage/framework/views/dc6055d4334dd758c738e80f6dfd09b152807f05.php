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
<<<<<<< HEAD
<<<<<<< HEAD
                    <select id="produto" name="produto" class="form-control">
=======
                    <select id="produto" nome="produto" class="form-control">
>>>>>>> lenon
=======
                    <select id="produto" name="produto" class="form-control">
>>>>>>> gabriel4
                        <option selected>Selecionar</option>
                        <option id="1">Caixa D'água 500l</option>
                        <option id="2">Caixa D'água 1000l</option>
                        <option id="3">Piscina 30000l</option>
                        <option id="4">Piscina 50000l</option>
                    </select>
                    </div>
                  <div class="col-6">
                    <label for="cliente">Cliente</label>
<<<<<<< HEAD
<<<<<<< HEAD
                    <select id="cliente" name="cliente" class="form-control">
=======
                    <select id="cliente" nome="cliente" class="form-control">
>>>>>>> lenon
=======
                    <select id="cliente" name="cliente" class="form-control">
>>>>>>> gabriel4
                        <option selected>Selecione</option>
                        <option id="1">Lenon</option>
                        <option id="2">Gabriel</option>
                        <option id="3">Jonathan</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <label for="motorista">Motorista</label>
<<<<<<< HEAD
<<<<<<< HEAD
                    <select id="motorista" name="motorista"class="form-control">
=======
                    <select id="motorista" nome="motorista" class="form-control">
>>>>>>> lenon
=======
                    <select id="motorista" name="motorista"class="form-control">
>>>>>>> gabriel4
                        <option selected>Selecione</option>
                        <option id="1">Lenon</option>
                        <option id="2">Gabriel</option>
                        <option id="3">Jonathan</option>
                    </select>
                  </div>
                </div>
            </div>
<<<<<<< HEAD
<<<<<<< HEAD
            <div class="card-footer">
              <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
=======
            <div name="status" value="0" hidden></div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
>>>>>>> lenon
=======
            <div class="card-footer">
              <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
>>>>>>> gabriel4
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lenon/Downloads/hackathon/resources/views/entrega/cadastro.blade.php ENDPATH**/ ?>