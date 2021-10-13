{include 'templates/header.tpl'}
<h1 class="h1-general"> LISTA DE USUARIOS </h1>
<div class=" col-auto m-2 text-center">
    <table class="table  table-dark">
        <thead>
            <tr class="align-middle">
                <th style=" position: sticky; top: 0; z-index: 1; ">USUARIO</th>
                <th style=" position: sticky; top: 0; z-index: 1; ">EMAIL</th>
                <th style=" position: sticky; top: 0; z-index: 1; ">PERMISOS DE ADMINISTRACION</th>
                <th style=" position: sticky; top: 0; z-index: 1; ">MODIFICACIONES</th>
                <th style=" position: sticky; top: 0; z-index: 1; "></th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$listaUsuarios item=user}
                <tr class="align-middle">
                    <td>{$user->usuario}</td>

                    <td>{$user->email}</td>
                    <td>{if {$user->administrador}==1} SI {else} NO {/if}</td>
                    {if {$user->administrador}==1}
                        <td>
                            <button onclick="location.href='bajaAdmin/{$user->id_usuario}'">Quitar Permisos</button>
                        </td>
                    {else}
                        <td>
                            <button onclick="location.href='altaAdmin/{$user->id_usuario}'">Dar Permisos</button>
                        </td>
                    {/if}
                    <td>
                        <button onclick="location.href='eliminarUser/{$user->id_usuario}'">BORRAR</button>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>

{include 'templates/footer.tpl'}