{include 'templates/header.tpl'}
<h1 class="h1-general"> LISTA DE NOTEBOOKS </h1>
<div class=" col-auto m-2 text-center">
    <table class="table  table-dark">
        <thead>
            <tr class="align-middle">
                <th style=" position: sticky; top: 0; z-index: 1; ">PROCESADOR</th>
                <th style=" position: sticky; top: 0; z-index: 1; ">MEMORIA RAM</th>
                <th style=" position: sticky; top: 0; z-index: 1; ">PLACA DE VIDEO</th>
                <th style=" position: sticky; top: 0; z-index: 1; ">DISCO</th>
                <th style=" position: sticky; top: 0; z-index: 1; ">MARCA</th>
                <th style=" position: sticky; top: 0; z-index: 1; "></th>
                {if ( isset($userLogged) && $userLogged['admin']) }
                <th style=" position: sticky; top: 0; z-index: 1; "></th>
                <th style=" position: sticky; top: 0; z-index: 1; "></th>
                {/if}
            </tr>
        </thead>
        <tbody>
            {foreach from=$listaNotebooks item=note}
                <tr class="align-middle">
                    <td>{$note->procesador}</td>
                    <td>{$note->memoria_ram}</td>
                    <td>{$note->placa_video}</td>
                    <td>{$note->disco}</td>
                    <td>{$note->nombre}</td>
                    <td>
                        <button onclick="location.href='notebook/{$note->id_notebook}'">VER</button>
                    </td>
                    {if ( isset($userLogged) && $userLogged['admin']) }
                    <td>
                        <button onclick="location.href='editNotebook/{$note->id_notebook}'">Editar</button>
                    </td>
                    <td>
                        <button onclick="location.href='borrarNotebook/{$note->id_notebook}'">Borrar</button>
                    </td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
    {if ( isset($userLogged) && $userLogged['admin']) }
    <button onclick="location.href='formMarca'">Agregar marca</button>
    <button onclick="location.href='formNotebook'">Agregar notebook</button>
{/if}

</div>


{include 'templates/footer.tpl'}