{include 'templates/header.tpl'}
<div class="container">
    <form class="form-general" action="modificarNotebook/{$id_notebook}" method="POST">
        <label for="procesador">Procesador </label>
        <input type="text" name="F_procesador" placeholder="Intel i3 7100u" required />
        <label for="ram">Memoria Ram</label>
        <input type="text" name="F_ram" placeholder="8gb" required  />
        <label for="placa">Placa de Video</label>
        <input type="text" name="F_placa" placeholder="GTX 1050 ti" required  />
        <label for="disco">Disco</label>
        <input type="text" name="F_disco" placeholder="500gb" required  />
        <label for="marcas">Marca:</label>
        <select name="F_marca">
            {foreach from=$listaMarcas item=marca}
                <option value="{$marca->id_marca}"> {$marca->nombre}
                </option>
            {/foreach}
        </select>
        <button>MODIFICAR</button>
    </form>
</div>
{if $error}
    <div class="alert alert-danger" role="alert">
        {$error}
    </div>
{/if}
{include 'templates/footer.tpl'}