<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-periodos.php'; ?>
<?php verificarLogin() ?>

<div class="cointainer">

	<div class="page-header">
		<h2>Gerenciar <small>Períodos</small></h2>		
	</div>	

</div>
<form action="#" method="POST">
  <div class="form-group">
    <label>Periodos</label>
    <input type="text" name="periodo" class="form-control" required>
  </div>
  
  <a class="btn btn-warning" href="/DexterEscola/admin/periodos/index.php" role="button">volta</a>
  <button type="submit" class="btn btn-default">Salvar</button>
</form>

    	
	</div>

  <?php

 

  if ($_POST){
    

     $descricao = $_POST['periodo'];

insere_periodo($descricao); 

header('Location:index.php');


  }





  ?>
<?php include_once '../layout/_rodape.php'; ?>