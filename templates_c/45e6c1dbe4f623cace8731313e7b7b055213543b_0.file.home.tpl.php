<?php
/* Smarty version 3.1.39, created on 2021-10-13 00:05:16
  from 'E:\XAMPP\htdocs\proyectos\web2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6166069cc08c57_67548928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45e6c1dbe4f623cace8731313e7b7b055213543b' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\proyectos\\web2\\templates\\home.tpl',
      1 => 1634075715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/marcas.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6166069cc08c57_67548928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div>
   
        <h1>LOCAL DE COMPUTACION</h1>
    </div>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam nemo, doloribus quae adipisci dolorem non eaque nisi dolorum. Aperiam culpa pariatur inventore autem laboriosam eligendi dignissimos molestiae aspernatur obcaecati voluptates?</p>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/marcas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
