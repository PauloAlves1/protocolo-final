<div class="container">
       <img src="../assets/img/logomarca.png" class="center"; />
     <!--  Formulario de envio de arquivo atraves do metodo post com multipart/form-data -->
       <form action="../model/cadastrar.php" method="POST" enctype="multipart/form-data">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h3>Criar Usuario</h3>
          <input name="login" type="text" class="form-control input-sm" style="width: 40%;" placeholder="Login" />
          <br>
          <input name="senha" type="password" class="form-control input-sm" style="width: 40%;" placeholder="Senha" />
          <br>
          <input name="nome_user" type="text" class="form-control input-sm" style="width: 40%;" placeholder="Nome do Usuario" />
          <br>
          <input name="matricula" type="text" class="form-control input-sm" style="width: 40%;" placeholder="Matricula" />
          <input name="pagina" type="hidden" value="1" />
          <br>
           <p>
            <select  name="setor" class="form-control" style="width: auto;">
              <option value="">Escolha o Setor</option>
          
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

                    <option value="<?php echo $linha["cod_setor"] ?>"><?php echo $linha["nome_setor"]; ?></option>

                    <?php
                    }
                    ?>

              </select>
          </p>
          <p>
          <select class="form-control" style="width: auto;" name="tipo_user">
              <option value="">Escolha o tipo de Usuario</option>
              <option value="1">Administrador</option>
              <option value="2">Protocolista</option>
              <option value="3">Responsavel</option>
              <option value="4">Observador</option>
            </select>
          </p>
          <input type="submit" class="btn btn-outline btn-primary btn-block" style="width: 12%;" value="Finalizar"/>
          <br>
        </div>
       </form>
</div> 