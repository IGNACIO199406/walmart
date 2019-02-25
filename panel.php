<?php 
require_once "Config/variables_globales.php";
    if(isset($_SESSION['Usuario_Correo']) and $Acciones_View==1)
  {  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Panel</title>
  <?php require_once $librerias_head;  ?>
</head>
<body>
 <div class="be-wrapper be-fixed-sidebar ">
<?php   require_once $menu_arriba;  ?>
<?php   require_once $menu_derecha;  ?>

      <div class="be-content">
        <div class="main-content container-fluid">
               <?php



?>

<?php

?>
        </div>
      </div>
   </div>

<?php   require_once $librerias_body;  ?>
</body>
</html>
<?php
}
else{
  echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=cerrar.php'>";
}
?>