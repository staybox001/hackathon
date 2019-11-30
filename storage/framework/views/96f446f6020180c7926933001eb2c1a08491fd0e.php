<?php $__env->startSection('content'); ?>

      <div class="container">
         <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Entregas em situação de Efetuadas</h3>
              </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Produto</th>
                  <th>Cliente</th>
                  <th>Motorista</th>
                  <th>Detalhes</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $efetuadas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $efetuada): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($efetuada->produto); ?></td>
                  <td><?php echo e($efetuada->cliente); ?></td>
                  <td><?php echo e($efetuada->motorista); ?></td>
                <td><a class="btn btn-success" href="<?php echo e(route('entrega.show', $efetuada->id)); ?>">Abrir</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </table>
            </div>
         </div>            
      </div> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/hackathon/resources/views/entrega/efetuada.blade.php ENDPATH**/ ?>