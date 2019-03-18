<?php
include("conexao.php");
/**
Aqui terá todos o tratamento de mudar a situação do arquivo

No switch abaixo será utilizado como entrada o um dado, via POST, vindo do diretorio views/protoclo/opcoes.php de um input do tipo hidden 
*/  
$pagina = ($_POST['pagina']);

switch ($pagina) {
  case '1':
    deferir();
    break;
  case '2':
    indeferir();
    break;
  case '3':
    encaminhar();
    break;
  default:
    echo "houve um ERRO!";
    break;
}

function deferir(){
//recebe os dados via POST, do formulario od arquivo opcoes.php
$protocolo = $_POST['protocolo'];
$observacao = $_POST['observacao'];
$remetente = $_POST['cod_remetente'];
$destinatario = $_POST['cod_destinatario'];

//update que irá atualizar o status do arquivo para Deferido
$sql_ativo = "UPDATE historico SET ativo = 0 WHERE ref_protocolo = '$protocolo' ";

//insert na tabela historico devido a atualização do status do documento e é necessario mostrar essa mudança no historico do arquivo
$sql_deferir = "INSERT INTO historico(cod_hist, ref_cod_status, ref_protocolo, remetente, destinatario, data, hora, observacao, ativo) 
                 VALUES(null, 2, '$protocolo', '$remetente', '$destinatario', NOW(), NOW(), '$observacao', 1)";

//executa a primeira consulta
$result_ativo = mysql_query($sql_ativo);

//verifica se não há resultado
	if(!$result_ativo){
      die('Nao foi possivel completar a opera&ccedil;&atilde;o:'. mysql_error());
	}
     
//executa a segunda consulta				 
$result_deferir = mysql_query($sql_deferir);

//verifica se não há resultado
	if(!$result_deferir){
      die('Nao foi possivel completar a opera&ccedil;&atilde;o:'. mysql_error());
	}

    //redireciona para o index
    echo "<script>document.location.href='../views/index.php?link=10'</script>";

}

function indeferir(){

//recebe os dados via POST, do formulario od arquivo opcoes.php
$protocolo = $_POST['protocolo'];
$observacao = $_POST['observacao'];
$remetente = $_POST['cod_remetente'];
$destinatario = $_POST['cod_destinatario'];

//update que irá atualizar o status do arquivo para Indeferido
$sql_ativo = "UPDATE historico SET ativo = 0 WHERE ref_protocolo = '$protocolo' ";

//insert na tabela historico devido a atualização do status do documento e é necessario mostrar essa mudança no historico do arquivo
$sql_indeferir = "INSERT INTO historico(cod_hist, ref_cod_status, ref_protocolo, remetente, destinatario, data, hora, observacao, ativo) 
                VALUES(null, 3, '$protocolo', '$remetente', '$destinatario', NOW(), NOW(), '$observacao',1)";

//executa a primeira consulta
$result_ativo = mysql_query($sql_ativo);

//verifica se não há resultado
	if(!$result_ativo){
      die('Nao foi possivel completar a opera&ccedil;&atilde;o:'. mysql_error());
	}
				
//executa a segunda consulta  				
$result_indeferir = mysql_query($sql_indeferir);

//verifica se não há resultado
   if(!$result_indeferir){
      die('Nao foi possivel completar a opera&ccedil;&atilde;o:'. mysql_error());
      }
     
    //redireciona para o index
    echo "<script>document.location.href='../views/index.php?link=10'</script>";


}

function encaminhar(){

//recebe os dados via POST, do formulario od arquivo opcoes.php
$protocolo = $_POST['protocolo'];
$observacao = $_POST['observacao'];
$remetente = $_POST['cod_remetente'];
$destinatario = $_POST['destinatario'];

//update que irá atualizar o campo ativo no banco que define se o documento já foi finalizado ou não
$sql_ativo = "UPDATE historico SET ativo = 0 WHERE ref_protocolo = '$protocolo' ";

//Faz a inserção do novo historico com as alterações de destinatario para qual o documento foi encaminhado
$sql_encaminhar = "INSERT INTO historico(cod_hist, ref_cod_status, ref_protocolo, remetente, destinatario, data, hora, observacao, ativo) 
                VALUES(null, 1, '$protocolo', '$remetente', '$destinatario', NOW(), NOW(), '$observacao', 1)";

//executa a primeira consulta
$result_ativo = mysql_query($sql_ativo);

//verifica se não há resultado
	if(!$result_ativo){
      die('Nao foi possivel completar a opera&ccedil;&atilde;o:'. mysql_error());
	}
		
//executa a segunda consulta 			
$result_encaminhar = mysql_query($sql_encaminhar);

//verifica se não há resultado
   if(!$result_encaminhar){
      die('Nao foi possivel completar a opera&ccedil;&atilde;o:'. mysql_error());
      }
     
   //redireciona para o index
    echo "<script>document.location.href='../views/index.php?link=10'</script>";  

}


?>