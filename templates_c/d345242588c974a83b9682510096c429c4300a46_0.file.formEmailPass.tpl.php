<?php
/* Smarty version 3.1.39, created on 2021-10-12 18:29:55
  from 'E:\XAMPP\htdocs\proyectos\web2\templates\formEmailPass.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165b8037c83b0_85051909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd345242588c974a83b9682510096c429c4300a46' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\proyectos\\web2\\templates\\formEmailPass.tpl',
      1 => 1634056194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6165b8037c83b0_85051909 (Smarty_Internal_Template $_smarty_tpl) {
?><label for="email"><h3>Email </h3></label>
<input type="email" name="F_email" placeholder="ejemplo@ejemplo.com" required />
<label for="contraseña"><h3>Contraseña </h3></label>
<input type="password" name="F_contraseña" placeholder="" required  />
<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
<?php }
}
}
