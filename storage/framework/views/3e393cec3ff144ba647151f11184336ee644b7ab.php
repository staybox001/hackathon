<?php $__env->startSection('content'); ?>

      <div class="container">
         <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Entregas em situação de andamento</h3>
              </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Produto</th>
                  <th>Cliente</th>
                  <th>Motorista</th>
                  <th>Aberto Dia</th>
                  <th>Detalhes</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $andamento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $andamentos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($andamentos->produto); ?></td>
                  <td><?php echo e($andamentos->cliente); ?></td>
                  <td><?php echo e($andamentos->motorista); ?></td>
                  <td><?php echo e($andamentos->abertura); ?></td>
                <td><a class="btn btn-success" href="<?php echo e(route('entrega.show', $andamentos->id)); ?>">Abrir</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </table>
            </div>
         </div>            
      </div> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/hackathon/resources/views/entrega/andamento.blade.php ENDPATH**/ ?>