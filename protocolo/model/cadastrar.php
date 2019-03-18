<?php
include("conexao.php");
    
$pagina = ($_POST['pagina']);

switch ($pagina) {
  case '1':
    criar_usuario();
    break;
  case '2':
    criar_setor();
    break;
  case '3':
    criar_status();
    break;
  case '4':
    criar_tipo_arquivo();
    break;
  default:
    echo "houve um ERRO!";
    break;
}

function criar_usuario(){
// Verifica se existe um arquivo
  if(isset($_POST['login'])){
 
 // Recebendo dados enviados pelo formulario via POST
    $login = ($_POST['login']);
    $senha = ($_POST['senha']);
    $nome = ($_POST['nome_user']);
    $matricula = ($_POST['matricula']);
    $setor = ($_POST['setor']);
    $tipo_user = ($_POST['tipo_user']);

    //sql se inserção do usuario no banco utilizando os dados recebidos via POST
    $sql_criar_user = "INSERT INTO usuario (cod_user, login, senha, nome_user, matricula, ref_cod_setor, ref_cod_tipo_user) VALUES(null, '$login', '$senha', '$nome', '$matricula', '$setor', '$tipo_user')";  //insert dos valores do arquivo
   
 
     $result_criar_user = mysql_query($sql_criar_user);

     if(!$result_criar_user){
      die('Nao foi possivel criar o usuario:'. mysql_error());
      }
     
      echo  "<script>alert('Usuario criado com SUCESSO!);</script>";

    echo "<script>document.location.href='../views/index.php'</script>";
  }
}

function criar_setor(){

  if(isset($_POST['nome_setor'])){

    $nome_setor = $_POST['nome_setor'];

    $sql_criar_setor = "INSERT INTO setor(cod_setor, nome_setor) VALUES(null, '$nome_setor')";

    $result_criar_setor = mysql_query($sql_criar_setor);

    if(!$result_criar_setor){
      die('Não foi possivel criar o Setor');
    }
    echo  "<script>alert('Setor criado com SUCESSO!);</script>";

    echo "<script>document.location.href='../views/index.php'</script>";
  }

}

function criar_status(){

  if(isset($_POST['nome_status'])){

    $nome_status = $_POST['nome_status'];

    $sql_criar_status = "INSERT INTO status(cod_status, nome_status) VALUES(null, '$nome_status')";

    $result_criar_status = mysql_query($sql_criar_status);

    if(!$result_criar_status){
      die('Não foi possivel criar o Status');
    }
    echo  "<script>alert('Status criado com SUCESSO!);</script>";

    echo "<script>document.location.href='../views/index.php'</script>";
  }
  
}

function criar_tipo_arquivo(){

    if(isset($_POST['nome_tipo_arquivo'])){

    $nome_tipo_arquivo = $_POST['nome_tipo_arquivo'];

    $sql_criar_tipo_arquivo = "INSERT INTO tipo_arquivo(cod_tipo_arquivo, nome_tipo_arquivo) VALUES(null, '$nome_tipo_arquivo')";

    $result_criar_tipo_arquivo = mysql_query($sql_criar_tipo_arquivo);

    if(!$result_criar_tipo_arquivo){
      die('Não foi possivel criar o Tipo de Arquivo');
    }
    echo  "<script>alert('Tipos de Arquivo criado com SUCESSO!);</script>";

    echo "<script>document.location.href='../views/index.php'</script>";
  }
  
}

?>
