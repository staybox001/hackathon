<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="card card-primary">
             <div class="card-header">
               <h3 class="card-title">Categorias</h3>
             </div>
           <!-- /.card-header -->
           <div class="card-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>Nome</th>
                 <th>Descrição</th>
                 <th>Ação</th>
               </tr>
               </thead>
               <tbody>
               <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($categoria->nome); ?></td>
                    <td><?php echo e($categoria->descricao); ?></td>
                    <td>
                      <a class="btn-sm btn-success" href="<?php echo e(route('categoria.show', $categoria->id)); ?>">Abrir</a>
                      <a class="btn-sm btn-danger" href="#">Remove</a>
                    </td>
                    
                </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
           </div>
        </div>            
     </div> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lenon/Downloads/hackathon/resources/views/categoria/index.blade.php ENDPATH**/ ?>