
<div class="container">
<h1 class="h1-general"> Marcas</h1>
    <ul>
        {foreach from=$listaMarcas item=marca}
            <a href="verMarca/{$marca->nombre}">
                <li class="lista-notebooks">{$marca->nombre}
                    <img class="img-notebooks" alt="notebook gamer" src="img/{$marca->nombre}.jpg">
                </li>
                {if ( isset($userLogged) && $userLogged['admin']) }
                    
                    <button onclick="location.href='editMarca/{$marca->id_marca}'">Editar</button>
                    <button onclick="location.href='borrarMarca/{$marca->id_marca}'">Borrar</button>
                {/if}
            </a>
        {/foreach}
    </ul> 
</div>