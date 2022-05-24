<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expresionismo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@600&family=Montserrat:wght@600&family=Raleway&family=Roboto&family=Rubik:wght@500;700&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light header">
            <div class="container-fluid">
              <a class="navbar-brand ms-5" href="index.html"><img src="img/logo.png" alt="" width="80%" class="d-inline-block align-text-top"></a>

              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="offcanvas offcanvaspropio" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header navbar-header">
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body canvas">
                  <ul class="navbar-nav justify-content-end flex-grow-1">
              <div class="collapse d-flex" id="navbarNavDarkDropdown">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle secciones" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      HISTORIA
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item" href="origen.html">ORIGEN</a></li>
                      <li><a class="dropdown-item" href="disciplinas.html">DISCIPLINAS</a></li>
                    </ul>
                  </li>
                </ul>
          
           <div class="navbar-nav d-flex">
 <a class="nav-link secciones" href="artistas.html" aria-current="page">ARTISTAS</a>
                  <a class="nav-link secciones" href="obras.html">OBRAS</a>
                  <a class="nav-link secciones" href="filosofia.html">FILOSOFÍA</a>
                  <a class="nav-link secciones me-5" href="contacto.html">CONTACTO</a>

                  <form class="d-flex" action="resultados_buscar.php" method="post">
                    <input class="form-control me-2 colorinput" type="search" placeholder="Buscar" aria-label="Search" name="buscar">
                    <button class="btn btn-outline-success boton card-text" type="submit">Buscar</button>
                  </form>

                </div>
              </div>
            </div>
          </nav>
</header>

<section>

<div class="container mtop d-flex">

<div>
<h2>Registrate en el sitio</h2>

    <form action="registro.php" method="post" >
    	<label>Nombre
        	<input type="text" name="nombre" required />
        </label><br />
		<label>Apellido
        	<input type="text" name="apellido" required />
        </label><br />
        <label>Email
        	<input type="email" name="email" required />
        </label><br />
        <label>Nombre de usuario
        	<input name="usuario" type="text" maxlength="12" />
        </label><br />
        <label>Contraseña
        	<input type="password" name="password" maxlength="12" />
        </label><br />
        <label>
            <input name="newsletter" type="checkbox" value="si" checked="checked" /> Sí, deseo recibir informacion por mail.
        </label><br />
        <input type="submit" value="Registrarse"/>	
    </form>

    </div>


<div class="marginleft">
    <h2>Logueate</h2>
	<form action="login.php" method="post">
    	<label>Nombre de usuario
        	<input name="usuario" type="text" maxlength="12" />
        </label><br />
        <label>Contraseña
        	<input type="password" name="password" maxlength="12" />
        </label><br />
        	<input type="submit" value="Login"/>	
    </form>
    <a href="form_registro.php">Registrate</a> si no sos usuario.
    
    </div>
    </div>
</section>












<footer class="footer">
  <div class="container-fluid d-flex p-2 mt-5">
  
    <div class="d-flex mt-2">
    <form class="d-flex">
      <p class="texto2 ms-3">Newsletter</p>
      <input class=" input ms-2"   type="" placeholder="Mail" aria-label="">
    </form>
  </div>
  
    <div class= "d-flex mt-2" style="margin-left: 22%;">
    <p class="texto">Expresionismo - Sol Fleischer </p>
  </div>
  
  
  
  <div class="d-flex piepagina2 mt-2">
            
  <i class="fa fa-youtube piepagina2" style="font-size:35px;"></i>
              
  <i class="fa fa-facebook-f piepagina2" style="font-size:35px;"></i>
     
  <i class="fa fa-twitter piepagina2" style="font-size:35px;"></i>
   </div>
     
        
   </div>
  </footer>
  




