<?php
session_start();

// Eliminar todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redireccionar a la página de inicio después de cerrar sesión
header("Location: ../index.php?message=" . urlencode("Sesión cerrada correctamente."));
exit();
?>
