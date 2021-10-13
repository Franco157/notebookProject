<?php
/* Smarty version 3.1.39, created on 2021-10-12 22:36:05
  from 'E:\XAMPP\htdocs\proyectos\web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165f1b5b80934_60092921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f8f6c8a63cfc73d58ba6d6f2eb02ac97c97f1c0' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\proyectos\\web2\\templates\\login.tpl',
      1 => 1634057113,
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
function content_6165f1b5b80934_60092921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <form class="form-general" action="verify" method="POST">
    <?php $_smarty_tpl->_subTemplateRender('file:templates/formEmailPass.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <button>Ingresar</button>
    </form>
    <p class="p-login">¿No tiene cuenta?</p>
    <button class="btn-login" id="botonCrearCuenta" onclick="location.href='registro'" >Crear cuenta</button>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
