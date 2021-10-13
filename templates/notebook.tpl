{include 'templates/header.tpl'}
<div class="container">
<h1 class="h1-general"> Notebook marca {$notebook->nombre} </h1>
    <ul class="lista-notebooks">
        <li>Procesador: {$notebook->procesador}</li>
        <li>Memoria RAM: {$notebook->memoria_ram}</li>
        <li>Placa de video: {$notebook->placa_video}</li>
        <li>Disco Duro: {$notebook->disco}</li>
        <li><img alt="notebook gamer" src="img/{$notebook->nombre}.jpg"></li>
    </ul>
</div>