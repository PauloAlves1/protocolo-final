<?php 
    $limit = "limit 20";
    if (isset($_POST['limit'])){
       $limit = $_POST['limit']; 
    }
?>
     
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Em Andamento</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i>&nbsp;Olar! <b> <?php echo $v_nome; ?></b> voce esta na area de <b>DOCUMENTOS EM ANDAMENTO!</b>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
            <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>N&ordm; Protocolo</th>
                                    <th>Assunto</th>
                                    <th>Requerente</th>
                                    <th>Destinat&aacute;rio</th>
                                    <th>Remetente</th>
									<th>Tipo</th>
                                    <th>Arquivo</th>
                                    <th>H&iacutestorico </th>
                                    <th>Observa&ccedil;&atilde;o</th>
                                </tr>
                            </thead>
							<tbody>
                             <?php
                                function andamento($cod_setor){
                                	include_once "../model/conexao.php";
                                	
                                	$sql = "SELECT a.protocolo, a.requerente, h.remetente AS cod_remetente, h.destinatario AS cod_destinatario, a.assunto, st.nome_status AS
                                                status , u.nome_user AS remetente, s.nome_setor AS destinatario, h.observacao, a.arquivo, t.nome_tipo_arquivo, cod_status
                                                FROM arquivo a
                                                INNER JOIN historico h ON a.protocolo = h.ref_protocolo
                                                AND h.destinatario = $cod_setor and h.ativo = 1 and h.ref_cod_status = 1
                                                INNER JOIN tipo_arquivo t ON a.ref_cod_tipo_arquivo = t.cod_tipo_arquivo
                                                INNER JOIN usuario u ON h.remetente = u.cod_user
                                                INNER JOIN setor s ON h.destinatario = s.cod_setor
                                                INNER JOIN STATUS st ON ref_cod_status = cod_status
                                                ORDER BY h.data DESC
                                                $limit";
                                	
                                	GLOBAL $query;
                                	$query = mysql_query($sql);
                                    return $query;
                                }
							andamento($v_cod_setor);
							while($linha = mysql_fetch_array($query)){
                            ?>
									<tr>
										<td><?php echo $linha["protocolo"];
										$protocolo = $linha["protocolo"];?>
										</td>
										<td><?php echo $linha["assunto"]?></td>
                                        <td><?php echo $linha["requerente"]?></td>
										<td><?php echo $linha["destinatario"]?></td>
										<td><?php echo $linha["remetente"]?></td>
										<td><?php echo $linha["nome_tipo_arquivo"]?></td>
										<td><a href="../model/upload/<?php echo $linha["arquivo"]?>" target="_blank" > Arquivo </a></td>
										<td>
										<form action="<?php if($linha["cod_status"] == 1) {echo "index.php?link=10";} else {echo "index.php?link=9";} ?>" method="post">
                                                <input type="hidden" id="arquivo" name="arquivo" value="<?php echo $linha['arquivo'];?>">
                                                <input type="hidden" id="protocolo" name="protocolo" value="<?php echo $linha['protocolo'];?>" />
                                                <input type="hidden" id="assunto" name="assunto" value="<?php echo $linha['assunto'];?>" />
                                                <input type="hidden" id="requerente" name="requerente" value="<?php echo $linha['requerente'];?>" />
                                                <input type="hidden" id="nome_destinatario" name="destinatario" value="<?php echo $linha['destinatario'];?>" />
                                                <input type="hidden" id="cod_destinatario" name="cod_destinatario" value="<?php echo $linha['cod_destinatario'];?>" />
                                                <input type="hidden" id="nome_remetente" name="remetente" value="<?php echo $linha['remetente'];?>" />
                                                <input type="hidden" id="cod_remetente" name="cod_remetente" value="<?php echo $linha['cod_remetente'];?>" />
                                                <input type="hidden" id="nome_tipo_arquivo" name="nome_tipo_arquivo" value="<?php echo $linha['nome_tipo_arquivo'];?>" />
                                                <input type="hidden" id="status" name="status" value="<?php echo $linha["status"];?>" /> 
                                                <input class='btn btn-link btn-xs' type="submit" value="<?php if($linha["cod_status"] == 1) {echo "Mais op&ccedil;&otilde;es";} else {echo "Historico";} ?> " />
                                            </form>
										</td>
                                        <td><?php echo $linha["observacao"] ?></td>
									</tr>
							<?php
							}
							?>
							</tbody>
                        </table>
                    </div>
        </div>
                    <!-- end row -->
              <div style="float: right;">
                <form method="POST" action="index.php?link=5">
                <input type="hidden" id="limit" name="limit" value="limit 100" />
                <input class='btn btn-link btn-xs' type="submit" value="Lista inteira" />

                </form>
              </div> 

</div>
        <!-- end page-wrapper -->

</div>

    <!-- end wrapper -->
