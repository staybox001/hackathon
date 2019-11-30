@extends('template.template')
@section('content')


<div class="container">
        <div class="row">
            <div class="col-sm-12">
        <div class="card card-primary">
                <div class="card-header">
                   <div class="row">    
                        <div class="col-sm-9">
                            <h5 class="card-title m-0">Produto</h5>
                        </div>
                        <div class="col-sm-3">
                            <a class="btn-sm btn-warning" href="{{route('produto.edit', $produto->id)}}">Editar</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               
                <div class="card-body">
                   <div class="row">
                        <div class="col-sm-4">


                            <img class="img-fluid" src="{{ url('storage/'.$produto->imagem) }}" alt="Photo">


                        </div>
                    
                        <div class="col-sm-8">
                            <h6 class="card-title">Nome: {{$produto->nome}}</h6>
                            <br /><br />
                            <p class="card-text">Categoria: {{$categoria->nome}}</p>
                    
                           <p class="card-text">Preço: {{$produto->valor}} </p>

                           <p class="card-text">Peso: {{$produto->peso}} </p>

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