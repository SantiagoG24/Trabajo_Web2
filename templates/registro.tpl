{include 'templates/header.tpl'}
<form method="POST" action="registrar">
  <div class="mb-3">
    <label for="fcategoria">Registro:</label>
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="home">Volver inicio</a>
{include 'templates/footer.tpl'}