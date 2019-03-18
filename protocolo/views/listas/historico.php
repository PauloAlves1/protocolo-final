 <?php 
$protocolo = $_POST['protocolo'];;

 ?>
   <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Historico</h1>
                </div>
                <!--End Page Header -->
            </div>
			<div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i>&nbsp;Olar! <b> <?php echo $v_nome; ?></b> voce esta na area de <b>Historico de Numero <?php echo $protocolo;?></b> Referente a este <a href="../model/upload/<?php echo $arquivo;?>" target="_blank" > Arquivo</a>. 

                    </div>
                </div>
                <!--end  Welcome -->
            </div>

                    <div class="table-responsive">
                         <table class="table table-bordered table-striped">
                            <thead>
								  <tr>
                                    <th>N&ordm; Protocolo</th>
									<th>Remetente</th>
                                    <th>Requerente</th>
                                    <th>Destinat&aacute;rio</th>
                                    <th>Data</th>
									<th>Hora</th>
                                    <th>Status</th>
                                    <th>Observa&ccedil;&atilde;o</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
function deferido($protocolo){
	include_once "../model/conexao.php";
	
	$sql = "select a.requerente, h.ref_protocolo, st.nome_status as status,  u.nome_user as remetente, s.nome_setor as destinatario, h.observacao, h.data, h.hora
			from historico h
            inner join arquivo a
            on h.ref_protocolo = protocolo
            inner join usuario u
            on h.remetente = u.cod_user
            inner join setor s
            on h.destinatario = s.cod_setor 
            inner join status st
            on ref_cod_status = cod_status
			where h.ref_protocolo = $protocolo
			order by h.ref_protocolo, h.data, h.hora";
	
	GLOBAL $query;
	$query = mysql_query($sql);
    return $query;
}
							deferido($_SESSION['v_protocolo']);
							while($linha = mysql_fetch_array($query)){
?>
									<tr>
										<td><?php echo $linha["ref_protocolo"]?></th>
										<td><?php echo $linha["remetente"]?></td>
                                        <td><?php echo $linha["requerente"]?></td>
										<td><?php echo $linha["destinatario"]?></td>
										<td><?php echo $linha["data"]?></td>
										<td><?php echo $linha["hora"]?></td>
                                        <td><?php echo $linha["status"]?></td>
                                        <td><?php echo $linha["observacao"] ?></td>
									</tr>
							<?php
							}
							?>
                            </tbody>
                        </table>
                    </div>
        </div>

    <!-- end wrapper -->