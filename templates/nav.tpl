<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse nav-top" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto lista-top">
      <li class="nav-item active">
        <a class="nav-link" href="home">Inicio</a></li>
      <li class="nav-item">
      <li class="nav-item active">
        <a class="nav-link" href="notebooks">Notebooks</a></li>
      <li class="nav-item">   

      <li class="nav-item">
          <!--SI HAY UN USUARIO ACTIVO-->
          {if isset($userLogged) && $userLogged}
              <div class="navbar-nav ml-auto">
                  <span class="navbar-text nav-link active">{$userLogged['email']}</span>
                    <!--SI EL USUARIO ACTIVO NO ES ADMINISTRADOR-->
                  {if (!($userLogged['admin']))}
                      <a class="nav-item nav-link" href="perfilUsuario">Tu Perfil<span class="sr-only"></span></a>
                  {else}
                      <div class="navbar-nav ml-auto">
                          <a class="nav-item nav-link " href="usuarios">Lista de usuarios<span class="sr-only"></span></a>
                      </div>
                  {/if}
                  <a class="nav-item nav-link " href="logout">Logout<span class="sr-only"></span></a>
              </div>
          {else}
              <!--SI NO HAY UN USUARIO ACTIVO-->
              <li class="nav-item active">
                  <a class="nav-item nav-link " href="login">Login<span class="sr-only"></span></a>
              </li>
              <li class="nav-item active">
                  <a class="nav-item nav-link " href="registro">Registrar<span class="sr-only"></span></a>
              </li>
          {/if}
      </li>            
    </ul>
  </div>
</nav>