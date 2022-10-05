<?php
  include("conexion1.php");

  include 'layouts/header.php';

?>
  
    <div class="container">
            <div class="pt-5 " >
                <h1 class="ps-2 pt-4 pb-3 bi bi-calendar2-plus"> Nueva sesión</h1>
            </div>
            <div>
                <h2>1.- Selecciona la empresa</h2>
            </div>
<!-- Selección de imagenes -->
      <form action="insertar.php" method="POST" >
        <div class="row py-2">
              <div class="form-check col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <input class="form-check-input" type="radio" name="empresa" value="vmw" id="vmw">
                <label class="form-check-label" for="vmw">
                <img src="img/Empresa_1.png" alt="">VMW
                </label>
              </div>
              <div class="form-check col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <input class="form-check-input" type="radio" name="empresa" value="festival" id="festival" >
                <label class="form-check-label" for="festival">
                <img src="img/Empresa_2.png" alt="">Festival
                </label>
              </div>
              <div class="form-check col-sm-2 col-md-2 col-lg-2 col-xl-2"> 
                <input class="form-check-input" type="radio" name="empresa" value="trasher" id="trasher">
                <label class="form-check-label" for="trasher">
                <img src="img/Empresa_3.png" alt="">Thrasher
                </label>
              </div>
              <div class="form-check col-sm-2 col-md-2 col-lg-2 col-xl-2"> 
                <input class="form-check-input" type="radio" name="empresa" value="google" id="google">
                <label class="form-check-label" for="google">
                <img src="img/Empresa_4.png" alt="">Google
                </label>
              </div>
              <div class="form-check col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <input class="form-check-input" type="radio" name="empresa" value="aorus" id="aorus">
                <label class="form-check-label" for="aorus">
                <img src="img/Empresa_5.png" alt="">Aourus
                </label>
              </div>
              <div class="form-check col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <input class="form-check-input" type="radio" name="empresa" value="starbucks" id="starbucks">
                <label class="form-check-label" for="starbucks">
                <img src="img/Empresa_6.png" alt="">Starbucks
                </label>
              </div>
              <h2>2.-Selecciona la fecha</h2>
              <div class="row">
                <div col-sm-6 col-md-6 col-lg-6 col-xl-12>
                  <p>Fecha y hora inicio:</p>
                  <input type="datetime-local" name="fecha_antes"> 
                </div>
                <div col-sm-6 col-md-6 col-lg-6 col-xl-12>
                  <p>Fecha y hora que se finalizo:</p>
                  <input type="datetime-local" name="fecha_despues">
                </div>
              </div>
              <h2>3.- Selecciona el asociado</h2>
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="asociado" value="Luis Coronado" id="asociado1">
                  <label class="form-check-label" for="asociado1">
                    Luis coronado
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="asociado" value="Pedro Moreno" id="asociado2">
                  <label class="form-check-label" for="asociado2">
                    Pedro Moreno
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="asociado" value="Humberto Suazo" id="asociado3">
                  <label class="form-check-label" for="asociado3">
                    Humberto Suazo
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="asociado" value="Rosa Mendez" id="asociado4">
                  <label class="form-check-label" for="asociado4">
                    Rosa Mendez
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="asociado" value="Carlos Marquez" id="asociado5">
                  <label class="form-check-label" for="asociado5">
                    Carlos Marquez
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="asociado" value="Daniela Vera" id="asociado6">
                  <label class="form-check-label" for="asociado6">
                    Daniela Vera
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="asociado" value="Erika Perez" id="asociado7">
                  <label class="form-check-label" for="asociado7">
                    Erika Perez
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="asociado" value="Ismerai Roman" id="asociado8">
                  <label class="form-check-label" for="asociado8">
                    Ismerai Roman
                  </label>
                </div>
              </div>
              <h2>4.- Selecciona el cointegrador</h2>
              <div class="row">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="cointegrador" value="Luis Coronado" id="cointegrador1">
                  <label class="form-check-label" for="cointegrador1">
                    Luis coronado
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="cointegrador" value="Pedro Moreno" id="cointegrador2">
                  <label class="form-check-label" for="cointegrador2">
                    Pedro Moreno
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="cointegrador" value="Humberto Suazo" id="cointegrador3">
                  <label class="form-check-label" for="cointegrador3">
                    Humberto Suazo
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="cointegrador" value="Rosa Mendez" id="cointegrador4">
                  <label class="form-check-label" for="cointegrador4">
                    Rosa Mendez
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="cointegrador" value="Carlos Marquez" id="cointegrador5">
                  <label class="form-check-label" for="cointegrador5">
                    Carlos Marquez
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="cointegrador" value="Daniela Vera" id="cointegrador6">
                  <label class="form-check-label" for="cointegrador6">
                    Daniela Vera
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="cointegrador" value="Erika Perez" id="cointegrador7">
                  <label class="form-check-label" for="cointegrador7">
                    Erika Perez
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="cointegrador" value="Ismerai Roman" id="cointegrador8">
                  <label class="form-check-label" for="cointegrador8">
                    Ismerai Roman
                  </label>
                </div>
              </div>
              <h2>5.-Selecciona el tipo de sesión</h2>
              <div class="row">
                <select name="sesion" class="form-select" aria-label="Default select example">
                  <option selected>Selecciona el tipo de sesión</option>
                  <option value="syndag - PIPS">Syndag - PIPS</option>
                  <option value="synerteam - #PIPS">Synerteam - #PIPS</option>
                  <option value="poc">POC</option>
                  <option value="mision">Mision</option>
                  <option value="estructura">Estructura</option>
                  <option value="roles y responsabilidades">Roles y responsabilidades</option>
                  <option value="recompensas">Recompensas</option>
                  <option value="otros">otros</option>
                </select>
              </div>
        </div>   
        <button type="submit" class="btn btn-success" name="guardar_sesion" value="guarda sesion"> Enviar</button>
      </form>     
    </div>
  
<?php
  include 'layouts/footer.php';
?>