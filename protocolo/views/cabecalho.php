<?php 

if ($v_tipo_usuario == 1 || $v_tipo_usuario == 2){
$nome_diretorio = "Criar Documento";
$diretorio =  "index.php?link=1";
}else{
$nome_diretorio = "Entrada";
$diretorio = "index.php?link=8";
}
?>
<!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                 <a class="navbar-brand" href="index.php?link=1">
                    <br>
                    <img src="../assets/img/titulo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <?php if ($v_tipo_usuario == 1){
                        echo '<li><a href="index.php?link=2"><i class="fa fa-gear fa-fw"></i>Cadastrar</a>';
                        echo '</li>';
                        echo '<li class="divider"></li>';
                    }
                            ?>
                        <li><a href="../login.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->
        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="../assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><?php echo $v_nome; ?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="">
                        <a href="index.php?link=13"><i class="fa fa-search fa-fw"></i> Procura</a>
                    </li>
                    <li class="">
                        <a href="<?php echo $diretorio?>"><i class="fa fa-home fa-fw"></i><?php echo $nome_diretorio; ?></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Listas<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="index.php?link=5">Em Andamento</a>
                            </li>
                            <li>
                                <a href="index.php?link=3">Deferidos</a>
                            </li>
                            <li>
                                <a href="index.php?link=4">Indeferidos</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>

                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->