<?php
/* Smarty version 4.2.1, created on 2022-10-14 22:49:21
  from 'C:\xampp\Proyectos\htdocs\WEB-2\Trabajo_Web2\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349cb511de800_49573971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11b8fcb0a71676241c3b6af9603ff4a9a76b4912' => 
    array (
      0 => 'C:\\xampp\\Proyectos\\htdocs\\WEB-2\\Trabajo_Web2\\templates\\producto.tpl',
      1 => 1665780375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349cb511de800_49573971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="card" style="width: 18rem;">
                <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h5>
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</p>
                    <a href="producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Ver Producto</a>
                </div>
</div>
<a href="home">Volver inicio</a>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
