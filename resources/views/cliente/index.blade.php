@extends('template.template')
@section('content')

@foreach ($clientes as $cliente)

{{$cliente->nome}}

@endforeach

@endsection