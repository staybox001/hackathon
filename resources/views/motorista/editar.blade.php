@extends('template.template')
@section('content')
<div class="container">
    <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Editar Motorista</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action={{route('motorista.update', $motorista->id)}}>
                {!! method_field('PUT') !!}}
                @csrf
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" value="{{$motorista->nome}}" required>
                        </div>
                        <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input name="cpf" type="text" class="form-control" id="cpf" value="{{$motorista->cpf}}" required>
                        </div>
                  </div>
                  <div class="col-sm-6">

                        <div class="form-group">
                        <label for="senha">Senha</label>
                        <input name="senha" type="password" class="form-control" id="senha"     >
                        </div>
                  </div>
                  <div class="form-group">
                        <label for="image">Foto</label>
                        <input type="file" id="image" name="img_motorista">
                  </div>
              </div>
                        
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
            </form>
        </div>
    </div>
@endsection