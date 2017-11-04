<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-periodos.php'; ?>
<?php verificarLogin() ?>

<?php 


 if ($_POST){
    

     $id = $_POST['id'];
     exclui_periodo($id);

header('Location:index.php');


  }