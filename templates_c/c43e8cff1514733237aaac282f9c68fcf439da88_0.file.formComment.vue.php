<?php
/* Smarty version 3.1.39, created on 2021-11-20 20:53:21
  from 'D:\xampp\htdocs\projects\web2\templates\vue\formComment.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61995231aaf3b1_35938737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c43e8cff1514733237aaac282f9c68fcf439da88' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projects\\web2\\templates\\vue\\formComment.vue',
      1 => 1637437999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61995231aaf3b1_35938737 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="newComment" v-show="visible">
    <h3> ¿Quieres dejar una reseña? </h3>
    <br>
      <div>
        <input id="star-rating-1" type="radio" name="rating" value="1">
        <input id="star-rating-2" type="radio" name="rating" value="2">
        <input id="star-rating-3" type="radio" name="rating" value="3">
        <input id="star-rating-4" type="radio" name="rating" value="4">
        <input id="star-rating-5" type="radio" name="rating" value="5">
      </div>
    <br>
    <textarea v-model="userComment" id="userComment" rows="8" cols="40" placeholder="Escribe tu reseña aquí!"></textarea>
    <button v-on:click="guardarComentario">Guardar</button>
</section>

<?php }
}
