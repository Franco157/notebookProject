<?php
/* Smarty version 3.1.39, created on 2021-11-24 19:45:54
  from 'D:\xampp\htdocs\projects\web2\templates\notebook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e8862006d69_32152787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '570b15094613b2734df57c9e9656b593542f022a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projects\\web2\\templates\\notebook.tpl',
      1 => 1637779548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/vue/formComment.vue' => 1,
    'file:templates/vue/comments.vue' => 1,
  ),
),false)) {
function content_619e8862006d69_32152787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
<?php } else { ?>
<h1 class="h1-general"> Notebook marca <?php echo $_smarty_tpl->tpl_vars['notebook']->value->nombre;?>
 </h1>
    <ul class="lista-notebooks">
        <li>Procesador: <?php echo $_smarty_tpl->tpl_vars['notebook']->value->procesador;?>
</li>
        <li>Memoria RAM: <?php echo $_smarty_tpl->tpl_vars['notebook']->value->memoria_ram;?>
</li>
        <?php if ($_smarty_tpl->tpl_vars['notebook']->value->placa_video) {?>
            <li>Placa de video: <?php echo $_smarty_tpl->tpl_vars['notebook']->value->placa_video;?>
</li>
        <?php } else { ?>
            <li>Placa de video: OnBoard</li>
        <?php }?>
        
        <li>Disco Duro: <?php echo $_smarty_tpl->tpl_vars['notebook']->value->disco;?>
</li>
        <?php if ($_smarty_tpl->tpl_vars['notebook']->value->imagen) {?>
            <li><img class="img-notebook" alt="notebook gamer" src="<?php echo $_smarty_tpl->tpl_vars['notebook']->value->imagen;?>
"></li>
        <?php } else { ?>
            <li><img class="img-notebook" alt="notebook gamer" src="img/<?php echo $_smarty_tpl->tpl_vars['notebook']->value->nombre;?>
.jpg"></li>
        <?php }?>
        
    </ul>
     <section id = seccionComentario visible= <?php echo $_smarty_tpl->tpl_vars['userLogged']->value != null && $_smarty_tpl->tpl_vars['userLogged']->value['email'];?>
>
        <?php $_smarty_tpl->_subTemplateRender('file:templates/vue/formComment.vue', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:templates/vue/comments.vue', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </section>
   <?php echo '<script'; ?>
 src="js/comments.js"><?php echo '</script'; ?>
>
   <?php }?>
</div>
<?php }
}
