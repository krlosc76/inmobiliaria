

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>AGREGAR PROPIEDADES</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <!-- form start -->
      <form id="form-properties" enctype="multipart/form-data">
          <!-- Información general -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Información general</h3>
          </div>
        </div>
      <!-- /.card-header -->
    
          <div class="card-body row">
            <div class="form-group col-12">
              <label for="exampleInputEmail1">Titulo</label>
              <input type="text" class="form-control" id="exampleInputEmail1" >
            </div> 
            <div class="form-group col-12">
              <label for="exampleFormControlTextarea1">Descripción</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group col-md-6">
              <label>Modalidad</label>
              <select class="form-control">
                <option>Arriendo</option>
                <option>Venta</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label>Tipo de propiedad</label>
              <select class="form-control">
                <option>Apartamento</option>
                <option>casa</option>
                <option>Bodega</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="phone" >Habitaciones</label>
              <input type="number" class="form-control" id="phone" name="phone" min="1" max="20">  
            </div>
            <div class="form-group col-md-6">
              <label for="phone" >Baños</label>
              <input type="number" class="form-control" id="phone" name="phone" min="1" max="20">  
            </div>
            <div class="form-group col-md-6">
              <label for="phone" >Precio</label>
              <input placeholder="USD" type="number" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group col-md-6">
              <label for="phone" >Área</label>
              <input placeholder="M2" type="number" class="form-control" id="phone" name="phone"> 
            </div>     
          </div>
          <!-- Subir imagenes -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Cargar Imagenes</h3>
            </div>
          </div>
      <!-- /.card-header -->
          <div class="card-body row">
            <div class="form-group col-md-12">
              <label for="images">Selecciona imágenes:</label>
              <input type="file" id="images" name="images[]" accept=".jpg,.jpeg,.png" multiple>
              <button type="button" id="cancelButton">Cancelar</button> 
            </div>  
          </div>
      
          <!-- Ubicación -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ubicación</h3>
            </div>
          </div>
      <!-- /.card-header -->
      <div class="card-body row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Dirección</label>
          <input type="text" class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Ciudad</label>
          <input type="text" class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Estado</label>
          <input type="text" class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">País</label>
          <input type="text" class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Google maps latitud</label>
          <input type="text" class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Google maps longitud</label>
          <input type="text" class="form-control" id="exampleInputEmail1" >
        </div>
      </div>
          <!-- Caracteristicas internas -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Caracteristicas internas</h3>
            </div>
          </div>
          <div class="card-body .row">
            <!-- checkbox -->
            <div class="form-group row">
              <div class="form-check col-2">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Garaje</label>
              </div>
              <div class="form-check col-2">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Balcón</label>
              </div>
              <div class="form-check col-2">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Cocina integral</label>
              </div>
            </div>
          </div>  
         
          <!-- Caracteristicas externas -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Caracteristicas externas</h3>
            </div>
          </div>
          <div class="card-body .row">

            <!-- checkbox -->
            <div class="form-group row">
              <div class="form-check col-2">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Piscina</label>
              </div>
              <div class="form-check col-2">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Gimnasio</label>
              </div>
              <div class="form-check col-2">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Parque</label>
              </div>
            </div>
          </div>  
                     

                <!-- /.card-body -->
          <!-- <div class="card-footer">
            <button type="submit" class="btn btn-primary">Actualizar datos</button>
          </div> -->
      
      </form>     <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

