<?php
/* Smarty version 3.1.39, created on 2021-10-11 12:13:14
  from 'D:\xampp\htdocs\projects\web2\templates\notebook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61640e3af3c719_54851091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '570b15094613b2734df57c9e9656b593542f022a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projects\\web2\\templates\\notebook.tpl',
      1 => 1633947189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_61640e3af3c719_54851091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<h1> Notebook <?php echo $_smarty_tpl->tpl_vars['notebook']->value->nombre;?>
 </h1>
    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['notebook']->value->procesador;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['notebook']->value->memoria_ram;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['notebook']->value->placa_video;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['notebook']->value->disco;?>
</li>
        <li><img alt="notebook gamer" src="img/<?php echo $_smarty_tpl->tpl_vars['notebook']->value->nombre;?>
.jpg"></li>
    </ul>
</div><?php }
}
