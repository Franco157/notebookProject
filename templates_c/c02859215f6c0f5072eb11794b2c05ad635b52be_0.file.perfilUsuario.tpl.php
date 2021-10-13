<?php
/* Smarty version 3.1.39, created on 2021-10-11 06:17:19
  from 'D:\xampp\htdocs\projects\web2\templates\perfilUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6163bacf30e397_11922773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c02859215f6c0f5072eb11794b2c05ad635b52be' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projects\\web2\\templates\\perfilUsuario.tpl',
      1 => 1633925837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6163bacf30e397_11922773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
<h1> Tus datos </h1>
    <label for="usuario">Usuario: </label> <label for="usuarioDB"> <?php echo $_smarty_tpl->tpl_vars['userData']->value['user'];?>
 </label>

    <label for="email">Email: </label> <label for="emailDB"> <?php echo $_smarty_tpl->tpl_vars['userData']->value['email'];?>
 </label>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
