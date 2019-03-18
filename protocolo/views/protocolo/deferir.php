<div>
       <br>
       <img src="../assets/img/logomarca.png" class="center"; />
     <!--  Formulario de envio de arquivo atraves do metodo post com multipart/form-data -->

       <form action="../model/deferir_indeferir_encaminhar.php" method="POST" enctype="multipart/form-data">
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
        <h3>Deferir Protocolo</h3>
           <h4>Observa&ccedil;&atilde;o?</h4>   
          <textarea name="observacao" rows="4" class="form-control" style="width:40%;" placeholder="Escreva aqui sua observa&ccedil;&atilde;o" maxlength="200"/>          
          <small><p class="text-danger">Caso n&atilde;o queira fazer nenhuma observa&ccedil;&atilde;o deixe em branco.</p></small>
          <input name="pagina" type="hidden" value="1">
          <input name="protocolo" type="text" class="form-control input-sm" style="width: 40%;" value="<?php echo $prot; ?>" disabled/>
          <br>
          <br>
       	  <input type="submit" class="btn btn-outline btn-primary btn-block" style="width: 12%;" value="Finalizar"/>
       	<br>
       </form>
</div> 
