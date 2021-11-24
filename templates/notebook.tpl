{include 'templates/header.tpl'}
<div class="container">
{if $error}
    <div class="alert alert-danger" role="alert">
        {$error}
    </div>
{else}
<h1 class="h1-general"> Notebook marca {$notebook->nombre} </h1>
    <ul class="lista-notebooks">
        <li>Procesador: {$notebook->procesador}</li>
        <li>Memoria RAM: {$notebook->memoria_ram}</li>
        {if $notebook->placa_video}
            <li>Placa de video: {$notebook->placa_video}</li>
        {else}
            <li>Placa de video: OnBoard</li>
        {/if}
        
        <li>Disco Duro: {$notebook->disco}</li>
        {if $notebook->imagen}
            <li><img class="img-notebook" alt="notebook gamer" src="{$notebook->imagen}"></li>
        {else}
            <li><img class="img-notebook" alt="notebook gamer" src="img/{$notebook->nombre}.jpg"></li>
        {/if}
        
    </ul>
     <section id = seccionComentario visible= {$userLogged!=null && $userLogged['email']}>
        {include 'templates/vue/formComment.vue'}
        {include 'templates/vue/comments.vue'}
    </section>
   <script src="js/comments.js"></script>
   {/if}
</div>
