<?php $__env->startSection('content'); ?>

<div class="container">
         <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Entregas em situação de divergência</h3>
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
                <?php $__currentLoopData = $divergencia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $divergencias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($divergencias->id_produto); ?></td>
                  <td><?php echo e($divergencias->id_cliente); ?></td>
                  <td><?php echo e($divergencias->id_motorista); ?></td>
                  <td>X</td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </table>
            </div>
         </div>            
      </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lenon/Downloads/hackathon/resources/views/entrega/divergencia.blade.php ENDPATH**/ ?>