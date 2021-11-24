'use strict';
 
// ----------- API REST ----------- 


function getComments() {

    listaComentarios.error = false;
    listaComentarios.loading = true;
    listaComentarios.notComment=false;
    listaComentarios.notebookComments = [];

    let notebookId = getNotebookId();
    fetch('api/comments/'+notebookId)
    .then( response =>{ 
        if (response.status == 200)
        {
            return response.json();
            
        }else{
            return null;
        }
    })
    .then (notebookComments => {
        if (notebookComments == null)
        {
            // error
            listaComentarios.error = true;
        }
        else{
            if (notebookComments == "Sin comentarios") {
            listaComentarios.notComment=true;
            }
            else {
                listaComentarios.notebookComments = notebookComments;
            }
        }
        listaComentarios.loading = false;
    })
    .catch(exception => console.log(exception));
}

function newComment(comment) {
    fetch('api/comments', {
        method: 'POST',
        headers: {'Content-Type':'application/json'},
        body: JSON.stringify(comment)
    })
    .then( response =>{ 
        if (response.status == 200)
        {
            getComments();
            alert('El comentario fue agregado');
            
        }else{
            alert('El comentario no pudo ser enviado');
        }
    })
    .catch(exception => console.log(exception));
}

function deleteComment(commentID) {
    fetch('api/comments/'+commentID,{
        method: 'DELETE',
    }) 
    .then( response =>{ 
        if (response.status == 200)
        {
            getComments();
            alert('El comentario fue eliminado');
            
        }else{
            alert('El comentario no pudo ser eliminado');
        }
    })
    .catch(exception => console.log(exception));
}

// ----------- FIN API REST -----------

$(document).ready(function (){
    getComments();
});


// ------------ VUE ------------
let listaComentarios = new Vue({
    el: '#comments', 
    data: {
        error: false,
        loading: true,
        notComment: false,
        visible: document.querySelector("#seccionComentario").getAttribute('visible') == 1,
        notebookComments: []
    },
    methods: {
         eliminarComentario: function (commentID) {
            deleteComment(commentID);
        }
    }
});

let nuevoComentario = new Vue({
    el:'#newComment',
    data: {
        userComment: null,
        visible: document.querySelector("#seccionComentario").getAttribute('visible')
    },
    methods: 
    {
        guardarComentario: function(e) {
            e.preventDefault(e);

            let comment = {
                notebook: getNotebookId(), 
                calificacion: getPuntuacion(),
                texto: userComment.value
            }
          
            if ( comment.calificacion != 0)
            {
                newComment(comment);
                resetData();
            }
            else{
                alert('No olvides dar una nota ;-)');
            }
        },
    },
});

// ----------- fin VUE --------------

function getNotebookId() {
    let urlParts = window.location.href.split('/');
    return parseInt(urlParts[urlParts.length - 1]);
}

function getPuntuacion()
{
    let star = document.querySelector('input[name="rating"]:checked');
    if ( star != null)
        return star.value;
    else
        return 0;
}

function resetData(){
    document.getElementById("userComment").value= "";
    document.querySelector('input[name="rating"]:checked').checked = false;
}
