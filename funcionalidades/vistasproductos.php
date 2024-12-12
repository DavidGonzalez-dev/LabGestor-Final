<?php
include "../conexionDB.php";
$query_N = 'select nombre_producto from productos';
$query_P = 'select numero_registro_producto, fecha_fabricacion, fecha_vencimiento, descripcion_producto, activo_producto, presentacion_producto, cantidad_producto, numero_lote_producto, tamano_lote_producto, id_cliente, id_fabricante, id_modulo from productos';
$queryCNM = 'select resultado from controles_negativos_medios';
$queryDME = 'select resultado from deteccion_microorganismos';
$queryRPR = 'select tratamiento from pruebas_recuento';
$resultado_NP = mysqli_query($conexion, $query_N);
$resultado_P = mysqli_query($conexion, $query_P);
$resultado_CNM = mysqli_query($conexion, $queryCNM);
$resultado_DME = mysqli_query($conexion, $queryDME);
$resultado_RPR = mysqli_query($conexion, $queryRPR);
$vistaproducto= mysqli_fetch_assoc($resultado_P);
?>
    <!-- CREATE TABLE `productos` (
  `numero_registro_producto` varchar(30) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `fecha_fabricacion` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `descripcion_producto` text NOT NULL,
  `activo_producto` varchar(50) NOT NULL,
  `presentacion_producto` varchar(30) NOT NULL,
  `cantidad_producto` varchar(15) NOT NULL,
  `numero_lote_producto` varchar(30) NOT NULL,
  `tamano_lote_producto` varchar(30) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_fabricante` int(11) NOT NULL,
  `id_modulo` int(11) NOT NULL DEFAULT 1 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Vista Productos</title>
</head>

<body>
<div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon document" aria-hidden="true"></span>Productos</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon folder" aria-hidden="true"></span>Fabricantes</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon image" aria-hidden="true"></span>Clientes</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon paper" aria-hidden="true"></span>Certificados</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon image" aria-hidden="true"></span>Peticiones de <br> Cambio </a>
                </li>
            </ul>
                    <ul class="cat-sub-menu">
                    </ul>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="icon setting">
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__subtitle">Log out</span>
            </div>
        </a>
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          EN
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">English</a></li>
          <li><a href="##">French</a></li>
          <li><a href="##">Uzbek</a></li>
        </ul>
      </div>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="##">
              <i data-feather="user" aria-hidden="true"></i>
              <span>Profile</span>
            </a></li>
          <li><a href="##">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Account settings</span>
            </a></li>
          <li><a class="danger" href="##">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- ! Main -->
    <main>
        <div class="container">
            <h1>Vista Producto</h1>
            
            <h2>
                <?php
                    if ($resultado_NP->num_rows > 0) {
                        $row = $resultado_NP->fetch_assoc();
                        echo htmlspecialchars($row["nombre_producto"]);
                    }
                ?>
            </h2>
            
        <div class="row p-5 info-producto">
            <table class="table table-striped table-bordered caption-top">
                    <caption>Informacion del Producto</caption>
                    <thead>
                        <tr>
                            <th scope="row">numero_registro_producto</th>
                            <th scope="row" >Fecha de Fabricacion</th>
                            <th scope="row">Fecha de Vencimiento</th>
                            <th scope="row" >Descripcion Productos</th>
                            <th scope="row" >Activo Producto</th>
                            <th scope="row" >Presentacion Producto</th>
                            <th scope="row" >Cantidad Producto</th>
                            <th scope="row" >Numero Lote Producto</th>
                            <th scope="row" >Tamaño Lote Producto</th>
                            <th scope="row" >Id Cliente</th>
                            <th scope="row" >Id Fabriante</th>
                            <th scope="row">Id Modulo</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($vistaproducto as $producto): ?>
                        <td><?php echo htmlspecialchars($producto); ?></td>
                    <?php endforeach; ?>
                    </tbody>
            </table>
        </div>

        <article id ="targetas">
            <div class="row p-5"> 
                <div class="col-lg-4 card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="t_targeta">Registo Pruebas de Recuento</h5>
                        <?php 
                            while ($descripcion = mysqli_fetch_assoc($resultado_RPR))
                                echo "<p>" . $descripcion['tratamiento'] . "</p>";
                            ?>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Completado</li>
                    </ul>
                    <div class="card-body">
                        <a href="examinarRPR.php" class="card-link">Examinar</a>
                        <a href="vistaRPR.php" class="card-link">Vista Previa</a>
                    </div>
                    </div>

                    <div class="card col-lg-4" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="t_targeta">Controles Negativos de Medios</h5>
                            <p class="card-text">
                                <?php 
                                while ($descripcion = mysqli_fetch_assoc($resultado_CNM))
                                    echo "<p>" . $descripcion['resultado'] . "</p>";
                                ?>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Compleado</li>
                        </ul>
                        <div class="card-body">
                            <a href="examinarCNM.php" class="card-link">Examinar</a>
                            <a href="vistaCNM.php" class="card-link">Vista Previa</a>
                        </div>
                        </div>

                        <div class="card col-lg-4" style="width: 18rem;">
                        <div class="card-body ">
                            <h5 class="t_targeta">Deteccion de Microorganismos Especificos</h5>
                            <p class="card-text">
                                <?php
                                while ($descripcion = mysqli_fetch_assoc($resultado_DME))
                                    echo "<p>" . $descripcion['resultado'] . "</p>";
                                ?>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Compleatdo</li>
                        </ul>
                        <div class="card-body">
                            <a href="examinarDME.php" class="card-link">Examinar</a>
                            <a href="vistaDME" class="card-link">Vista Previa</a>
                        </div>
                </div>
            </div>
        </article>
    </main>
    </div>

    <!-- ! Footer -->
   

    <!-- CREATE TABLE `controles_negativos_medios` (
  `id_control_negativo` int(11) NOT NULL,
  `codigo_control_negativo` varchar(10) DEFAULT 'CNM-',
  `medio_cultivo` text DEFAULT NULL,
  `fechayhora_incubacion` datetime NOT NULL,
  `fechayhora_lectura` datetime DEFAULT NULL,
  `resultado` varchar(30) DEFAULT NULL,
  `id_usuario` varchar(15) NOT NULL,
  `numero_registro_producto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; -->



    <!-- CREATE TABLE `deteccion_microorganismos` (
  `id_deteccion_microorganismo` int(11) NOT NULL,
  `codigo_deteccion_microorganismo` varchar(10) DEFAULT 'DCM-',
  `nombre_microorganismo` text DEFAULT NULL,
  `especificacion` varchar(15) NOT NULL,
  `concepto` tinyint(1) DEFAULT 0,
  `tratamiento` text NOT NULL,
  `metodo_usado` varchar(30) NOT NULL,
  `cantidad_muestra` varchar(15) NOT NULL,
  `volumen_diluyente` varchar(15) NOT NULL,
  `resultado` varchar(15) DEFAULT NULL,
  `numero_registro_producto` varchar(30) NOT NULL,
  `id_usuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; -->





<!-- CREATE TABLE `pruebas_recuento` (
  `id_prueba_recuento` int(11) NOT NULL,
  `codigo_prueba_recuento` varchar(10) DEFAULT 'PRC-',
  `metodo_usado` varchar(30) NOT NULL,
  `concepto` tinyint(1) NOT NULL DEFAULT 0,
  `especificacion` varchar(15) NOT NULL,
  `volumen_diluyente` varchar(15) NOT NULL,
  `tiempo_disolucion` varchar(5) DEFAULT NULL,
  `cantidad_muestra` varchar(15) NOT NULL,
  `tratamiento` text NOT NULL,
  `id_usuario` varchar(15) NOT NULL,
  `numero_registro_producto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
 -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>



