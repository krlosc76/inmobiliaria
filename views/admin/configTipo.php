

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
       <?php Utils::deleteTipoAlert();?>
      <?php var_dump($_POST['tipo']); ?> 
      
       <!-- Tipos -->
        <?php
        if(!isset($_GET['id'])){
          $action = base_url . "tipo/crear"; 
        }else{
          $action = base_url . "tipo/actualizar"; 
        }
        
        ?>
       <form id="form-properties" action="<?= $action ?>" method="post">
       <?php isset($_GET['id']) ? $tipo_actual = $update->fetch_object(): ''; ?>
       <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tipos de inmueble</h3>
            </div>
        </div>
          <div class="card-body row">
          <?php if(!isset($_GET['id'])) : ?>
            <h5>Ingrese los tipos de inmueble , por ejemplo: local, bodega, etc..</h5>
          <?php else : ?>
              <h5>Actualice tipo de inmueble</h5>  
          <?php endif ?>  
          <div class="form-group col-md-3 d-flex align-items-start">
              <input class="form-control" type="text" name="tipo"  value="<?php echo isset($_GET['id']) ? $tipo_actual->tipo: ''; ?>">
            </div>
            <div class="form-group col-md-3 d-flex align-items-start">
            <?php if(!isset($_GET['id'])) : ?>
            <button type="submit" class="btn btn-primary">Agregar</button>
            <?php else : ?>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a type="button" href="<?= base_url ?>admin/tipo" class="btn btn-danger ml-2">Cancelar</a type="button" href="">
            <?php endif ?>  
        </div> 
      </form>  
      <?php if(!isset($_GET['id'])) : ?>
          <div class="card p-0 col-md-4">
          <table class="table table-striped projects ">
              <thead>
                  <tr>
                      <th>Tipo inmueble</th>
                      <th ></th>
                  </tr>
              </thead>
              <tbody>
              <?php while($type = $tipos->fetch_object()): ?>
                  <tr>
                    <td><a><?=$type->tipo;?></a></td>
                    <td><a href="<?= base_url ?>admin/getTipo&id=<?=$type->id?>" class="btn btn-info btn-sm" ><i class="fa-solid fa-pen mr-1"></i>Actualizar</a>
                    <a type="button" class="btn btn-danger btn-sm" href="<?= base_url ?>/tipo/eliminar&id=<?=$type->id?>"><i class="fas fa-trash mr-1"></i>Eliminar</a>
                    </td>
                  </tr>
                  <?php endwhile;?>  
                 
                </tbody>
          </table>
          </div>
          <?php endif ?> 
      </div>
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

