<?php
	$cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
	$nuevoprecio = $precio - ($precio * 0.05);
	$total = $nuevoprecio * $cantidad;
	$descuento = $total * 0.07;
	$total = $total - $descuento;
	$regalo = $cantidad * 2;
	echo "Nuevo precio de la gaseosa: S/." . number_format($nuevoprecio, 2) ."<br>";
	echo "Total de la compra: S/." . number_format($total, 2) ."<br>";
	echo "Total del descuento: S/." . number_format($descuento, 2) ."<br>";
	echo "Total: S/." . number_format($total, 2) ."<br>";
	echo "Caramelos de regalo: " . $regalo . "<br>";
?>