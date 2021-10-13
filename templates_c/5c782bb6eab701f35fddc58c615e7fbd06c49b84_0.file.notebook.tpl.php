<?php
/* Smarty version 3.1.39, created on 2021-10-13 17:39:33
  from 'E:\XAMPP\htdocs\proyectos\web2\templates\notebook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6166fdb5efe9a3_48177333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c782bb6eab701f35fddc58c615e7fbd06c49b84' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\proyectos\\web2\\templates\\notebook.tpl',
      1 => 1634139569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6166fdb5efe9a3_48177333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<h1 class="h1-general"> Notebook marca <?php echo $_smarty_tpl->tpl_vars['notebook']->value->nombre;?>
 </h1>
    <ul class="lista-notebooks">
        <li>Procesador: <?php echo $_smarty_tpl->tpl_vars['notebook']->value->procesador;?>
</li>
        <li>Memoria RAM: <?php echo $_smarty_tpl->tpl_vars['notebook']->value->memoria_ram;?>
</li>
        <li>Placa de video: <?php echo $_smarty_tpl->tpl_vars['notebook']->value->placa_video;?>
</li>
        <li>Disco Duro: <?php echo $_smarty_tpl->tpl_vars['notebook']->value->disco;?>
</li>
        <li><img alt="notebook gamer" src="img/<?php echo $_smarty_tpl->tpl_vars['notebook']->value->nombre;?>
.jpg"></li>
    </ul>
</div><?php }
}
