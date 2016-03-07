<?php
defined('_JEXEC') or die ("Acesso Negado");

require_once('/home/lps/modules/mod_pesquisas/helper.php');

// if(isset($_POST['upload_btn'])){
//  	$jinput=JFactory::getApplication()->input;
	
//  	$autor=$jinput->get('autor','','string');
//  	$pesquisa=$jinput->get('pesquisa','','string');
//  	$data=$jinput->get('data','','string');
// 	$linhaPesquisa=$jinput->get('linhaPesquisa','','string');
//  	//$myFile=$jinput->get('myfile');
	
//  	if(modPesquisasHelper::saveData($autor,$pesquisa,$data,$linhaPesquisa,$myFile,$params)){
//  	 	echo '<h3> Pesquisa cadastrada com sucesso<br>';
//  	 	echo "Salvando arquivo no diretorio.<br>";
//  	 // 	if(modUploadHelper::uploadFile($myfile)){
//  	 // 		echo "Arquivo salvo com sucesso.<br>";
//  	 // 	}else{
// 			// echo "Upload do arquivo falhou.<br>";
//  	 // 	}

//  	}else{
//  		echo '<h3> Mensagem não foi enviada com sucesso';
//  	}

	
// }else{
 	require JModuleHelper::getLayoutPath('mod_pesquisas',$params->get('layout','default'));
// }

?>