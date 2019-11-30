@extends('template.template')
@section('content')




<div class="container">
    <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Clientes</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="clientetable" class="table table-bordered table-hover">
                                <thead>
                                    <th>Nome</th>
                                    <th>Endereço</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                    <th>Ação</th>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                    <tr>
                                        <td>{{$cliente->nome}}</td>
                                        <td>{{$cliente->endereco}}</td>
                                        <td>{{$cliente->cidade}}</td>
                                        <td>{{$cliente->estado}}</td>
                                        <td><a href="{{route('cliente.show', $cliente->id)}}" class="btn btn-default">Abrir</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            
                                
                            </table>
                        </div>
                      
                            
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer">
                   
                </div>
                </form>
    </div>
</div>

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

    


@endsection