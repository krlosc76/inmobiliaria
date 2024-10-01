

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CONFIGURACIÓN</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <!-- form start -->
       <?php Utils::caracteristicaextAlert();?>
       <?php Utils::deleteCaracteristicaext();?>
      
       <!-- Caracteristicas externas -->
        <?php $action = base_url . "caracteristicaex/crear"; ?>
       <form id="form-caracteristicas-ex" action="<?= $action ?>" method="post">
       <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Caracteristicas externas</h3>
            </div>
        </div>
          <div class="card-body row">
            <h5>Ingrese las caracteristicas externas de inmueble , por ejemplo: Gimnasio, parqueadero, parque, etc..</h5>
          <div class="form-group col-md-3 d-flex align-items-start">
              <input class="form-control" type="text" name="nombre">
            </div>
            <div class="form-group col-md-3 d-flex align-items-start">
            <button type="submit" class="btn btn-primary">Agregar</button>  
        </div> 
      </form>  
          <div class="card p-0 col-md-4">
          <table class="table table-striped projects ">
              <thead>
                  <tr>
                      <th>Caracteristica</th>
                      <th ></th>
                  </tr>
              </thead>
              <tbody>
              <?php while($feature = $caracteristicas->fetch_object()): ?>
                  <tr>
                    <td><a><?=$feature->caracteristica;?></a></td>
                    <td>
                    <a type="button" class="btn btn-danger btn-sm" href="<?= base_url ?>/caracteristicaex/eliminar&id=<?=$feature->id?>"><i class="fas fa-trash mr-1"></i>Eliminar</a>
                    </td>
                  </tr>
                  <?php endwhile; 
              
                  ?>  
                 
                </tbody>
          </table>
          </div>
      </div>
    </section>
   
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

