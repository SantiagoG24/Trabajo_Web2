<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:41:54
  from 'C:\xampp\Proyectos\htdocs\WEB-2\Trabajo_Web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349bb827c4ad9_40598766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e200405dd096e332460cdc7ad50b5037062833bb' => 
    array (
      0 => 'C:\\xampp\\Proyectos\\htdocs\\WEB-2\\Trabajo_Web2\\templates\\login.tpl',
      1 => 1665776059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349bb827c4ad9_40598766 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" action="verificar">
        <label for="fcategoria">Inicio de Secion:</label>
        
        <input type="submit">
    </form>
    <form method="POST" action="verificar">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="home">Volver inicio</a><?php }
}
