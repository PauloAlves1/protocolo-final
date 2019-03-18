<?php
    session_start();
    $v_nome = $_SESSION['usuario'];
    $v_matricula = $_SESSION['matricula'];
    $v_tipo_usuario = $_SESSION['tipo_usuario'];
    $v_setor = $_SESSION['nome_setor'];
    $v_cod_setor = $_SESSION['cod_setor'];
    $v_cod_usuario = $_SESSION['cod_user'];
    $_SESSION['v_arquivo'] = $_POST['arquivo'];
    $_SESSION['v_protocolo'] = $_POST['protocolo'];
    $_SESSION['v_nome_remetente'] = $_POST['remetente'];
    $_SESSION['v_nome_destinatario'] = $_POST['destinatario'];
    $_SESSION['v_cod_destinatario'] = $_POST['cod_destinatario'];
    $_SESSION['v_cod_remetente'] = $_POST['cod_remetente'];
    $_SESSION['v_nome_tipo_arquivo'] = $_POST['nome_tipo_arquivo'];
    $_SESSION['v_status'] = $_POST['status'];  
    $_SESSION['v_assunto'] = $_POST['assunto'];
	
  date_default_timezone_set('America/Sao_Paulo');
  $date = date('Y-m-d H:i');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Protocolo</title>
    <!-- Core CSS - Include with every page -->
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/main-style.css" rel="stylesheet" />
    
    <!-- Page-Level CSS -->
    <link href="../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

     <!-- Modal Page-->
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("a[rel=modal]").click( function(ev){
                ev.preventDefault();

                //alterado
                var id = '.window';

                var alturaTela = $(document).height();
                var larguraTela = $(window).width();

                //colocando o fundo preto
                $('#mascara').css({'width':larguraTela,'height':alturaTela});
                $('#mascara').fadeIn(1000); 
                $('#mascara').fadeTo("slow",0.8);

                var left = ($(window).width() /2) - ( $(id).width() / 2 );
                var top = ($(window).height() / 2) - ( $(id).height() / 2 );
                
                $(id).css({'top':top,'left':left});
                
                //inserido 
                href = $(this).attr("href");
                $('.window').load(href);

                
                $(id).show();   
            });

            $("#mascara").click( function(){
                $(this).hide();
                $(".window").hide();
            });

            $('.fechar').click(function(ev){
                ev.preventDefault();
                $("#mascara").hide();
                $(".window").hide();
         });
        });
    </script>
    <style type="text/css">

        .window{
            display:none;
            width: 800px;
            height: 1000px;
            position: absolute;
            left:0;
            top:0;
            background:#FFF;
            z-index:9900;
            padding:10px;
            border-radius:1px;
        }

        #mascara{
            position:absolute;
            left:0;
            top:0;
            z-index:9000;
            background-color:#000;
            display:none;
        }
        .center {
            position: absolute;
            left: 33%;
            text-align: center;
        }

        .fechar{display:block; text-align:center;}

    </style> 

   </head>
<body>
  <?php 
        include_once("cabecalho.php");
        
        $link = $_GET["link"];
        $page[1] = "protocolo/criar_protocolo.php";
        $page[2] = "cadastrar/cadastrar.php";
        $page[3] = "listas/deferidos.php";
        $page[4] = "listas/indeferidos.php";
        $page[5] = "listas/andamento.php";
        $page[6] = "protocolo/oficio.php";
        $page[7] = "protocolo/ci.php";
        $page[8] = "usuario/entrada.php";
        $page[9] = "listas/historico.php";
        $page[10] = "protocolo/opcoes.php";
        $page[11] = "protocolo/opcoes_procura.php";
        $page[12] = "error.php";
		$page[13] = "protocolo/procura.php";
        $page[14] = "protocolo/tratamento.php";

        if(!empty($link)){
          if (file_exists($page[$link])){
            include $page[$link];
          }else{
            include "protocolo/index.php";
          }       
        } else {
          include "protocolo/index.php";
        }
        
  ?>
  <div class="window" id="janela1"></div>
                <!-- mascara para cobrir o site --> 
                <div id="mascara"></div>
     <!-- Core Scripts - Include with every page -->
    <script src="../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/plugins/pace/pace.js"></script>
    <script src="../assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="../assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/plugins/morris/morris.js"></script>
    <script src="../assets/scripts/dashboard-demo.js"></script> 
</body>
</html>