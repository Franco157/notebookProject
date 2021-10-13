<?php
/* Smarty version 3.1.39, created on 2021-10-13 05:18:50
  from 'E:\XAMPP\htdocs\proyectos\web2\templates\formMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6166501ab231e5_96272400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '491165f44a3b37fa3444c207b0bbc583bfc76dcc' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\proyectos\\web2\\templates\\formMarca.tpl',
      1 => 1634095120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6166501ab231e5_96272400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <form class="form-general" action="addMarca" method="POST">
        <label for="marca">Marca </label>
        <input type="text" name="F_marca" required />
        <button>AGREGAR</button>
    </form>
</div>
<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
<?php }
$_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
