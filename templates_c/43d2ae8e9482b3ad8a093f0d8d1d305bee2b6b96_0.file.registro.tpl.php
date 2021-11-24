<?php
/* Smarty version 3.1.39, created on 2021-10-29 17:37:58
  from 'D:\xampp\htdocs\projects\web2\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617c1556df98e2_42084225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43d2ae8e9482b3ad8a093f0d8d1d305bee2b6b96' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projects\\web2\\templates\\registro.tpl',
      1 => 1634057108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/formEmailPass.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_617c1556df98e2_42084225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <form class="form-general" action="registrar" method="POST">
        <label for="usuario"><h3>Usuario</h3></label>
        <input type="text" name="F_usuario" placeholder="" required />

        <?php $_smarty_tpl->_subTemplateRender('file:templates/formEmailPass.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <button>Registrate</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
