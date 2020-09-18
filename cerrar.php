
<?php
session_start();

//DESTRUIMOS TODAS LAS VARIABLES SESION Y INICIAMOS EL ARRAY EN 0
$_SESSION = array();

//SI DESEA DESTRUIR LA SESSION COMPLETAMENTE, BORRE TAMBIEN LA COOKIE DE SESION
//NOTA: ESTO DESTRUIRA LA SESION Y NO LA INFORMACION DE LA SESSION
if (ini_get("session.use_cookies")) {
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]
  );
}

//FINALMENTE DESTRUIR LA SESION
session_destroy();

header('location:index.php');
 ?>
