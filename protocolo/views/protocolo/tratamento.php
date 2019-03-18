<?php 
$arraydatainicial = explode('/', $v_data = $_POST['datainicial']);
$data_inicial_consulta = $arraydatainicial[2].'-'.$arraydatainicial[1].'-'.$arraydatainicial[0];

$arraydatafinal = explode('/', $v_data = $_POST['datafinal']);
$data_final_consulta = $arraydatafinal [2].'-'.$arraydatafinal [1].'-'.$arraydatafinal [0];

$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];

$consulta_linha1 = null;
$consulta_linha2 = null;

if (isset($_POST['protocolo'])){
    $v_protocolo = $_POST['protocolo'];
    $consulta_linha1 = "WHERE a.protocolo = $v_protocolo";
}

if(iseet($_POST['requerente'])){
    $v_requerente = $_POST['requerente'];
    $consulta_linha1= "WHERE a.requerente = $v_requerente";
}

if(iseet($_POST['datainicial'])){
    $v_datainicial = $_POST['datainicial'];
    $consulta_linha2 = 'and h.data between "2000-01-01" and "2016-12-12"';
}

if(iseet($_POST['datafinal'])){


}



$sql = "SELECT a.protocolo, a.requerente, h.remetente AS cod_remetente, h.destinatario AS cod_destinatario, a.assunto, st.nome_status AS
          STATUS , u.nome_user AS remetente, s.nome_setor AS destinatario, h.observacao, a.arquivo, t.nome_tipo_arquivo, h.ref_cod_status
          FROM arquivo a
          INNER JOIN historico h ON a.protocolo = h.ref_protocolo
          AND h.ativo =1 $consulta_linha3
          INNER JOIN tipo_arquivo t ON a.ref_cod_tipo_arquivo = t.cod_tipo_arquivo
          INNER JOIN usuario u ON h.remetente = u.cod_user
          INNER JOIN setor s ON h.destinatario = s.cod_setor
          INNER JOIN STATUS st ON h.ref_cod_status = st.cod_status
          $consulta_linha1"; //variavel

$result = mysql_query($sql);
  
  while($linha = mysql_fetch_array($result)){
            
          $arquivo_procura = $linha['arquivo'];
          $protocolo_procura = $linha['protocolo'];
          $remetente_procura = $linha['remetente'];
          $destinatario_procura = $linha['destinatario'];
          $cod_destinatario_procura = $linha['cod_destinatario'];
          $cod_remetente_procura = $linha['cod_remetente'];
          $nome_tipo_arquivo_procura = $linha['nome_tipo_arquivo'];
          $nome_status_procura = $linha['status']; 
          $cod_status_procura = $linha['cod_status']; 
          $assunto_procura = $linha['assunto'];
          $requerente_procura = $linha['requerente'];

      }
      
      /*if ($cod_destinatario_procura != $v_cod_setor ||  $cod_status_procura != 1){
        echo "<script>document.location.href='../views/index.php?link=12'</script>";
      }*/


?>

