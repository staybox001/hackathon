@extends('template.template')
@section('content')

<div class="container">
         <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Entregas em situação de divergência</h3>
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
                @foreach ($divergencia as $divergencias)
<<<<<<< HEAD
                <tr>
                  <td>{{$divergencias->id_produto}}</td>
                  <td>{{$divergencias->id_cliente}}</td>
                  <td>{{$divergencias->id_motorista}}</td>
                  <td>X</td>
                </tr>
=======
                <td>{{$divergencias->id_produto}}</td>
                <td>{{$divergencias->id_cliente}}</td>
                <td>{{$divergencias->id_motorista}}</td>
                <td>X</td>
>>>>>>> lenon
                @endforeach
              </table>
            </div>
         </div>            
      </div> 
@endsection