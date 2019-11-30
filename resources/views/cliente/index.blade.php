@extends('template.template')
@section('content')

@foreach ($clientes as $cliente)
<table id="clientetable" class="table table-bordered table-hover">
    <thead>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Ação</th>
    </thead>
    <tbody>
        <td>{{$cliente->nome}}</td>
        <td>{{$cliente->endereco}}</td>
        <td>{{$cliente->cidade}}</td>
        <td>{{$cliente->estado}}</td>
        <td><a href="{{route('cliente.show', $cliente->id)}}" class="btn btn-default">Abrir</a></td>

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

    
@endforeach

@endsection