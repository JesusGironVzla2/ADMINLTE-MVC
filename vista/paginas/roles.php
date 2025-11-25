<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Administrar roles</h1>



          </div><!-- /.col -->
  

<section class="content" style="width:100%;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-info card-outline">
          <div class="card-header">
            <button type="button" class="btn btn-success crear-perfil" data-toggle="modal" data-target="#modal-crear-usuarios">
              Crear perfil
            </button><br>
          </div><br>
          <div class="card-body">
            <table id="tabla-usuarios" class="table table-bordered table-striped dt-responsive tablas" width="100%">
              <thead>
                <tr>
                  <th style="width:10px">#</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Foto</th>
                  <th>Rol</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>

              
              </tbody>
            </table>






        </div>
      </div>
    </div>
  </div>
   <div class="modal modal-default fade" id="modal-crear-usuarios">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Crear usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label for="nuevo-nombre">Nombre</label>
                <input type="text" class="form-control" id="nuevo-nombre" name="nuevo-nombre" placeholder="Ingresar nombre" required>
              </div>
              <div class="form-group">
                <label for="nuevo-usuario">Usuario</label>
                <input type="text" class="form-control" id="nuevo-usuario" name="nuevo-usuario" placeholder="Ingresar usuario" required>
              </div>
              <div class="form-group">
                <label for="nuevo-password">Contraseña</label>
                <input type="password" class="form-control" id="nuevo-password" name="nuevo-password" placeholder="Ingresar contraseña" required>
              </div>
                    <div class="form-group">
                <label for="nuevo-password">Foto</label>
                <input type="file"  name="subirImgPerfil"  required>
              </div>
              <img class="previsualizarImgPerfil img-fluid py-2" width="100px">
              <p class="help-block small"> Dimensiones 480 * 382 Peso Max 2mb Formato JPG o PNG</p>
              <div class="form-group">
                <label for="nuevo-rol">Rol</label>
                <select class="form-control" id="nuevo-rol" name="nuevo-rol" required>
                  <option value="">Seleccionar rol</option>
                  <option value="Administrador">Administrador</option>
                  <option value="Editor">Editor</option>
                  <option value="Vendedor">Vendedor</option>
                </select>

                <button type="submit" class="btn btn-primary">Guardar usuario</button>
              
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">  Cerrar</button>
 </div>


</section>
