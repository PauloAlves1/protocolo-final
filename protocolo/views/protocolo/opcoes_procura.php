<?php 
include_once "../model/conexao.php";


?>
    <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Op&ccedil;&otilde;es</h1>
                </div>
                <!--End Page Header -->
            </div>
      <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i>&nbsp;Olar! <b> <?php echo $v_nome; ?></b> voce esta na area do <b>Protocolo de Numero <?php echo $protocolo_procura; ?></b> referente a este <a href="../model/upload/<?php echo $arquivo_procura;?>" target="_blank" > Arquivo</a>. que esta com o status <?php echo $status_procura;?>    
                    </div>
                    <h3>Requerente:</h3><h4><?php echo  $requerente_procura; echo $datainicial;?></h4>
                </div>
                <!--end  Welcome -->
            </div>
            <div class="row">
            <div class="col-lg-6">
                <h4> Deseja Deferir/Indeferir/Ecaminhar esse protocolo? </h4>
                <div class="panel panel-default">
                        <div class="panel-body">
                            <br>
                             <div class="col-lg-4">
                                <div class="alert alert-default text-center">
                                    <a class="btn btn-outline btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModalDeferir"><i class="fa fa-check fa-3x"></i><b><br>Deferir</a>      
                                </div>
                            </div>
                                <div class="col-lg-4">
                                    <div class="alert alert-default text-center">    

                                         <a class="btn btn-outline btn-danger btn-lg btn-block" data-toggle="modal" data-target="#myModalIndeferir"><i class="fa fa-warning fa-3x"></i><b><br>Indeferir</a>      
                                    
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="alert alert-default text-center">                                   
                                        
                                         <a href="#" class="btn btn-outline btn-default btn-lg btn-block" data-toggle="modal" data-target="#myModalEcaminhar"><i class="fa fa-arrow-right fa-3x"></i><b><br>Encaminhar</a>      
                                   
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h4>Vizualizar</h4>
                    <div class="panel panel-default">
                            <div class="panel-body">
                                <br>
                                 <div class="col-lg-4">
                                    <div class="alert alert-default text-center">
                                      <form action="index.php?link=9" method="post" > 
                                        <input type="hidden" name="protocolo" id="protocolo" value="<?php echo $protocolo_procura;?>" />
                                        <button type="submit" class="btn btn-outline btn-primary btn-lg btn-block" ><i class="fa fa-list fa-3x"></i><b><br> Histor&iacuteco </b></button>  
                                       </form>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             </div> 
             <div class="row">
                 <!--  Modals GAMBIARRA-->
                          <div class="modal fade" id="myModalDeferir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Deferir</h4>
                                        </div>
                                        <div class="modal-body">
                                         
                                         <form action="../model/deferir_indeferir_encaminhar.php" method="POST" enctype="multipart/form-data"> 
                                          Observa&ccedil;&atilde;o 
                                          <input name="observacao" type="text" class="form-control input-sm"  placeholder="Observa&ccedil;&atilde;o" />
                                          <br>
                                          Protocolo de N&ordm;
                                          <?php echo $v_protocolo;?>
                                          <input name="protocolo" type="hidden" value="<?php echo $protocolo_procura; ?>">
                                        
                                          <input name="cod_remetente" type="hidden" value="<?php echo $cod_remetente_procura; ?>">
                                         
                                          <input name="cod_destinatario" type="hidden" value="<?php echo $cod_destinatario_procura; ?>">
                                        
                                          <input name="pagina" type="hidden" value="1">

                                          </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-primary">Deferir</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     <!-- End Modals-->

                     <!--  Modals GAMBIARRA-->
                          <div class="modal fade" id="myModalIndeferir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Indeferir</h4>
                                        </div>
                                        <div class="modal-body">
                                         
                                         <form action="../model/deferir_indeferir_encaminhar.php" method="POST" enctype="multipart/form-data"> 
                                          Observa&ccedil;&atilde;o 
                                          <input name="observacao" type="text" class="form-control input-sm"  placeholder="Observa&ccedil;&atilde;o" />
                                          <br>
                                          Protocolo de N&ordm;
                                          <?php echo $_SESSION['v_protocolo'];?>
                                          <input name="protocolo" type="hidden" value="<?php echo $protocolo_procura; ?>">
                                        
                                          <input name="cod_remetente" type="hidden" value="<?php echo $cod_remetente_procura; ?>">
                                         
                                          <input name="cod_destinatario" type="hidden" value="<?php echo $cod_destinatario_procura; ?>">
                                        
                                          <input name="pagina" type="hidden" value="2">

                                          </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-danger">Indeferir</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     <!-- End Modals-->

                      <!--  Modals GAMBIARRA-->
                          <div class="modal fade" id="myModalEcaminhar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Ecaminhar</h4>
                                        </div>
                                        <div class="modal-body">
                                         
                                         <form action="../model/deferir_indeferir_encaminhar.php" method="POST" enctype="multipart/form-data"> 
                                          Observa&ccedil;&atilde;o 
                                          <input name="observacao" type="text" class="form-control input-sm"  placeholder="Observa&ccedil;&atilde;o" />
                                          
                                          <input name="protocolo" type="hidden" value="<?php echo $protocolo_procura; ?>">
                                        
                                          <input name="cod_remetente" type="hidden" value="<?php echo $v_cod_usuario; ?>">
                                                   <br>
                                                          <p>
                                                        <select  name="destinatario" class="form-control" style="width: auto;">
                                                          <option value="">Escolha o Setor Destino</option>
                                                      
                                                                <?php
                                                                function setor_combo(){
                                                                include_once "../../model/conexao.php";

                                                                $sql = "select s.cod_setor, s.nome_setor  from setor s";

                                                                GLOBAL $query;
                                                                $query = mysql_query($sql);
                                                                return $query;
                                                                }   
                                                                setor_combo();
                                                                while($linha = mysql_fetch_array($query)){
                                                                ?>

                                                                <option value="<?php echo $linha["cod_setor"] ?>"><?php echo $linha["nome_setor"] ?></option>

                                                                <?php
                                                                }
                                                                ?>

                                                          </select>
                                                    </p>
                                                 <br>
                                          Protocolo de N&ordm;
                                          <?php echo $_SESSION['v_protocolo'];?>   
                                        
                                          <input name="pagina" type="hidden" value="3">

                                          </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-default">Ecaminhar</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     <!-- End Modals-->

      
             </div>

              
               

    <!-- end wrapper -->