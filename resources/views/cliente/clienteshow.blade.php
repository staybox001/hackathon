@extends('template.template')
@section('content')


<div class="container">
        <div class="row">
            <div class="col-sm-6">
        <div class="card card-primary">
                <div class="card-header">
                   <div class="row">    
                        <div class="col-sm-9">
                            <h5 class="card-title m-0">Cliente</h5>
                        </div>
                        <div class="col-sm-3">
                            <a class="btn-sm btn-warning" href="{{route('cliente.edit', $cliente->id)}}">Editar</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               
                <div class="card-body">
                   
                <h6 class="card-title">Nome: {{$cliente->nome}}</h6>
                <br /><br />
                <p class="card-text">Endereço: {{$cliente->endereco}}</p>
            
                <h6 class="card-title">Cidade: {{$cliente->cidade}} - {{$cliente->estado}}</h6>
                <br /><br />
            
            
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer">
                   
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection