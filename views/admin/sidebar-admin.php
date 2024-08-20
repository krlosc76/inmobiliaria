 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url?>" class="brand-link">
      <img src="<?=base_url?>assets/public/imgs/logo.svg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FIND HOUSE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <?php if ($_SESSION['identity']->imagen != null): ?>
          <img src="<?=base_url?>uploads/images/<?=$_SESSION['identity']->imagen?>" class="img-circle elevation-2" alt="User Image">
          <?php else: ?>
          <img class="table-avatar" src="<?= base_url ?>/assets/admin/img/icon-user.jpg"/>
          <?php endif; ?>
        </div>

        <div class="info">
          <a href="#" class="d-block"><?=$_SESSION['identity']->nombre?></a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?=base_url?>admin/profile" class="nav-link">
              <i class="nav-icon fa-solid fa-user"></i>
              <p>
                Mi perfil
              </p>
            </a>
          </li>    
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-building"></i>
              <p>
                Propiedades
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url?>admin/add" class="nav-link">
                  <i class="fa-solid fa-plus nav-icon"></i>
                  <p>Agregar propiedad</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url?>admin/list" class="nav-link">
                  <i class="fa-solid fa-list nav-icon"></i>
                  <p>Listado de propiedades</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class=" fa-solid fa-wrench nav-icon"></i>
                  <p>Configuración</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url?>admin/tipo" class="nav-link">
                  <i class="fa-solid fa-house nav-icon"></i>
                  <p>Tipo de propiedad</p>
                </a>
              </li>
                </ul>
              </li>
            </ul>
          </li>
          <?php if(isset($_SESSION['administrador'])) : ?>
          <li class="nav-item">
            <a href="<?=base_url?>admin/agentes" class="nav-link">
              <i class="nav-icon fa-solid fa-user-tie"></i>
              <p>
                Agentes
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="<?=base_url?>admin/settings" class="nav-link">
              <i class="nav-icon fa-solid fa-gear"></i>
              <p>
                Ajustes
              </p>
            </a>
          </li>  
          <?php endif; ?>  
          <li class="nav-item">
            <a href="<?=base_url?>/usuario/logout" class="nav-link">
              <i class="nav-icon fa-solid fa-right-from-bracket"></i>
              <p>
                Cerrar sesión
              </p>
            </a>
          </li>     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>