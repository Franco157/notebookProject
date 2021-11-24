<?php
/* Smarty version 3.1.39, created on 2021-11-24 13:39:30
  from 'D:\xampp\htdocs\projects\web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e3282474312_62599023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc8ec8c55b2c8af8cdf1241ac6e9e68e640915ba' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projects\\web2\\templates\\header.tpl',
      1 => 1637756593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/nav.tpl' => 1,
  ),
),false)) {
function content_619e3282474312_62599023 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Notebook info</title>
    
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
