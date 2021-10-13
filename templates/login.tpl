{include 'templates/header.tpl'}

<div class="container">
    <form class="form-general" action="verify" method="POST">
    {include 'templates/formEmailPass.tpl'}
        <button>Ingresar</button>
    </form>
    <p class="p-login">¿No tiene cuenta?</p>
    <button class="btn-login" id="botonCrearCuenta" onclick="location.href='registro'" >Crear cuenta</button>
</div>

{include 'templates/footer.tpl'}