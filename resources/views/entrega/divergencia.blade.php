@extends('template.template')
@section('content')

      <div class="container">
         <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Entregas em situação de Divergência</h3>
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
                @foreach ($divergencias as $divergencia)
                <tr>
                  <td>{{$divergencia->produto}}</td>
                  <td>{{$divergencia->cliente}}</td>
                  <td>{{$divergencia->motorista}}</td>
                <td><a class="btn btn-success" href="{{route('entrega.show', $divergencia->id)}}">Abrir</a></td>
                </tr>
                @endforeach
              </table>
            </div>
         </div>            
      </div> 

@endsection