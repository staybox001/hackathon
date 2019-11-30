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
                    <select id="produto" class="form-control">
                        <option selected>Selecionar</option>
                        <option id="1">Caixa D'água 500l</option>
                        <option id="2">Caixa D'água 1000l</option>
                        <option id="3">Piscina 30000l</option>
                        <option id="4">Piscina 50000l</option>
                    </select>
                    </div>
                  <div class="col-6">
                    <label for="cliente">Cliente</label>
                    <select id="cliente" class="form-control">
                        <option selected>Selecione</option>
                        <option id="1">Lenon</option>
                        <option id="2">Gabriel</option>
                        <option id="3">Jonathan</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <label for="motorista">Motorista</label>
                    <select id="motorista" class="form-control">
                        <option selected>Selecione</option>
                        <option id="1">Lenon</option>
                        <option id="2">Gabriel</option>
                        <option id="3">Jonathan</option>
                    </select>
                  </div>
                  <div class="col-6 ">
                    <label for="datacompra">Data da compra</label>
                    <input type="date" data-date-format="DD MMMM YYYY" class="form-control" placeholder="Data de compra">
                  </div>
                </div>
            </div>
        </form>
    </div>

@endsection