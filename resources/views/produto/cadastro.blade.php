@extends('template.template')
@section('content')
<div class="container">
    <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Cadastrar Produtos</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('produto.store')}}">
                @csrf
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome do Produto">
                        </div>
                        <div class="form-group">
                            <label for="data">Categoria</label>
                            <select id="categoria" name="categoria"class="form-control">
                                    <option selected>Selecione</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                    @endforeach
                            </select>
                        </div>
                  </div>
                  <div class="col-sm-6">
                        <div class="form-group">
                        <label for="valor">Valor</label>
                        <input name="valor" type="number" step="any" class="form-control" id="valor" placeholder="Valor">
                        </div>
                        <div class="form-group">
                        <label for="peso">Peso</label>
                        <input name="peso" type="number" step="any" class="form-control" id="peso" placeholder="Peso">
                        </div>
                  </div>
                  <div class="form-group">
                        <label for="image">Foto</label>
                        <input type="file" id="image" name="img_produto">
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