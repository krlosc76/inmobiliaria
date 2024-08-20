

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>MI PERFIL</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php Utils::updateAlert();?>
    <section class="content">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Datos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=base_url?>usuario/update&id=<?=$_SESSION['identity']->id?>" method="post" enctype="multipart/form-data"> 
                <div class="card-body row">
                    <div class="form-group col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?=$_SESSION['identity']->nombre?>" >
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email"  value="<?=$_SESSION['identity']->email?>" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telefono" >Telefono</label>
                        <input type="tel" class="form-control" name="telefono" pattern="\d{1,15}" maxlength="15"  value="<?=$_SESSION['identity']->telefono?>">
                        
                    </div> 
                  <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Ingrese su actual password o actualicelo">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="rol">Rol</label>
                    <input type="text" class="form-control" name="rol" value="Agente" disabled>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="imagen">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="" name="imagen">
                      </div>
                    </div>
                  </div>
        
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Actualizar datos</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

