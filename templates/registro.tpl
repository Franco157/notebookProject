{include 'templates/header.tpl'}

<div class="container">
    <form class="form-general" action="registrar" method="POST">
        <label for="usuario"><h3>Usuario</h3></label>
        <input type="text" name="F_usuario" placeholder="" required />

        {include 'templates/formEmailPass.tpl'}
        <button>Registrate</button>
    </form>
</div>

{include 'templates/footer.tpl'}