<?php
    session_start();
    $v_cod_user = $_SESSION['cod_user'];  

include("conexao.php");
    
  GLOBAL $result_hist;

// Verifica se existe um arquivo
  if(isset($_FILES['arquivo'])){
 
 // Recebendo dados enviados pelo formulario via POST
    $remetente = $v_cod_user;
    $destinatario = ($_POST['destinatario']);
    $assunto = ($_POST['assunto']);
    $requerente = ($_POST['requerente']);
    $tipo_arquivo = ($_POST['tipo_arquivo']);
    $ref_protocolo = 0;
    $observacao = ($_POST['observacao']);


    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));//pega a extensão do arquivo
    $novo_nome = md5(time()). $extensao;//define o nome do arquivo
    $diretorio = "upload/";//define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

    $sql_arquivo = "INSERT INTO arquivo (protocolo, assunto, requerente, data_cadastro, hora_cadastro, arquivo, ref_cod_tipo_arquivo) VALUES(null, '$assunto', '$requerente', NOW(), NOW(), '$novo_nome', $tipo_arquivo)";  //insert dos valores do arquivo
    $sql_consulta_protocolo = "SELECT protocolo FROM arquivo WHERE arquivo = '$novo_nome'"; //pega o numero de protocolo criado para poder utiliza-lo na criação do historico
   
 
    
    // Executa a consulta e armazena o valor
     $result_arquivo = mysql_query($sql_arquivo);

     // valida se há resultado
     if(!$result_arquivo){ 
      die('Nao foi possivel completar a insercao do arquivo:'. mysql_error());
      }

      GLOBAL $ref_protocolo;

      // Executa a consulta e armazena o valor
     $result_consulta_protocolo = mysql_query($sql_consulta_protocolo);

     // valida se há resultado
     if(!$result_consulta_protocolo){
      die('Nao foi possivel completar a consulta do protocolo:'. mysql_error());
      }
      
      //quebra o resultado da consulta em um array e pega cada ponto do array referenciado como $linha['protocolo'] para utilizar na consulta abaixo
      while ($linha = mysql_fetch_array($result_consulta_protocolo)){
         $linha['protocolo'];
        //inserção do historico utilizando o numero de protocolo adiquirido no array
         $sql_hist = "INSERT INTO historico(cod_hist, ref_cod_status, ref_protocolo, remetente, destinatario, data, hora, observacao, ativo) VALUES(null, 1 , $linha[protocolo], $remetente, $destinatario, NOW(), NOW(), '$observacao', 1)";
         //executa a consulta e armazena o valor
         $result_hist = mysql_query($sql_hist);
         //valida se há resultado
          if(!$result_hist){
            die('Nao foi possivel criar o historico:'. mysql_error());
            }
                
      }

      //alerta
      echo  "<script>alert('Protocolo criado com SUCESSO!);</script>";
      //redirecionamento
    echo "<script>document.location.href='../views/index.php'</script>";
}

?>
