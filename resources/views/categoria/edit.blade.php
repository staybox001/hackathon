@extends('template.template')
@section('content')
<div class="container">
    <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Editar Categoria</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action={{route('categoria.update', $categoria->id)}}>
                {!! method_field('PUT') !!}
                @csrf
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" value="{{$categoria->nome}}">
                        </div>
                  </div>
              </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea name="descricao" type="text" class="form-control" id="endereco" >{{$categoria->descricao}}</textarea>
                        </div>
                  </div>
            
              </div>
                        
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
            </form>
        </div>
    </div>
@endsection