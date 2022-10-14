<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:52:16
  from 'C:\xampp\Proyectos\htdocs\WEB-2\Trabajo_Web2\templates\filtro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349bdf0d287d0_99714687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '223832e7e84306a696a669ef2de5a0e2e129ce8c' => 
    array (
      0 => 'C:\\xampp\\Proyectos\\htdocs\\WEB-2\\Trabajo_Web2\\templates\\filtro.tpl',
      1 => 1665776065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349bdf0d287d0_99714687 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Filtro:</h1>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?> {
    <div class="card" style="width: 18rem;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h5>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</p>
                        <a href="producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria;?>
">Ver Producto</a>
                    </div>
                </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<a href="home">Volver inicio</a><?php }
}
