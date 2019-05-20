<?php
require_once("./motores/interno/defs.php");
session_start();
$hayUsuario = (isset($_SESSION['Usuario']) && $_SESSION['Usuario']['rol'] != 't');
if (!$hayUsuario) {
	$_SESSION['Usuario'] = array("rol" => "t", "publica" => "invalida");
	?>
<?php
} else {
	header('Status: 301 Moved Permanently', false, 301);
	header('Location: ./' . $_SESSION['Usuario']['pag_inicial']);
}
?>

/*
PHP: Hypertex preprocessor.
Lenguaje de código abierto para desarrollo web que puede ser incrustado en HTML, es para BACKEND.

La diferencia con otros lenguajes que trabajan con HTML, es que php se ejecuta en el SERVIDOR, se muestra en HTML y envía respuesta al cliente, el cual recibirá un resultado de ejecutar el php, PERO no verá el código ni nada.

La documentación menciona que es un lenguaje simple para principiantes, pero con característicasd avanzadas para los programadores profesionales

Algunas etiquetas php:
inicio y fin: <?php y ?>
*/

