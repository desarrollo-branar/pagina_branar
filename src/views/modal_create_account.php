<!-- Modal -->
<div class="modal fade" id="registerAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registerAccountLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="registerAccountLabel">Create Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="../register/account/" method="post" enctype="multipart/form-data" class="container">
            <div class="form-group">
                <label for="title">Nombre</label>
                <input type="text" class="form-control" name="first_name">
            </div>
            <div class="form-group">
                <label for="title">Apellido</label>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="form-group">
                <label for="title">Correo Electronico</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="title">Nombre de usuario</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="title">Contrasenia</label>
                <input type="text" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Crear publicacion</button>
        </form>

      </div>
    </div>
  </div>
</div>