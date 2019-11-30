<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="card card-primary">
             <div class="card-header">
               <h3 class="card-title">Motoristas</h3>
             </div>
           <!-- /.card-header -->
           <div class="card-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>Nome</th>
                 <th>CPF</th>
                 <th>Data de Nascimento</th>
                 <th>Cadastro</th>
                 <th>Ação</th>
               </tr>
               </thead>
               <tbody>
               <?php $__currentLoopData = $motoristas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $motorista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($motorista->nome); ?></td>
                    <td><?php echo e($motorista->cpf); ?></td>
                    <td><?php echo e($motorista->data_nascimento); ?></td>
                    <td><?php echo e($motorista->created_at); ?></td>
                    <td><a class="btn-sm btn-success" href="<?php echo e(route('motorista.show', $motorista->id)); ?>">Abrir</a></td>
                </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
           </div>
        </div>            
     </div> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/hackathon/resources/views/motorista/index.blade.php ENDPATH**/ ?>