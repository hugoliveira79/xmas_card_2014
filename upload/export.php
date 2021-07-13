<?php
	include('../config.php');
	 /*http://php.net/manual/en/function.com-create-guid.php*/
	function GUID()
	{
		if (function_exists('com_create_guid') === true){	
			return trim(com_create_guid(), '{}');
		}
		return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
	}
	function insereNovoPostal($nome, $mensagem, $guid)
	{
		$sql="CREATE TABLE IF NOT EXISTS postal (id INTEGER NOT NULL AUTO_INCREMENT,postal INTEGER default 0, nome VARCHAR(120), mensagem varchar(500) DEFAULT NULL,guid varchar(500) DEFAULT NULL, public bit DEFAULT 0, concluido bit DEFAULT 0, PRIMARY KEY (id)) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;";													
		mysql_query($sql); //or return 21;
		$sql='insert into postal values (null,0,"'.$nome.'","'.$mensagem.'","'.$guid.'",0,0)';
		mysql_query($sql); //or return 22;
	}
	
	function concluiPostal($guid, $postal, $public)
	{
		$sql='update postal set postal='.$postal.', concluido=1,public='.$public.' where guid like "'.$guid.'";';
		mysql_query($sql);//TODO erro or return 0;
	}
	/**
	 * More info about this script on: 
	 * http://stackoverflow.com/questions/11511511/how-to-save-a-png-image-server-side-from-a-base64-data-string
	 */
	 if (array_key_exists('op',$_GET)){		
		switch($_GET['op']){
			case 1:
			try{
				$nome = $_REQUEST['nome']; 
				
				if($nome==null || $nome==''){
					echo 1;
					break;
				}

				$mensagem = $_REQUEST['mensagem']; 

				if($mensagem==null || $mensagem=='' ) 
				{
					echo 2;
					break;
				}	

				$data = $_REQUEST['base64data']; 
				$guid = GUID();
				list($type, $data) = explode(';', $data);
				list(, $data)      = explode(',', $data);
				$data = base64_decode($data);
				/*Regista na base de dados*/
				$aux = insereNovoPostal($nome, $mensagem, $guid);
				if($aux == 21)
				{echo 21;break;}
				else if ($aux == 22)
				{echo 22;break;}
				
				/*Se diretoria não existir cria nova*/
				$auxDir = getcwd().'/backup/'.$guid;
				if (!file_exists($auxDir)) {
					mkdir($auxDir, 0755, true);
				}
				file_put_contents($auxDir.'/upload.png', $data);
				/*devolve o guid gerado*/
				echo $guid;
			} catch (Exception $e) {
	  			echo 0;
			}

			break;
			
			case 2 :
				$data = $_REQUEST['base64data'];
				$guid = $_GET['id'];
				list($type, $data) = explode(';', $data);
				list(, $data)      = explode(',', $data);
				$data = base64_decode($data);
				/*Regista na base de dados*/
				$auxDir = getcwd().'/backup/'.$guid;
				file_put_contents($auxDir.'/upload_1.png', $data);
				/*devolve o guid gerado*/
				echo $guid;
				break;
				
			case 3 :
				concluiPostal($_GET['id'], $_GET['postal'], $_GET['public']);
				header( 'Location:../criarpostal4.php?id='.$_GET['id']) ;
				break;
				
			case 4 :
				$data = $_REQUEST['base64data'];
				$guid = $_GET['id'];
				list($type, $data) = explode(';', $data);
				list(, $data)      = explode(',', $data);
				$data = base64_decode($data);
				/*Regista na base de dados*/
				$auxDir = getcwd().'/backup/'.$guid;
				file_put_contents($auxDir.'/upload_0.png', $data);
				/*devolve o guid gerado*/
				echo $guid;
				break;				
		}
	}
	
?>