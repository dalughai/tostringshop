<div class="container">
<header>
    <div class="row ">
        <div id="enlaces-izquierda" class="col-4 enlaces-header">
            <ul class="header-list">
                <li>
                    <a href="">Envios</a>
                </li>
                <li>
                    <a href="">Contacto</a>
                </li>
                <li>
                    <a href="">Ayuda</a>
                </li>
                <li>
                    <a href="">Sugerencias</a>
                </li>
            </ul>
        </div>

        <div id="logo" class="col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center">
            <a href="<?php echo $root ?>index.php"><img src="<?php echo $carpeta_fotos?>/logo4.png"></a>
        </div>
        <div id="enlaces-derecha" class="col-4 enlaces-header">
            <ul class="header-list">
                <li>
                    <a href="">Noticias</a>
                </li>
                <li>
                    <a href="">Marcas</a>
                </li>
                <li>
                    <a href="">Novedades</a>
                </li>
                <li>
                    <a href="<?php echo $root ?>micuenta">Mi Cuenta</a>
                </li>
            </ul>
            
        </div>
    </div>
    <div class="row">
        <div id="buscador" class="col-4">
            <form id="form-buscador" class="form-inline my-2 my-lg-0">
              <input id="buscador" class="form-control ml-3 mr-2 col-8   " type="search" placeholder="Introduzca un producto" aria-label="Search">
              <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div id="sesion" class="col-4 text-center">
        
        
        <?php if(isset($_SESSION["usuario"])) { ?>
            <div class="d-flex justify-content-around"> 
                <a href="<?php echo $root ?>micuenta">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Bienvenido <?php echo $_SESSION['usuario']['nombre']?></button>
                </a>
            </div>
        <?php } else { ?>
            <a href="<?php echo $root ?>login">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Iniciar Sesion / Registrarse</button>
            </a>
        <?php } ?>
    </div>
        <div id="carrito-div" class="col-4 d-flex justify-content-end">
            <div id="carrito" class="row">
                <i class="fas fa-shopping-cart fa-2x"></i> 
                    <span id="cantidad" class="cantidad">0 Productos: </span>
                    <span id="precio" class="precio">0 €</span>
            </div>
            <div id="carritod" class="row d-flex justify-content-end" data-id-producto="">
                Hola que tal
            </div>

        </div>
    </div>

    <div id="responsive-menu" class="row text-center">

    
        <div class="col-3">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo05" aria-controls="navbarTogglerDemo05" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-search fa-2x"></i> 
                </button>
                <div id="navbarTogglerDemo05" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 categorias-menu">
                      <li class="nav-item">
                            <form id="" class="form-inline my-2 my-lg-0">
                              <input id="" class="form-control mr-auto col-12" type="search" placeholder="Buscar!" aria-label="Search">
                            </form>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="col-3">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo06" aria-controls="navbarTogglerDemo06" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-caret-down"></i>         
                </button>
                <div id="navbarTogglerDemo06" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item">
                            <div id=""  class="row">
                                <div class="col-12 m-0">
                                    <ul class="categorias-menu">
                                      <li class="nav-item botonc">
                                        <a href="">Guitarra Electrica</a>
                                      </li>
                                    </ul>
                                </div>
                          </div>
                     </li>
                      <li class="nav-item">
                            <div id=""  class="row">
                                <div class="col-12 m-0">
                                    <ul class="categorias-menu">
                                      <li class="nav-item botonc">
                                        <a href="">Guitarra Acustica</a>
                                      </li>
                                    </ul>
                                </div>
                          </div>
                     </li>
                      <li class="nav-item">
                            <div id=""  class="row">
                                <div class="col-12 m-0">
                                    <ul class="categorias-menu">
                                      <li class="nav-item botonc">
                                        <a href="">Guitarra Clasica</a>
                                      </li>
                                    </ul>
                                </div>
                          </div>
                     </li>
                      <li class="nav-item">
                            <div id=""  class="row">
                                <div class="col-12 m-0">
                                    <ul class="categorias-menu">
                                      <li class="nav-item botonc">
                                        <a href="">Bajo Electrico</a>
                                      </li>
                                    </ul>
                                </div>
                          </div>
                     </li>
                      <li class="nav-item">
                            <div id=""  class="row">
                                <div class="col-12 m-0">
                                    <ul class="categorias-menu">
                                      <li class="nav-item botonc">
                                        <a href="">Bajo Acustico</a>
                                      </li>
                                    </ul>
                                </div>
                          </div>
                     </li>
                      <li class="nav-item">
                            <div id=""  class="row">
                                <div class="col-12 m-0">
                                    <ul class="categorias-menu">
                                      <li class="nav-item botonc">
                                        <a href="">Accesorios</a>
                                      </li>
                                    </ul>
                                </div>
                          </div>
                     </li>


          </div>
            </nav>
        </div>

     

    
        <div class="col-3">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo07" aria-controls="navbarTogglerDemo07" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-shopping-cart"></i>
                </button>
                <div id="navbarTogglerDemo07" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 categorias-menu">
                      <li class="nav-item">
                                <div id="carrito">
                                    <img src="<?php echo $carpeta_fotos?>/carrito.png">
                                </div>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="col-3">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo08" aria-controls="navbarTogglerDemo08" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-user-circle fa-2x"></i>
                </button>
                <div id="navbarTogglerDemo08" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 categorias-menu">
                      <li class="nav-item">
        <a href="">
            <button id="sesion-hidden" class="btn btn-outline-light my-2 my-sm-0" type="submit">Iniciar Sesion <br>
                Registrarse</button>
        </a>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div id="header-categorias"  class="row">
        <div class="col-12 m-0">

    <ul class="categorias-menu">
      <li class="nav-item botonc">
        <a href="<?php echo $root ?>categorias?id=1">Guitarra Electrica</a>
      </li>
      <li class="nav-item botonc">
        <a href="<?php echo $root ?>categorias?id=2">Guitarra Acustica</a>
      </li>
      <li class="nav-item botonc">
        <a href="<?php echo $root ?>categorias?id=3">Guitarra Clasica</a>
      </li>
      <li class="nav-item botonc">
        <a href="<?php echo $root ?>categorias?id=4">Bajo Electrico</a>
      </li>
      <li class="nav-item botonc">
        <a href="<?php echo $root ?>categorias?id=5">Bajo Acustico</a>
      </li>
      <li class="nav-item botonc">
        <a href="<?php echo $root ?>categorias?id=6">Accesorios</a>
      </li>
    </ul>
      </div>
    </div>
  </div>
    </div>
</nav>
    </div>


</header>
</div>
