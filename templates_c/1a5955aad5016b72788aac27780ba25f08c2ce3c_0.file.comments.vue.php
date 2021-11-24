<?php
/* Smarty version 3.1.39, created on 2021-11-20 21:00:20
  from 'D:\xampp\htdocs\projects\web2\templates\vue\comments.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619953d4b43a07_59745240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a5955aad5016b72788aac27780ba25f08c2ce3c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projects\\web2\\templates\\vue\\comments.vue',
      1 => 1637438011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619953d4b43a07_59745240 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="comments">
<h3>COMENTARIOS</h3>

    <div v-if="error">
        <p>Lo sentimos, no es posible obtener la información en este momento, por favor intente nuevamente mas tarde</p>    
    </div>

<div v-if="notComment">
        <p> Publica la primer reseña!</p>    
    </div>
    <div v-if="loading">Cargando reseñas...</div>

    <div v-if="!loading">
        <div v-for="(comentario) in notebookComments" style="width: 18rem;">
            <div>
                <h5>{{comentario.nombre}}</h5>
                <h6>Puntuacion: {{comentario.puntuacion}}</h6>
                <p>{{comentario.comentario}}</p>
                <button v-on:click="eliminarComentario(comentario.id_comentario)" v-show="visible" >Eliminar</button>    
            </div>
        </div>
    </div>
</section>

<?php }
}
