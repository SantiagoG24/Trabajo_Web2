<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:17:30
  from 'C:\xampp\Proyectos\htdocs\WEB-2\Trabajo_Web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d720acff337_10752176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e200405dd096e332460cdc7ad50b5037062833bb' => 
    array (
      0 => 'C:\\xampp\\Proyectos\\htdocs\\WEB-2\\Trabajo_Web2\\templates\\login.tpl',
      1 => 1666019772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634d720acff337_10752176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
