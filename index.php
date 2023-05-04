<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <!--<meta http-equiv=”Content-Type” content=”text/html; charset=ISO-8859-1″ />-->
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/images.css">
    <style>
      .container {
        margin-top: 75px; 
        overflow: auto;
        height: 100%;
      }     
      .custom-tooltip {
        --bs-tooltip-bg: var(--bs-primary);
      }
      textarea {
        font-family:Consolas,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New, monospace;
      }

      #tdListado a, #tdListado a:link, #tdListado a:visited, #tdListado a:focus, #tdListado a:hover, #tdListado a:active {
        color: #272727;
        text-decoration: none;
      }
      .pagination{
        --bs-pagination-focus-color: #2b2c2c;
        --bs-pagination-active-bg: #2b2c2c;
        --bs-pagination-hover-color: #2b2c2c;
        --bs-pagination-color: #2b2c2c;
        --bs-pagination-active-border-color: #2b2c2c;
      }


    </style>
    
  </head>
  <body>   
    <div class="container" id="main-container">
      
    </div>
     
    <br>    
    </hr>

    <nav class="navbar navbar-dark bg-dark fixed-top" id="nav-main">
    <!--<nav class="navbar navbar-expand-lg bg-light fixed-top">-->
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Eventos - IASD Good Hope</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item link">
                <a class="nav-link active" aria-current="page" href="#" style="color:black;"                   
                  onclick="menu('procesos/mostrarListado.php');"
                  data-bs-dismiss="offcanvas">
                  Inicio
                </a>
              </li>
              <li class="nav-item link">
                <a class="nav-link" href="#" style="color:black;"                   
                  onclick="menu('vistas/form.php');"
                  data-bs-dismiss="offcanvas">
                  Ingresar
                </a>
              </li>
              <!--
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black;">
                  Opciones
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown" style="color:black;">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>-->
            </ul>
            <!--
            <hr>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar canción" aria-label="Buscar canción">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>-->
          </div>
        </div>
      </div>      
    </nav>  

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <span class="text-muted">© 2023 - Jhon Paja</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </footer>
    

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>-->

    <script src="lib/sweetalert.min.js"></script>
    <script src="js/crud.js"></script>
    <script src="js/script.js"></script>
    <script>
      $(document).ready(function(){        
        mostrarListadoEventos();
        
        /*
        $("#inputDataList").keyup(function(event){
          console.log('keyup');
          $("#parrafo").text("El código de la tecla " + String.fromCharCode(event.which) + " es: " + event.which);
          //$("#escribe").val("");
        }); */

        /*$('.link a').click(function(evento){
          
          
        })*/
      });
    </script> 
  </body>
</html>