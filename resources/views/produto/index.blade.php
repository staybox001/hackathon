@extends('template.template')
@section('content')

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
               @foreach ($produtos as $produto)
                <tr>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->cpf}}</td>
                    <td>{{$produto->data_nascimento}}</td>
                    <td>{{$produto->created_at}}</td>
                    <td><a class="btn-sm btn-success" href="{{route('produto.show', $produto->id)}}">Abrir</a></td>
                </tr>
               @endforeach
                </tbody>
            </table>
           </div>
        </div>            
     </div> 


@endsection