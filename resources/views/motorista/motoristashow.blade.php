@extends('template.template')
@section('content')


<div class="container">
        <div class="row">
            <div class="col-sm-12">
        <div class="card card-primary">
                <div class="card-header">
                   <div class="row">    
                        <div class="col-sm-9">
                            <h5 class="card-title m-0">Motorista</h5>
                        </div>
                        <div class="col-sm-3">
                            <a class="btn-sm btn-warning" href="{{route('motorista.edit', $motorista->id)}}">Editar</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               
                <div class="card-body">
                    <div class="row">

                        <div class="col-sm-4">
                            
                        </div>

                        <div class="col-sm-8">
                            <h6 class="card-title">Nome: {{$motorista->nome}}</h6>
                            <br /><br />
                            <p class="card-text">CPF: {{$motorista->cpf}}</p>
                        
                            <h6 class="card-title">Data de Nascimento: {{$motorista->data_nascimento}}</h6>
                            <br /><br />
                        </div>
                    </div>
                
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer">
                   
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection