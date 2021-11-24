<?php
/* Smarty version 3.1.39, created on 2021-11-20 19:29:23
  from 'D:\xampp\htdocs\projects\web2\templates\formMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61993e837ff253_68469770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a0391387207f0837f00013aca6ab4aee2a05f9c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projects\\web2\\templates\\formMarca.tpl',
      1 => 1637432841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61993e837ff253_68469770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <form class="form-general" action="addMarca" method="POST">
        <label for="marca">Marca </label>
        <input type="text" name="F_marca" required />
        <button>AGREGAR</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
