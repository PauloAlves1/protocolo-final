<?php
	session_start();
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
    if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
		echo "<script>alert('Login ou senha esta vazio')</script>";
        header("Location: ../login.php"); exit;
    }
  
  
    $conexao = mysql_connect("localhost", "root", "") or print (mysql_error()); 
    mysql_select_db("protocolo", $conexao) or print(mysql_error()); 
    print "Conexão e Seleção OK!"; 
      
		// pega os valores do login e armazena em variaveis
        $usuario = mysql_escape_string($_POST['usuario']);
        $senha =($_POST['senha']);
    
		// sql para tabela usuario
		$sql = "select cod_user, login, senha, nome_user, matricula, ref_cod_setor, ref_cod_tipo_user
				from usuario
				where login = '$usuario'
				and senha = '$senha'
				limit 1";
				
		$query = mysql_query($sql);
		$linha = mysql_fetch_array($query);
		//print_r($linha);
		
		// verifica se ha resultado na consulta
		if(mysql_num_rows($query)!=1){
			echo "<script>alert('Login ou senha invalida : Favor tentar novamente')</script>";
			echo "<script>document.location.href = '../login.php'</script>";
		}
		else {
			$setor = $linha['ref_cod_setor'];
			// sql para tabela setor
			$sql2 = "select cod_setor, nome_setor
					 from setor
					 where cod_setor = '$setor'
					 limit 1";
			
			$query2 = mysql_query($sql2);
			$linha2 = mysql_fetch_array($query2);

			$_SESSION['nome_setor'] = $linha2['nome_setor'];
			// verifica se ha resultado na consulta
			if (mysql_num_rows($query2)!=1){ 
				echo "<script>alert('Ouve um Problema com sua Conta, Entre em contato com o Administrador do Sistema.')</script>";
				echo "<script>document.location.href = '../login.php'</script>";
			}
			else {

				
				// coloca os valores das consultas em variaveis de sessão

				$_SESSION['usuario'] = $linha['nome_user'];
				$_SESSION['matricula'] = $linha['matricula'];				
				$_SESSION['tipo_usuario'] = $linha['ref_cod_tipo_user'];
				$_SESSION['cod_user'] = $linha['cod_user'];
				$_SESSION['cod_setor'] = $linha['ref_cod_setor'];


				echo "<script>document.location.href = '../views/index.php'</script>";
			}
		}
	


 ?>








