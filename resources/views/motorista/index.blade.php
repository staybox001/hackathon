@extends('template.template')
@section('content')

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
               @foreach ($motoristas as $motorista)
                <tr>
                    <td>{{$motorista->nome}}</td>
                    <td>{{$motorista->cpf}}</td>
                    <td>{{$motorista->data_nascimento}}</td>
                    <td>{{$motorista->created_at}}</td>
                    <td><a class="btn-sm btn-success" href="{{route('motorista.show', $motorista->id)}}">Abrir</a></td>
                </tr>
               @endforeach
                </tbody>
            </table>
           </div>
        </div>            
     </div> 


@endsection