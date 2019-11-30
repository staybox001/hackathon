<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<table id="clientetable" class="table table-bordered table-hover">
    <thead>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Ação</th>
    </thead>
    <tbody>
        <td><?php echo e($cliente->nome); ?></td>
        <td><?php echo e($cliente->endereco); ?></td>
        <td><?php echo e($cliente->cidade); ?></td>
        <td><?php echo e($cliente->estado); ?></td>

    </tbody>

    
</table>

<script>
    $(function () {
        $("#clientetable").DataTable({
            "language":{
        "sEmptyTable": "Nenhum registro encontrado",
        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
        "sInfoPostFix": "",
        "sInfoThousands": ".",
        "sLengthMenu": "_MENU_ resultados por página",
        "sLoadingRecords": "Carregando...",
        "sProcessing": "Processando...",
        "sZeroRecords": "Nenhum registro encontrado",
        "sSearch": "Pesquisar",
        "oPaginate": {
            "sNext": "Próximo",
            "sPrevious": "Anterior",
            "sFirst": "Primeiro",
            "sLast": "Último"
        },
        "oAria": {
            "sSortAscending": ": Ordenar colunas de forma ascendente",
            "sSortDescending": ": Ordenar colunas de forma descendente"
        }
    }
        });
        });
        </script>
     <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
     <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/hackathon/resources/views/cliente/index.blade.php ENDPATH**/ ?>