<div class="row">
        <div class="col s6">
            <div class="card">
            <div class="card-content">
            <div class="row">
                <form class="col s12" id="formRegister" action="services/create.php" method="POST">
                  <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Nombre" id="name" type="text" class="validate" name="name">
                      <label for="name">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                      <input placeholder="Usuario" id="user" type="text" class="validate" name="user">
                      <label for="user">Usuario</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="user" id="type" type="text" class="validate" name="type"  disabled>
                      <label for="type">Tipo</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="password" type="password" class="validate" name="password"> 
                      <label for="password">Contraseña</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" type="email" class="validate" name="email">
                      <label for="email">Correo Electronico</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                        </button>
                    </div>
                  </div>
                </form>
                
              </div>
            </div>
            </div>    
        </div>
        <div class="col s6">6-columns (one-half)</div>
      </div>