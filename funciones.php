<?php
function valida($tipo) {
	if($tipo == 'guia') // 22 y alfanum�rico
		return false;
	if($tipo == 'rastreo') // 10 y num�rico
		return true;
}

function responde() {
	$fields = array(
		"error" => 1,
		"mensaje_error" => "NUMERO DE GU�A O C�DIGO DE RASTREO NO V�LIDOS",
	);
	
	$fields = array(
		"error" => 2,
		"mensaje_error" => "NO HAY INFORMACI�N DISPONIBLE",
	);
	
	echo indent(json_encode($fields));
	exit();
}
?>