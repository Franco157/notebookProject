{literal}
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
{/literal}
