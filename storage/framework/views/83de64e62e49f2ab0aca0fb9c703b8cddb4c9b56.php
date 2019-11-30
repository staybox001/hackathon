<?php $__env->startSection('content'); ?>
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
        
            <div class="col-sm-4">
              <div class="card card-primary">
                <div class="card-header">
                        
                    <h5 class="card-title m-0">Entrega </h5>
  
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               
                <div class="card-body">
                    <div class="row">

                    

                        <div class="col-sm">
                            <h6 class="card-title">Cód: <?php echo e($id); ?></h6>
                            <br /><br />
                            <p class="card-text">Cliente: <?php echo e($entrega->cliente_nome); ?>  <a class="btn-sm  btn-success" href="<?php echo e(route('cliente.show', $entrega->id_cliente)); ?>">Abrir</a></p>
                        
                            <h6 class="card-title">Motorista : <?php echo e($entrega->motorista); ?> <a class="btn-sm  btn-success" href="<?php echo e(route('motorista.show', $entrega->id_motorista)); ?>">Abrir</a></h6>
                            
                            <h6 class="card-title">Aberto em : <?php echo e($entrega->created_at); ?> <a class="btn-sm  btn-success" href="<?php echo e(route('motorista.show', $entrega->id_motorista)); ?>">Abrir</a></h6>

                            <br /><br />
                        </div>
                    </div>
                
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer">
                   
                </div>
               
            </div>
        </div>
        <?php if($entrega->status != 0): ?>
        <div class="col-sm-8">
            <div class="col-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <div class="card-title">
                      Fotos Entrega
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <a href="<?php echo e(url('storage/'.$entrega->foto_entrega)); ?>" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                          <img src="<?php echo e(url('storage/'.$entrega->foto_entrega)); ?>" class="img-fluid mb-2" alt="white sample"/>
                        </a>
                      </div>
                      <div class="col-sm-6">
                        <a href="<?php echo e(url('storage/'.$entrega->foto_nota)); ?>" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                          <img src="<?php echo e(url('storage/'.$entrega->foto_nota)); ?>" class="img-fluid mb-2" alt="black sample"/>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <?php endif; ?>
    </div>

    <?php if($entrega->status != 0): ?>
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
    <?php endif; ?>
</div>
<?php if(isset($coord->latitude) && isset($coord->longitude)): ?>
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
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gabriel/hackathon/resources/views/entrega/entregashow.blade.php ENDPATH**/ ?>