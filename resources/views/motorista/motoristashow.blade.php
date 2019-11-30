@extends('template.template')
@section('content')
<style>
        /* Set the size of the div element that contains the map */
    #map {
        height: 500px;
        /* The height is 400 pixels */
        /* The width is the width of the web page */
    }
</style>

<div class="container">
        <div class="row">
            <div class="col-sm-5">

                    <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                              <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="{{ url('storage/'.$motorista->foto) }}"
                                     alt="User profile picture">
                              </div>
                                
                              <h3 class="profile-username text-center">{{$motorista->nome}}</h3>
              
                              <p class="text-muted text-center">{{$motorista->cpf}}</p>
              
                              <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                  <b>Entregas Efetuadas</b> <a class="float-right">{{$efetuadas}}</a>
                                </li>
                                <li class="list-group-item">
                                  <b>Entregas Pendentes</b> <a class="float-right">{{$andamento}}</a>
                                </li>
                                <li class="list-group-item">
                                  <b>Divergencias</b> <a class="float-right">{{$divergencias}}</a>
                                </li>
                              </ul>
              
                              <a href="{{route('motorista.edit', $motorista->id)}}" class="btn btn-primary btn-block"><b>Editar</b></a>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->

            </div>
            <div class="col-sm-7">
              <div class="card card-primary">
                <div class="card-header">
                        
                    <h5 class="card-title m-0">Entregas Pendentes</h5>
  
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               
                <div class="card-body">
                    <div class="row">

                        <div class="col-sm">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Cód</th>
                                  <th>Cliente</th>
                                  <th>Aberto Dia</th>
                                  <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($entregas as $entrega)
                                <tr>
                                  <td>{{$entrega->id}}</td>
                                  <td>{{$entrega->nome}}</td>
                                  <td>{{$entrega->created_at}}</td>
                                <td><a class="btn btn-success" href="{{route('entrega.show', $entrega->id)}}">Abrir</a></td>
                                </tr>
                                @endforeach
                              </table>
                        </div>
                    </div>
                
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer">
                   
                </div>
               
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           <h3>Local atual</h3> 
                        </div>
                        <div class="card-body">
                             <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google Maps Script -->
        
    </div>
</div>
@if (isset($coord->latitude) && isset($coord->longitude))
<script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var uluru = {
                lat: {{$coord->latitude}},
                lng: {{$coord->longitude}}
            };
            // The map, centered at Uluru -27.359013, -53.404001 -27.3591918,-53.4045042,19
            var map = new google.maps.Map( 
                document.getElementById('map'), {
                    zoom: 17,
                    center: uluru
                });
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7D8SuZ2J4aEKYH8TDn1Ca8e0hjOdNo3s&callback=initMap">
    </script>
@endif
@endsection