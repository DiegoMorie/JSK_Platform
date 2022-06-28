<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome!</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../MEDIA/pngegg.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/MainCS.css" type="text/css">
    <link rel="stylesheet" href="../CSS/Regis.css" type="text/css">
    <script src="../JS/Functions.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <video sourse src="../video/matriz.mp4" autoplay loop></video> <!-- BG NEED FIX -->
    
    <!-- Header of the page-->
    <header class="p-3 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="#" class="d-flex align-items-left mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><img src="../MEDIA/2560px-Logo_DuocUC.svg.png " width="250" height="60" alt="DuocUC"></svg>
          </a>
  
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="../StaringPage.html" class="nav-link px-2 text-secondary">Inicio</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Noticias</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Tienda</a></li>
          </ul>
  
  
          <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2" onclick="Redirect(1)">Login</button>
          </div>
        </div>
      </div>
    </header>
    <br><br>

      <!-- ADD STUFF HERE !!!! -->  
      <div class="container my-5 border border-3 rounded">
        <h1 align="center" style="color:white;text-shadow: 2px 2px rgba(255, 255, 255, 0.405);">Manejo de mangas</h1>
        <div class="container my-3"><br></div>
        <div class="bg-white ms-5 me-5 rounded btest" align="center">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Quantidad</th>
                  <th>NombreIMG</th>
                  <th>Hacer</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                    $servername="localhost";
                    $username ="root";
                    $password = "123";
                    $database = "mangashop";

                    //Creando la conexion
                    $connection = new mysqli($servername,$username,$password,$database);

                    // Esta conectado?
                    if($connection->connect_error){
                      die("Conección fallida:" . $connection->connect_error);
                    }

                    // Leer todas las columnas de manga
                    $sql = "SELECT * from mangas";
                    $result = $connection->query($sql);

                    // Lee si el resultado esta bien 
                    if (!$result){
                      die("Query invalida: " . $connection->error);
                    }

                    while($row = $result->fetch_assoc()){
                      echo 
                      "
                        <tr>
                          <td>$row[id]</td>
                          <td>$row[Name]</td>
                          <td>$row[Price]</td>
                          <td>$row[Quantity]</td>
                          <td>$row[Dirc_img]</td>
                          <td>
                            <a href=\"/Creacion&Delete/EditarManga.php?id=$row[id]\" class=\"btn btn-primary\">Editar</a>
                            <a href=\"/Creacion&Delete/BorrarManga.php?id=$row[id]\" class=\"btn btn-danger\">Borrar</a>
                          </td>
                        </tr>
                      ";

                    }
                  ?>

              </tbody>
            </table>
            <br>
            <a href="./Creacion&Delete/CrearManga.php" class="btn btn-primary" role="button">Nuevo Manga</a>
        </div>
        <br>  
      </div>

     


      <br><br><br><br><br><br>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html> 