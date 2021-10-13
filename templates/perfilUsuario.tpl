{include 'templates/header.tpl'}

<div class="container">
<h1> Tus datos </h1>
    <label for="usuario">Usuario: </label> <label for="usuarioDB"> {$userData['user']} </label>

    <label for="email">Email: </label> <label for="emailDB"> {$userData['email']} </label>
</div>

{include 'templates/footer.tpl'}