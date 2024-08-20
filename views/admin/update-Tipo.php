

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
       <?php Utils::tipoAlert();?>
       <!-- Tipos -->
       <form id="form-properties" action="<?=base_url?>tipo/crear" method="post">
       <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tipos de inmueble</h3>
            </div>
        </div>
          <div class="card-body row">
            <h5>Actualizar tipo de inmueble</h5>
            <div class="form-group col-md-3 d-flex align-items-start">
              <input class="form-control" type="text" name="tipo">
            </div>
            <div class="form-group col-md-3 d-flex align-items-start">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div> 
      </form>  
      </div>
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

