 <!-- Busqueda -->
 <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="buscar-titulo-movil text-center py-3 mb-0 d-none d-lg-block " id="buscar">BUSCAR INMUEBLES </h2>
          <h2 class="accordion-header d-lg-none" id="headingOne">
            <button class="accordion-button buscar-titulo-movil text-center py-3 mb-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              BUSCAR INMUEBLES
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body p-0">
              <div class="container-fluid busqueda pt-5" id="form-busqueda">
                <div class="container">
                <form class="row g-3 justify-content-center">
                  <div class="col-xl-4">
                    <label for="">Ciudad</label>
                    <select class="form-select col-3" aria-label="Default select example">
                      <option selected>Seleccionar</option>
                      <option value="1">Bogotá</option>
                      <option value="2">Medellín</option>
                      <option value="3">Cali</option>
                    </select>
                  </div>
                  
                  <div class="col-xl-4">
                    <label for="">Modalidad</label>
                    <select class="form-select col-3" aria-label="Default select example">
                      <option selected>Seleccionar</option>
                      <option value="1">Arriendo</option>
                      <option value="2">venta</option>
                    </select>
                  </div>
        
                  <div class="col-xl-4">
                    <label for="">Tipo de inmueble</label>
                    <select class="form-select col-3" aria-label="Default select example">
                      <option selected>Seleccionar</option>
                      <option value="1">Casa</option>
                      <option value="2">Apartamento</option>
                      <option value="3">Local</option>
                    </select>
                  </div>
        
                    <!-- Precio -->
                    <div class="col-xl-3">
                      <label for="">Precio</label>
                      <select class="form-select col-3" aria-label="Default select example">
                        <option selected>Seleccionar</option>
                        <option value="1">0 - 50 m2</option>
                        <option value="2">50 - 100 m2</option>
                        <option value="3">Local</option>
                      </select>
                    </div> 
        
                    <!-- Area -->
                    <div class="col-xl-3">
                      <label for="">Área</label>
                      <select class="form-select col-3" aria-label="Default select example">
                        <option selected>Seleccionar</option>
                        <option value="1">0 - 50 m2</option>
                        <option value="2">50 - 100 m2</option>
                        <option value="3">Local</option>
                      </select>
                    </div>
        
                     <!-- Habitaciones -->
                     <div class="col-xl-3 ">
                      <label for="habitaciones" class="form-label">Habitaciones</label>
                      <input type="number" class="form-control" id="habitaciones">
                    </div>
        
                    <!-- Baños -->
                    <div class="col-xl-3 ">
                      <label for="baños" class="form-label">Baños</label>
                      <input type="number" class="form-control" id="baños">
                    </div>
                    
        
                  <div class="col-xl-3">
                    <button type="submit" class="boton mb-3">BUSCAR</button>
                  </div>
                </form>
              </div>
               </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin acordeon -->