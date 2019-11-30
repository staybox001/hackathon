@extends('template.template')
@section('content')

      <div class="container">
         <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Entregas em situação de Efetuadas</h3>
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
                @foreach ($efetuadas as $efetuada)
                <tr>
                  <td>{{$efetuada->produto}}</td>
                  <td>{{$efetuada->cliente}}</td>
                  <td>{{$efetuada->motorista}}</td>
                <td><a class="btn btn-success" href="{{route('entrega.show', $efetuada->id)}}">Abrir</a></td>
                </tr>
                @endforeach
              </table>
            </div>
         </div>            
      </div> 

@endsection