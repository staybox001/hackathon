@extends('template.template')
@section('content')
<div class="container">
    <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Editar Cliente</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action={{ route('cliente.update', $cliente->id) }}>
<<<<<<< HEAD
                {!! method_field('PUT') !!}}
=======
<<<<<<< HEAD
                {!! method_field('PUT') !!}
=======
                {!! method_field('PUT') !!}}
>>>>>>> 5992403b9d11ffc084b2c02fc4c3938259ad67ce
>>>>>>> gabriel4
                @csrf
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" value="{{$cliente->nome}}">
                        </div>
                        <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input name="endereco" type="text" class="form-control" id="endereco" value="{{$cliente->endereco}}">
                        </div>
                  </div>
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input name="cidade" type="text" class="form-control" id="cidade" value="{{$cliente->cidade}}">
                        </div>
                        <div class="form-group">
                        <label for="estado">Estado</label>
                        <input name="estado" type="text" class="form-control" id="estado" value="{{$cliente->estado}}">
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