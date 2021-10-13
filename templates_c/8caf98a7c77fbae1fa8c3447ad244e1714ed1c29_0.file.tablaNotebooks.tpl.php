<?php
/* Smarty version 3.1.39, created on 2021-10-11 21:29:00
  from 'D:\xampp\htdocs\projects\web2\templates\tablaNotebooks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6164907c9eac34_82564040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8caf98a7c77fbae1fa8c3447ad244e1714ed1c29' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projects\\web2\\templates\\tablaNotebooks.tpl',
      1 => 1633980506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6164907c9eac34_82564040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1> LISTA DE NOTEBOOKS </h1>
<div class=" col-auto m-2 text-center">
    <table class="table  table-dark">
        <thead>
            <tr class="align-middle">
                <th style=" position: sticky; top: 0; z-index: 1; ">PROCESADOR</th>
                <th style=" position: sticky; top: 0; z-index: 1; ">MEMORIA RAM</th>
                <th style=" position: sticky; top: 0; z-index: 1; ">PLACA DE VIDEO</th>
                <th style=" position: sticky; top: 0; z-index: 1; ">DISCO</th>
                <th style=" position: sticky; top: 0; z-index: 1; ">MARCA</th>
                <th style=" position: sticky; top: 0; z-index: 1; "></th>
                <th style=" position: sticky; top: 0; z-index: 1; "></th>
                <th style=" position: sticky; top: 0; z-index: 1; "></th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaNotebooks']->value, 'note');
$_smarty_tpl->tpl_vars['note']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->do_else = false;
?>
                <tr class="align-middle">
                    <td><?php echo $_smarty_tpl->tpl_vars['note']->value->procesador;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['note']->value->memoria_ram;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['note']->value->placa_video;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['note']->value->disco;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['note']->value->nombre;?>
</td>
                    <td>
                        <button onclick="location.href='notebook/<?php echo $_smarty_tpl->tpl_vars['note']->value->id_notebook;?>
'">VER</button>
                    </td>
                    <td>
                        <button onclick="location.href='formNotebook/<?php echo $_smarty_tpl->tpl_vars['note']->value->id_notebook;?>
'">Editar</button>
                    </td>
                    <td>
                        <button onclick="location.href='borrarNotebook/<?php echo $_smarty_tpl->tpl_vars['note']->value->id_notebook;?>
'">Borrar</button>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <button onclick="location.href='formNotebook'">Agregar notebook</button>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
