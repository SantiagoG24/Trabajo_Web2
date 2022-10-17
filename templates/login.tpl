{include 'templates/header.tpl'}
<div class="container">
  <form method="POST" action="verificar">
    <div class="mb-3 container">
      <label for="fcategoria">Inicio de Seccion:</label>
      <label for="exampleInputEmail1" class="form-label">Usuario</label>
      <input type="text" name="usuario" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input type="password" name="contraseña" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <a href="home">Volver inicio</a>
</div>
{include 'templates/footer.tpl'}
