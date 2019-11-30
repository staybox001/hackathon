@extends('template.template')
@section('content')

    <div class="container">
        <form method="POST" action="{{route('entrega.store')}}">
          @csrf
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cadastro de entrega</h3>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="produto">Produto</label>


                    <select id="produto" name="produto" class="form-control">

                        <option selected>Selecionar</option>
                        @foreach ($produtos as $produto)
                          <option value="{{$produto->id}}">{{$produto->nome}}</option>
                        @endforeach
                    </select>
                    </div>
                  <div class="col-6">
                    <label for="cliente">Cliente</label>
                    <select id="cliente" name="cliente" class="form-control">

                 

                        <option selected>Selecione</option>
                        @foreach ($clientes as $cliente)
                          <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="col-6">
                    <label for="motorista">Motorista</label>
                    <select id="motorista" name="motorista"class="form-control">
                        <option selected>Selecione</option>
                        @foreach ($motoristas as $motorista)
                          <option value="{{$motorista->id}}">{{$motorista->nome}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div name="status" hidden value="0"></div>

                </div>
            </div>
            <div class="card-footer"> 
              <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>

                </div>
            </div>
            
        </form>
    </div>

@endsection