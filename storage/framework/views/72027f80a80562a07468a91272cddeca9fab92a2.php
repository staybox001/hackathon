<?php $__env->startSection('content'); ?>
<<<<<<< HEAD


<div class="container">
        <div class="row">
            <div class="col-sm-12">
        <div class="card card-primary">
                <div class="card-header">
                   <div class="row">    
                        <div class="col-sm-9">
                            <h5 class="card-title m-0">Motorista</h5>
                        </div>
                        <div class="col-sm-3">
                            <a class="btn-sm btn-warning" href="<?php echo e(route('motorista.edit', $motorista->id)); ?>">Editar</a>
                        </div>
                    </div>
=======
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
                                     src="../../dist/img/user4-128x128.jpg"
                                     alt="User profile picture">
                              </div>
              
                              <h3 class="profile-username text-center"><?php echo e($motorista->nome); ?></h3>
              
                              <p class="text-muted text-center"><?php echo e($motorista->cpf); ?></p>
              
                              <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                  <b>Entregas Efetuadas</b> <a class="float-right">1,322</a>
                                </li>
                                <li class="list-group-item">
                                  <b>Entregas Pendentes</b> <a class="float-right">543</a>
                                </li>
                                <li class="list-group-item">
                                  <b>Divergencias</b> <a class="float-right">13,287</a>
                                </li>
                              </ul>
              
                              <a href="<?php echo e(route('motorista.edit', $motorista->id)); ?>" class="btn btn-primary btn-block"><b>Editar</b></a>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->

            </div>
            <div class="col-sm-7">
              <div class="card card-primary">
                <div class="card-header">
                        
                    <h5 class="card-title m-0">Entregas Pendentes</h5>
  
>>>>>>> gabriel4
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               
                <div class="card-body">
                    <div class="row">

<<<<<<< HEAD
                        <div class="col-sm-4">
                                <img src="..." class="rounded float-left" alt="...">
                        </div>

                        <div class="col-sm-8">
=======
                    

                        <div class="col-sm">
>>>>>>> gabriel4
                            <h6 class="card-title">Nome: <?php echo e($motorista->nome); ?></h6>
                            <br /><br />
                            <p class="card-text">CPF: <?php echo e($motorista->cpf); ?></p>
                        
                            <h6 class="card-title">Data de Nascimento: <?php echo e($motorista->data_nascimento); ?></h6>
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
<<<<<<< HEAD
</div>
=======
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
<script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var uluru = {
                lat: <?php echo e($coord->latitude); ?>,
                lng: <?php echo e($coord->longitude); ?>

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
>>>>>>> gabriel4
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/hackathon/resources/views/motorista/motoristashow.blade.php ENDPATH**/ ?>