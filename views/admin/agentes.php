 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agentes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Agentes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <?php Utils::deleteAlert();?>
      <!-- Default box -->
      <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>Foto</th>
                      <th >Nombre</th>
                      <th >Email</th>
                      <th >Telefono</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                  <?php while($agent = $agentes->fetch_object()): ?>
                    <td>
                      <ul class="list-inline">
                        <li class="list-inline-item">
                        <?php if ($agent->imagen != null): ?>
                        <img alt="propiedad" class="table-avatar" src="<?= base_url ?>uploads/images/<?= $agent->imagen?>">
		                  	<?php else: ?>
                          <img class="table-avatar" src="<?= base_url ?>/assets/admin/img/icon-user.jpg"/>
                        <?php endif; ?>
                        </li>
                      </ul>
                    </td>     
                    <td><a><?=$agent->nombre;?></a></td>
                    <td><a><?=$agent->email;?></a></td>
                    <td><a><?=$agent->telefono;?></a></td>    
                    <td><a class="btn btn-info btn-sm" ><i class="fas fa-eye mr-1"></i>Ver propiedades (5)</a></td>
                    <td class="project-actions text-right"><a type="button" class="btn btn-danger btn-sm" href="<?= base_url ?>/usuario/eliminar&id=<?=$agent->id?>"><i class="fas fa-trash mr-1"></i>Borrar</a>
                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal<?php echo $agent->id?>" tabindex="-1" role="dialog" aria-labelledby="deleteModal<?php echo $agent->id?>Label" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </td>
                  </tr>
                  <?php endwhile;?>
                              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </section>
      <!-- /.card -->

    
  
  <!-- /.content-wrapper -->