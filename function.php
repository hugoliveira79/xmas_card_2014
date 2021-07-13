<?php
	include('config.php');
		function debug_die($str)
		{
			//print('<br><font color="#FF0000">'.$str.'</font>');
			die();
		}
		function debug($str)
		{
			//print('<br><font color="#008888">'.$str.'</font>');
		}
	function getPostalDetails($guid)
	{
		$sql='select mensagem from postal where guid like \''.$guid.'\';';
		$result =  mysql_query($sql) or debug_die("Erro: ".mysql_error().':'.$sql); //TODO return default message if error
		$data = mysql_fetch_assoc($result);
		echo nl2br($data['mensagem']);
	}
	function getPostal($guid)
	{
		$sql='select postal from postal where guid like \''.$guid.'\';';
		$result =  mysql_query($sql) or debug_die("Erro: ".mysql_error().':'.$sql); //TODO return default message if error
		$data = mysql_fetch_assoc($result);
		echo $data['postal'];		
	}
	function getIsConcluido($guid)
	{
		$sql='select CAST(concluido AS UNSIGNED) from postal where guid like \''.$guid.'\';';
		$result =  mysql_query($sql) or debug_die("Erro: ".mysql_error().':'.$sql); //TODO return default message if error
		$data = mysql_fetch_assoc($result);
		echo bindec($data['CAST(concluido AS UNSIGNED)']);		
	}
	function getID($guid)
	{
		$sql='select id from postal where guid like \''.$guid.'\';';
		$result =  mysql_query($sql) or debug_die("Erro: ".mysql_error().':'.$sql); //TODO return default message if error
		
		if(mysql_num_rows($result) >0){
		   //found
			echo 1;
		}else{
		   //not found
			echo 0;
		}
	}


	// function getPostal($guid, $concluido)
	// {
		
	// 	if($concluido == 0)
	// 		$sql='select postal from postal where guid like \''.$guid.'\' and concluido=0;';
	// 	else 
	// 		$sql='select postal from postal where guid like \''.$guid.'\' and concluido=1;';
	
	// 	// $sql='select postal from postal where guid like \''.$guid.'\';';
	// 	$result =  mysql_query($sql) or debug_die("Erro: ".mysql_error().':'.$sql); //TODO return default message if error
	// 	$data = mysql_fetch_assoc($result);
	// 	echo $data['postal'];
	// }
?>