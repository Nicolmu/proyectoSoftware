@extends ('plantilla.plantilla')
@section("titulo","Inicio")
@section("contenido")
<section class="vh-40" style="background-color:08CEA1;">
    <div class="container py-5 h-100">
      <div id= ""class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://www.todofondos.net/wp-content/uploads/1080x1920-iphone-wallpaper-minimalista-135-iphone-wallpaper.jpg"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form>
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #2819ff;"></i>
                      <center><span class="h1 fw-bold mb-0">SENA SERVICIO NACIONAL DE APRENDIZAJE</span></center>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example17">Tipo de Documento</label>
                        <select class="form-control">
                            <option>Cédula de Ciudadanía</option>
                            <option>Tarjeta de Identidad</option>
                            <option>Cédula de Extranjería</option>
                            <option>Número ciego SENA</option>
                            <option>Pasaporte</option>
                            <option>Documento Nacional Identificación</option>
                            <option>Número de Identificación Tributaria</option>
                            <option>PEP - RAMV</option>
                            <option>PEP</option>
                            <option>Permiso por protección Temporal</option>
                           
                          </select>
                          
                       
                      </div>
  
  
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example17">Número Documento</label>
                      <input type="email" placeholder="Ingrese el número de docuemnto"id="form2Example17" class="form-control form-control-lg" />
                      
                     
                    </div>
  
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example27">Contraseña</label>
                      <input type="password"placeholder="Ingrese la contraseña" id="form2Example27" class="form-control form-control-lg" />
                      
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="button">INICIAR</button>
                    </div>

                  <a href=""  style="color: #393f81;">Register here</a></p>
                  
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
