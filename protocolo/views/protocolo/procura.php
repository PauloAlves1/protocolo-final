<?php
if($_GET){
    
    $sql_linha_requerente = "";
    $sql_linha_datainicial = "";
    $sql_linha_datainicial = "";

  if(isset($_GET['requerente'])){
    $sql_linha_requerente = "";
  }
  if(isset($_GET['datainicial'])){
    $sql_linha_datainicial = "";
  }
  if(isset($_GET['datafinal'])){
    $sql_linha_datafinal = "";
  }
    $sql_lista = "SELECT * arquivo where requerente = $sql_linha_requerente or data_cadastro = $sql_linha_datainicial or data_cadastro between $sql_linha_datainicial and $sql_linha_datafinal";
}
    
?>
	  <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Procura</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i>&nbsp;Olar! <b> <?php echo $v_nome; ?></b> voce esta na area de <b>PROCURA</b>
                    </div>
					<div class="alert alert-danger">
                        <i class="fa fa-bell"></i>&nbsp;Os Campos a Seguir Não São Obrigatorios.
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
            <div>
				<form action="index.php?link=11" method="POST" >

					<input type="text" name="protocolo" id="protocolo" class="form-control" style="width: 10%;"  placeholder="N&ordm; do Protocolo..." maxlength="12" />
					<br>
                  <form>
                <form action="index.php?link=13" method="GET">  
                    <input type="text" name="requerente" id="requerente" class="form-control" style="width: 20%;" placeholder="Nome do Requerente..." maxlength="100" />
                    <br>
					<input type="text" name="datainicial" id="datainicial" class="form-control" style="width: 13%;"  data-mask="99/99/9999" placeholder="Data Inicial do Período" maxlength="10" />
					<br>
					<input type="text" name="datafinal" id="datafinal" class="form-control" style="width: 13%;" placeholder="Data Final do Período" maxlength="10"/>
					<br>
					<input type="submit" class="btn btn-primary" style="width: 10%;" value="Procurar" />
				</form>
			</div>
        </div>

    <!-- end wrapper -->

