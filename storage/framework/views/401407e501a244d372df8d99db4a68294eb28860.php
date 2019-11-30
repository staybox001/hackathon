<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="card card-primary">
             <div class="card-header">
               <h3 class="card-title">Produtos</h3>
             </div>
           <!-- /.card-header -->
           <div class="card-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>Nome</th>
                 <th>Categoria</th>
                 <th>Valor</th>
                 <th>Peso</th>
                 <th>Ação</th>
               </tr>
               </thead>
               <tbody>
               <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($produto->nome); ?></td>
                    <td><?php echo e($produto->cpf); ?></td>
                    <td><?php echo e($produto->data_nascimento); ?></td>
                    <td><?php echo e($produto->created_at); ?></td>
                    <td><a class="btn-sm btn-success" href="<?php echo e(route('produto.show', $produto->id)); ?>">Abrir</a></td>
                </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
           </div>
        </div>            
     </div> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/hackathon/resources/views/produto/index.blade.php ENDPATH**/ ?>