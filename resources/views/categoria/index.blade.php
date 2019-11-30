@extends('template.template')
@section('content')

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
               @foreach ($categorias as $categoria)
                <tr>
                    <td>{{$categoria->nome}}</td>
                    <td>{{$categoria->descricao}}</td>
                    <td>
                      <a class="btn-sm btn-success" href="{{route('categoria.show', $categoria->id)}}">Abrir</a>
                      <a class="btn-sm btn-danger" href="#">Remove</a>
                    </td>
                    
                </tr>
               @endforeach
                </tbody>
            </table>
           </div>
        </div>            
     </div> 


@endsection