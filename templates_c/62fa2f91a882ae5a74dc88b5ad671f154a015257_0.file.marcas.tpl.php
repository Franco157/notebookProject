<?php
/* Smarty version 3.1.39, created on 2021-10-13 17:37:31
  from 'E:\XAMPP\htdocs\proyectos\web2\templates\marcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6166fd3b0684b3_99279005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62fa2f91a882ae5a74dc88b5ad671f154a015257' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\proyectos\\web2\\templates\\marcas.tpl',
      1 => 1634139436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6166fd3b0684b3_99279005 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<h1 class="h1-general"> Marcas</h1>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaMarcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
            <a href="verMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
">
                <li class="lista-notebooks"><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>

                    <img class="img-notebooks" alt="notebook gamer" src="img/<?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
.jpg">
                </li>
                <?php if (((isset($_smarty_tpl->tpl_vars['userLogged']->value)) && $_smarty_tpl->tpl_vars['userLogged']->value['admin'])) {?>
                    
                    <button onclick="location.href='editMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
'">Editar</button>
                    <button onclick="location.href='borrarMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
'">Borrar</button>
                <?php }?>
            </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul> 
</div><?php }
}
