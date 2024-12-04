<?php
    session_start();
    if (!isset($_SESSION["id_usuario"])){
      header(header: "Location: signin.php");
    }