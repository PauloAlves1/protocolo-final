        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastrar/Editar</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                       <pre><b>&nbsp;Olar ! </b>Bem Vindo <b><?php echo $v_nome;?> </b> as Opcoes de Cadastro/Editar, essa area e exclusiva para ADMINISTRADORES!</pre>
                </div>
                <!--end  Welcome -->
            </div>


         <div class="row">

            <div class="col-lg-6">
                <h4>Usuario</h4>
                <div class="panel panel-default">
                        <div class="panel-body">
                            <br>
                             <div class="col-lg-4">
                                <div class="alert alert-default text-center">
                                    <a href="cadastrar/criar_usuario.php" class="btn btn-outline btn-primary btn-lg btn-block" rel="modal"><i class="fa fa-user fa-3x"></i><b><br>Criar Usuario</a>      
                                </div>
                            </div>
                                <div class="col-lg-4">
                                    <div class="alert alert-default text-center">                                   
                                         <a href="cadastrar/editar_usuario.php" class="btn btn-outline btn-primary btn-lg btn-block" rel="modal"><i class="fa fa-user fa-3x"></i><b><br>Editar Usuario</a>      
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h4>Setor</h4>
                    <div class="panel panel-default">
                            <div class="panel-body">
                                <br>
                                 <div class="col-lg-4">
                                    <div class="alert alert-default text-center">
                                        <a href="cadastrar/criar_setor.php" class="btn btn-outline btn-primary btn-lg btn-block" rel="modal"><i class="fa fa-home fa-3x"></i><b><br>Criar Setor</a>      
                                    </div>
                                </div>
                                    <div class="col-lg-4">
                                        <div class="alert alert-default text-center">                                   
                                             <a href="#" class="btn btn-outline btn-primary btn-lg btn-block" rel="modal"><i class="fa fa-home fa-3x"></i><b><br>Editar Setor</a>      
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

            </div>

          <div class="row">

            <div class="col-lg-6">
                <h4>Tipo de Arquivo</h4>
                <div class="panel panel-default">
                        <div class="panel-body">
                            <br>
                             <div class="col-lg-5"> 
                                <div class="alert alert-default text-center">
                                    <a href="cadastrar/criar_tipo_arquivo.php" class="btn btn-outline btn-primary btn-lg btn-block" rel="modal"><i class="fa fa-file fa-3x"></i><b><br>Criar tipo de arquivo</a>      
                                </div>
                            </div>
                                <div class="col-lg-5">
                                    <div class="alert alert-default text-center">                                   
                                         <a href="#" class="btn btn-outline btn-primary btn-lg btn-block" rel="modal"><i class="fa fa-file fa-3x"></i><b><br>Editar tipo de arquivo</a>      
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h4>Status do Arquivo</h4>
                    <div class="panel panel-default">
                            <div class="panel-body">
                                <br>
                                 <div class="col-lg-4">
                                    <div class="alert alert-default text-center">
                                        <a href="cadastrar/criar_status.php" class="btn btn-outline btn-primary btn-lg btn-block" rel="modal"><i class="fa fa-check fa-3x"></i><b><br>Criar Status</a>      
                                    </div>
                                </div>
                                    <div class="col-lg-4">
                                        <div class="alert alert-default text-center">                                   
                                             <a href="#" class="btn btn-outline btn-primary btn-lg btn-block" rel="modal"><i class="fa fa-check fa-3x"></i><b><br>Editar Status</a>      
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
             
            </div>




            <div class="window" id="janela1">
            
              </div>

        <!-- mascara para cobrir o site --> 
            <div id="mascara"></div>

        <!-- end page-wrapper -->

    </div>

    <!-- end wrapper -->
