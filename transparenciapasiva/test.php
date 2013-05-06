<?php
foreach($_POST as $var=>$value){
	$numero = count($value);
	if($numero>1){
		$form .= '<b>'.$var.':</b>';
		foreach($value as $x=>$v)
			$form .= $v.', ';
		$form .= '<br>';
	}else{
		if(strtoupper($value) != strtoupper("Enviar")){
			$var = str_ireplace('_',' ',$var);
			$var = strtoupper(substr($var,0,1)).substr($var,1,strlen($var));
			
			$form .= '<b>'.$var.':</b> '.$value.'<br>';
		}
	}
}

/*echo $form;*/

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
	$headers .= 'From: Transparencia Pasiva <transparencia@penalolen.cl>' . "\r\n";
	//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

if(@mail('transparenciapasiva@penalolen.cl,controltransparencia@penalolen.cl','Solicitud Transparencia',$form,$headers)){
	echo "se ha enviado el mail";
}else{
	echo "no se ha enviado el mail";
}

?>
