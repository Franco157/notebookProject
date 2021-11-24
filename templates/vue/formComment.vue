{literal}
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
{/literal}
