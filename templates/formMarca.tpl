{include 'templates/header.tpl'}
<div class="container">
    <form class="form-general" action="addMarca" method="POST">
        <label for="marca">Marca </label>
        <input type="text" name="F_marca" required />
        <button>AGREGAR</button>
    </form>
</div>
{if $error}
    <div class="alert alert-danger" role="alert">
        {$error}
    </div>
{/if}
{include 'templates/footer.tpl'}