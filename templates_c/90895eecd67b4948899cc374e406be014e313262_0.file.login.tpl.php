<?php
/* Smarty version 3.1.39, created on 2021-10-11 04:55:28
  from 'D:\xampp\htdocs\projects\web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6163a7a010fba0_26272470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90895eecd67b4948899cc374e406be014e313262' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projects\\web2\\templates\\login.tpl',
      1 => 1626527449,
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
function content_6163a7a010fba0_26272470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <form action="verify" method="POST">
    <?php $_smarty_tpl->_subTemplateRender('file:templates/formEmailPass.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <button>Ingresar</button>
    </form>
    <p>¿No tiene cuenta?</p>
    <button id="botonCrearCuenta" onclick="location.href='registro'" >Crear cuenta</button>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
