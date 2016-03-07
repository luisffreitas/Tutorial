<?php
defined('_JEXEC') or die('Acesso Negado Aqui');
class modPesquisasHelper
{
	public static function saveData($autor,$pesquisa,$data,$linhaPesquisa,$myFile,$params){
		$db=JFactory::getDBO();
		$query="INSERT INTO `_pesquisa`(autor,pesquisa,data,linhaPesquisa,myFile) VALUES('$autor','$pesquisa','$data','$linhaPesquisa','$myFile')";
		$db->setQuery($query);
		if($db->query()){
			self::sendEmailNotification($autor,$params);
			return True;
		}else{
			return False;
		}
	}

	public static function sendEmailNotification($autor,$params){
		$mailer=JFactory::getMailer();
		
		$sender=array($params->get('sender_email'),$params->get('sender_name'));
		$mailer->setSender($sender);
		$mailer->addRecipient($params->get('receiver_email'));
		$mailer->setSubject("Contato LPS");
		$body="<h4>Um nova pesquisa foi cadastrada, seguem as informacoes:</h2><br>";
		$body.="Autor : $autor <br>";
		//$body.="Email : $email <br>";
		//$body.="Mensagem : $message <br>";
		$mailer->setBody($body);
		$mailer->isHTML(true);
		$mailer->send();
	}
}

/**
* 
*/
class modUploadHelper
{
	
}
?>