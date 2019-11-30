@extends('template.template')
@section('content')
<div class="container">
    <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Cadastrar Cliente</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action={{route('cliente.store')}}>
                @csrf
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome do cliente">
                        </div>
                        <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Endereço do cliente">
                        </div>
                  </div>
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input name="cidade" type="text" class="form-control" id="cidade" placeholder="Cidade do cliente">
                        </div>
                        <div class="form-group">
                        <label for="estado">Estado</label>
                        <input name="estado" type="text" class="form-control" id="estado" placeholder="Estado do cliente">
                        </div>
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