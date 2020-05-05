<?php
	require_once "models/enlaces.php";
	require_once "models/crud.php";
	require_once "controllers/controller.php";
	//requerimientos que se utilizaran por lo menos una vez, se enlazan al index para mostrarlos

	$mvc = new MvcController();//instancia
	$mvc -> pagina();//llamamos a la funcion pagina 
?>