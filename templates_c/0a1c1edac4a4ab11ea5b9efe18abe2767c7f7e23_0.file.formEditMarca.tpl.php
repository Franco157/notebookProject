<?php
/* Smarty version 3.1.39, created on 2021-11-20 19:29:19
  from 'D:\xampp\htdocs\projects\web2\templates\formEditMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61993e7fbffb90_00343612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a1c1edac4a4ab11ea5b9efe18abe2767c7f7e23' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projects\\web2\\templates\\formEditMarca.tpl',
      1 => 1637432835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61993e7fbffb90_00343612 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
