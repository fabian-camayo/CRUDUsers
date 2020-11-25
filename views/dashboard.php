<div class="row">
        <!--Formulario usuarios-->
        <div class="col s6">
            <div class="card">
            <div class="card-content">
            <div class="row">

                <h5 class="center-align">
                  <?php echo $usr->id != null ? $usr->name : 'Nuevo Usuario'; ?>
                </h5>

                <form class="col s12" id="frm-user" action="?c=user&a=Save" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $usr->id; ?>" />  
                <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Nombre" id="name" type="text" class="validate" name="name" value="<?php echo $usr->name; ?>" data-validacion-tipo="requerido|min:3">
                      <label for="name">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                      <input placeholder="Usuario" id="user" type="text" class="validate" name="user" value="<?php echo $usr->user; ?>" data-validacion-tipo="requerido|min:10">
                      <label for="user">Usuario</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="user" id="type" type="text" class="validate" name="type" disabled>
                      <label for="type">Tipo</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="password" type="password" class="validate" name="password" data-validacion-tipo="requerido|min:5"> 
                      <label for="password">Contraseña</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" type="email" class="validate" name="email" value="<?php echo $usr->email; ?>" data-validacion-tipo="requerido|email">
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


        <script>
          $(document).ready(function(){
            $("#frm-user").submit(function(){
              return $(this).validate();
           });
          })
        </script>


        <!--Lista de usuarios-->
        <div class="col s6">
        <div class="card">
        <div class="card-content">
        <table>
          <caption><h5 class="center-align">Lista de Usuarios</h5></caption>
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Tipo</th>
              <th>Usuario</th>
              <th>Correo</th>
              <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
        <?php foreach($this->data->Show() as $r): ?>
        <tr>
            <td><?php echo $r->name; ?></td>
            <td><?php echo $r->type; ?></td>
            <td><?php echo $r->user; ?></td>
            <td><?php echo $r->email; ?></td>
            <td>
                <a href="?c=user&a=Index&id=<?php echo $r->id; ?>" class="secondary-content"><i class="material-icons">create</i></a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este usuario?');" href="?c=user&a=Delete&id=<?php echo $r->id; ?>" class="secondary-content"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        <?php endforeach; ?>   
        </tbody>
      </table>
      </div>
      </div>
  </div>
</div>