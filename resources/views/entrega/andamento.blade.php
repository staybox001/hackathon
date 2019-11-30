@extends('template.template')
@section('content')

      <div class="container">
         <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Entregas em situação de andamento</h3>
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
                @foreach ($andamento as $andamentos)
<<<<<<< HEAD
                <td>{{$andamentos->id_produto}}</td>
                <td>{{$andamentos->id_cliente}}</td>
                <td>{{$andamentos->id_motorista}}</td>
                <td>X</td>
=======
                <tr>
                  <td>{{$andamentos->id_produto}}</td>
                  <td>{{$andamentos->id_cliente}}</td>
                  <td>{{$andamentos->id_motorista}}</td>
                  <td>X</td>
                </tr>
>>>>>>> gabriel4
                @endforeach
              </table>
            </div>
         </div>            
      </div> 

@endsection