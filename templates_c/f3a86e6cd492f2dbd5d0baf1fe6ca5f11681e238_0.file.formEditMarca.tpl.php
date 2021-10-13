<?php
/* Smarty version 3.1.39, created on 2021-10-13 16:27:33
  from 'E:\XAMPP\htdocs\proyectos\web2\templates\formEditMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6166ecd51b4c30_06506967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3a86e6cd492f2dbd5d0baf1fe6ca5f11681e238' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\proyectos\\web2\\templates\\formEditMarca.tpl',
      1 => 1634095122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6166ecd51b4c30_06506967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <form class="form-general" action="modificarMarca/<?php echo $_smarty_tpl->tpl_vars['id_marca']->value;?>
" method="POST">
        <label for="marca">Marca </label>
        <input type="text" name="F_marca" required />
        <button>MODIFICAR</button>
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
