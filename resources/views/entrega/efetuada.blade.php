@extends('template.template')
@section('content')

<div class="container">
         <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Entregas em situação de efetuadas</h3>
              </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Produto</th>
                  <th>Cliente</th>
                  <th>Motorista</th>
                  <th>Detalhes</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($efetuada as $efetuadas)
                <td>{{$efetuadas->id_produto}}</td>
                <td>{{$efetuadas->id_cliente}}</td>
                <td>{{$efetuadas->id_motorista}}</td>
                <td>X</td>
                @endforeach
              </table>
            </div>
         </div>            
      </div> 
@endsection