<div class="container">
       <img src="../assets/img/logomarca.png" class="center"; />
     <!--  Formulario de envio de arquivo atraves do metodo post com multipart/form-data -->
       <form action="../model/upload.php" method="POST" enctype="multipart/form-data">
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
        <h3>Ofício</h3>
          <input name="assunto" type="text" class="form-control input-sm" style="width: 40%;" placeholder="Assunto" required/>
        <br>
          <input name="requerente" type="text" class="form-control input-sm" style="width: 40%;" placeholder="Requerente" required/>
        <br>
          <input name="remetente" type="text" class="form-control input-sm" style="width: 40%;" value="Protocolista" disabled />
          <input name="tipo_arquivo" type="hidden" value="1">
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
        <div class="alert alert-success text-left" style="width: 31%;">
        Anexar Arquivo:
              <br>  
              <!-- função para selecionar um arquivo local -->
              <input type="file" required name="arquivo"/>
        </div>
          <textarea name="observacao" rows="4" class="form-control" style="width:40%;" placeholder="Observacao" maxlength="200"/>          
          <br>
          <br>
          <input type="submit" class="btn btn-outline btn-primary btn-block" style="width: 12%;" value="Finalizar"/>
        <br>
       </form>
</div> 