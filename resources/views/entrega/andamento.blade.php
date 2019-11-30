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
                <tr>
                  <td>{{$andamentos->produto}}</td>
                  <td>{{$andamentos->cliente}}</td>
                  <td>{{$andamentos->motorista}}</td>
                <td><a class="btn btn-success" href="{{route('entrega.show', $andamentos->id)}}">Abrir</a></td>
                </tr>
                @endforeach
              </table>
            </div>
         </div>            
      </div> 

@endsection