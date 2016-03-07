<?php
defined('_JEXEC') or die('Acesso Negado');

?>


<style type="text/css">
	.button_example{
				 color: white;
				 width: 70%;
				 text-decoration: none;
			     border-color:#F02100;border-width: 1px 1px 1px 15px;border-style: solid; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:12px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
				 background-color: #f62b2b; background-image: -webkit-gradient(linear, left top, left bottom, from(#f62b2b), to(#d20202));
				 background-image: -webkit-linear-gradient(top, #f62b2b, #d20202);
				 background-image: -moz-linear-gradient(top, #f62b2b, #d20202);
				 background-image: -ms-linear-gradient(top, #f62b2b, #d20202);
				 background-image: -o-linear-gradient(top, #f62b2b, #d20202);
				 background-image: linear-gradient(to bottom, #f62b2b, #d20202);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#f62b2b, endColorstr=#d20202);
	}
	.button_example:hover{
				 color: white;
				 cursor: pointer;
				 width: 70%;
				 text-decoration: none;
				 border-top-color: #CC1C00;border-right-color: #CC1C00;border-bottom-color: #911400;border-left-color: #911400;border-width: 1px 15px 1px 1px;border-style: solid;
				 background-color: #e40a0a; background-image: -webkit-gradient(linear, left top, left bottom, from(#e40a0a), to(#9f0202));
				 background-image: -webkit-linear-gradient(top, #e40a0a, #9f0202);
				 background-image: -moz-linear-gradient(top, #e40a0a, #9f0202);
				 background-image: -ms-linear-gradient(top, #e40a0a, #9f0202);
				 background-image: -o-linear-gradient(top, #e40a0a, #9f0202);
				 background-image: linear-gradient(to bottom, #e40a0a, #9f0202); filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#e40a0a, endColorstr=#9f0202);
	}
	.button_example:active{
				 color: white;
				 width: 70%;
				 text-decoration: none;
				 border-top-color: #CC1C00;border-right-color: #CC1C00;border-bottom-color: #911400;border-left-color: #911400;border-width: 1px 15px 1px 1px;border-style: solid;
				 background-color: #e40a0a; background-image: -webkit-gradient(linear, left top, left bottom, from(#e40a0a), to(#9f0202));
				 background-image: -webkit-linear-gradient(top, #e40a0a, #9f0202);
				 background-image: -moz-linear-gradient(top, #e40a0a, #9f0202);
				 background-image: -ms-linear-gradient(top, #e40a0a, #9f0202);
				 background-image: -o-linear-gradient(top, #e40a0a, #9f0202);
				 background-image: linear-gradient(to bottom, #e40a0a, #9f0202); filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#e40a0a, endColorstr=#9f0202);
	}
	.button_example:visited{
				 color: white;
				 width: 70%;
				 text-decoration: none;
				 border-top-color: #CC1C00;border-right-color: #CC1C00;border-bottom-color: #911400;border-left-color: #911400;border-width: 1px 15px 1px 1px;border-style: solid;
				 background-color: #e40a0a; 
				 background-image: -webkit-gradient(linear, left top, left bottom, from(#e40a0a), to(#9f0202));
				 background-image: -webkit-linear-gradient(top, #e40a0a, #9f0202);
				 background-image: -moz-linear-gradient(top, #e40a0a, #9f0202);
				 background-image: -ms-linear-gradient(top, #e40a0a, #9f0202);
				 background-image: -o-linear-gradient(top, #e40a0a, #9f0202);
				 background-image: linear-gradient(to bottom, #e40a0a, #9f0202); filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#e40a0a, endColorstr=#9f0202);
	}
	.regiao1{
		border-radius: 15px 30px 30px 5px;
    	border-width: 1px 5px 1px 1px;
		border-style: solid;
		border-color: #CC1C00;
		position: static;
		height: 600px;
	}
	.box_area{
		position: relative;
		width: 95%;
		top: 10px;
		left: 10px;
	}
	.form_area{
		position: absolute;
		width: 95%;
		top: 10px;
		left: 10px;
		text-align: left;
	}
	.formCol1{
		width: 30%;
		text-align: left;
	}
	.formCol2{
		width: 70%;	
	}
}
</style>
<body>
	<table name="pesquisas" id="pesquisas" width="100%">
		<tr>
			<th width="33%">
				<div class="button_example" id="button1" href="#" width="100%">Pesquisar</div>
			</th>
			<th width="34%">
				<div class="button_example" id="button2" href="#" width="100%">Incluir</div>
			</th>
			<th width="33%">
				<div class="button_example" id="button3" href="#" width="100%">Deletar</div>
			</th>
		</tr>
		<tr>
			<th colspan="3" align="center" width="99%">
				<div class="regiao1">	
						<div class="box_area" id="box1" height="300px"> 

						</div>
						<div class="box_area" id="box2">
							<div class="form_area" id="form2">
								<form id="uploadform" method="POST" name="uploadform">
									<table>							
										<tr>
											<th class="formCol1"> <label>Nome do autor:</label> </th>
											<th class="formCol2"> <input type="text" name="autor" id="autor"/> </th>
										</tr>
										<tr>
											<th class="formCol1"> <label>Titulo da Pesquisa:</label> </th>
											<th class="formCol2"> <input type="text" name="pesquisa" id="pesquisa"/> </th>
										</tr>
										<tr>
											<th class="formCol1"> <label>Data da Pesquisa:</label> </th>
											<th class="formCol2"> <input type="date" name="data" id="data"/> </th>
										</tr>
										<tr>
											<th class="formCol1"> <label>Linha de Pesquisa:</label> </th>
											<th class="formCol2"> <input type="text" name="linhaPesquisa" id="linhaPesqusia"/> </th>
										</tr>
										<tr>
											<th class="formCol1"> <label>Selecione o arquivo desejado:</label> </th>
											<th class="formCol2"> <input type="file" name="myfile" id="myfile"/> </th>
										</tr>
										<tr>
											<th colspan="2" align="center"> <input type="submit" name="upload_btn" value="Cadastrar"> </th>
										</tr>
									</table>
								</form>
							</div>
						</div>
						<div class="box_area" id="box3">

						</div>
				</div>
			</th>
		</tr>
	</table>
</body>
<script type='text/javascript'>//<![CDATA[ 
	jQuery(document).ready(function( $ ) {
		$("#box2").hide();
		$("#box3").hide();
		 
		$("#button1").click(function(){
			$("#box1").show();
			$("#box2").hide();
			$("#box3").hide();
		 });
		$("#button2").click(function(){
			$("#box1").hide();
			$("#box2").show();
			Load('<?php echo JURI::root();?>index.php?option=com_pesquisa&task=handleUploadData');
			$("#box3").hide();
		 });
		$("#button3").click(function(){
			$("#box1").hide();
			$("#box2").hide();
			$("#box3").show();
		 });
	});
	//]]> 

</script>