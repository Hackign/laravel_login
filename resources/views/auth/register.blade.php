<!doctype html>
<html lang="en">
    <head>
        <title>Gustavo Castillo</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <section class="vh-100" style="background-color: #9A616D;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                  <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="assets\CG.jpeg"
                              alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                          </div>
                      <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
          
                          <form action="{{route('register')}}" method="POST">
                            @csrf
                            
          
                            <div class="d-flex align-items-center mb-3 pb-1">
                                <img src="assets\_7cf4165c-08a0-4d2a-aab7-74f48fa472a6.jpeg" alt="Logo" class="me-3" style="width: 5em; height: 5em; object-fit: cover; border-radius: 50%;">
                                <span class="h4 fw-bold mb-0" style="font-size: 1.25rem;"></span>
                            </div>
                            
                            
                            
                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registrarse</h5>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form2Example17">Nombre</label>
                                <input type="text" name="name" id="form2Example11" class="form-control"
                                placeholder="ingresar Nombre" />
                              </div>
          
                              <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form2Example17">Correo</label>
                                <input type="email" name="email" id="form2Example11" class="form-control"
                                placeholder="ingresar Correo" />
                              </div>
          
                              <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form2Example17">Contraseña</label>
                                <input type="password" name="password" id="form2Example22" class="form-control" />
                              </div>

                              <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form2Example17">Confirmar Contraseña</label>
                                <input type="password" name="password_confirmation" id="form2Example22" class="form-control" />
                              </div>

                              <div class="pt-1 mb-4">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Registrate</button>
                              </div>
                                     
                         
                        
                            <p class="mb-5 pb-lg-2" style="color: #393f81;">ya tienes una cuenta? 
                                <a href="{{route('login')}}"style="color: #393f81;">Inicia sesion</a></p>
                            
                          </form>
          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
