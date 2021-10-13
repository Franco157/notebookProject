<?php
/* Smarty version 3.1.39, created on 2021-10-11 18:55:59
  from 'D:\xampp\htdocs\projects\web2\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61646c9f533c44_84335488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce36eb5a9701d292ee85bed8799a3b4f0fb7ddbd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projects\\web2\\templates\\nav.tpl',
      1 => 1633971357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61646c9f533c44_84335488 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Inicio</a></li>
      <li class="nav-item">
      <li class="nav-item active">
        <a class="nav-link" href="notebooks">Notebooks</a></li>
      <li class="nav-item">   

      <ul>
          <!--SI HAY UN USUARIO ACTIVO-->
          <?php if ((isset($_smarty_tpl->tpl_vars['userLogged']->value)) && $_smarty_tpl->tpl_vars['userLogged']->value) {?>
              <div class="navbar-nav ml-auto">
                  <span class="navbar-text nav-link active"><?php echo $_smarty_tpl->tpl_vars['userLogged']->value['email'];?>
</span>
                    <!--SI EL USUARIO ACTIVO NO ES ADMINISTRADOR-->
                  <?php if ((!($_smarty_tpl->tpl_vars['userLogged']->value['admin']))) {?>
                      <a class="nav-item nav-link " href="perfilUsuario">Tu Perfil<span class="sr-only"></span></a>
                  <?php } else { ?>
                      <div class="navbar-nav ml-auto">
                          <a class="nav-item nav-link " href="usuarios">Lista de usuarios<span class="sr-only"></span></a>
                      </div>
                  <?php }?>
                  <a class="nav-item nav-link " href="logout">Logout<span class="sr-only"></span></a>
              </div>
          <?php } else { ?>
              <!--SI NO HAY UN USUARIO ACTIVO-->
              <div class="navbar-nav ml-auto">
                  <a class="nav-item nav-link " href="login">Login<span class="sr-only"></span></a>
              </div>
              <div class="navbar-nav ml-auto">
                  <a class="nav-item nav-link " href="registro">Registrar<span class="sr-only"></span></a>
              </div>
          <?php }?>
      </ul>            
    </ul>
  </div>
</nav><?php }
}
