<?php
/* Smarty version 3.1.39, created on 2021-11-18 17:20:11
  from 'D:\xampp\htdocs\projects\web2\templates\tablaUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61967d3b2e6622_80791128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ff45e561ac33718195f04124347631b287dae83' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projects\\web2\\templates\\tablaUsuarios.tpl',
      1 => 1634071385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61967d3b2e6622_80791128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="h1-general"> LISTA DE USUARIOS </h1>
<div class=" col-auto m-2 text-center">
    <table class="table  table-dark">
        <thead>
            <tr class="align-middle">
                <th style=" position: sticky; top: 0; z-index: 1; ">USUARIO</th>
                <th style=" position: sticky; top: 0; z-index: 1; ">EMAIL</th>
                <th style=" position: sticky; top: 0; z-index: 1; ">PERMISOS DE ADMINISTRACION</th>
                <th style=" position: sticky; top: 0; z-index: 1; ">MODIFICACIONES</th>
                <th style=" position: sticky; top: 0; z-index: 1; "></th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaUsuarios']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                <tr class="align-middle">
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->usuario;?>
</td>

                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                    <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->administrador;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?> SI <?php } else { ?> NO <?php }?></td>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->administrador;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 1) {?>
                        <td>
                            <button onclick="location.href='bajaAdmin/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_usuario;?>
'">Quitar Permisos</button>
                        </td>
                    <?php } else { ?>
                        <td>
                            <button onclick="location.href='altaAdmin/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_usuario;?>
'">Dar Permisos</button>
                        </td>
                    <?php }?>
                    <td>
                        <button onclick="location.href='eliminarUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_usuario;?>
'">BORRAR</button>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
