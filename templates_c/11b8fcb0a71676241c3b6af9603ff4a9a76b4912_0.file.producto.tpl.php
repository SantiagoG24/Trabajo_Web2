<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:21:15
  from 'C:\xampp\Proyectos\htdocs\WEB-2\Trabajo_Web2\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dff8bb228f4_73163473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11b8fcb0a71676241c3b6af9603ff4a9a76b4912' => 
    array (
      0 => 'C:\\xampp\\Proyectos\\htdocs\\WEB-2\\Trabajo_Web2\\templates\\producto.tpl',
      1 => 1666056064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dff8bb228f4_73163473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h5>
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</p>
                </div>
</div>
<a href="<?php echo BASE_URL;?>
home">Volver inicio</a>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
