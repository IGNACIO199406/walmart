<?php require_once "Config/variables_globales.php";
    if(isset($_SESSION['Usuario_Correo']))
  {  
  echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=panel.php'>";
  }else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php 	require_once "librerias/head.php";	?>
	<script type="text/javascript" src="js/Login_ajax.js"></script>
</head>
<body class="w3-grey">
	<div class="">
        <div class="main-content container-fluid">
          <div class="splash-container w3-card 4">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading"><img src="<?php echo $logo_icon;?>" alt="logo" style="width: 100%;" ><span class="splash-description">Por favor ingresa tu información.</span></div>
              <div class="panel-body">
                <form  id="Login" name="Login" class="w3-text-blue">
			        <div class="w3-row w3-section">
			          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
			            <div class="w3-rest">
			              <input class="w3-input w3-border w3-round-xlarge w3-text-black" id="Email" name="Email" type="text" placeholder="Usuario">
			              <div id="msg_usuario" name="msg_usuario" class="text-danger"></div>
			            </div>
			        </div>

			        <div class="w3-row w3-section">
			          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
			            <div class="w3-rest">
			              <input class="w3-input w3-border w3-round-xlarge w3-text-black" id="Password" name="Password" type="text" placeholder="Contraseña">
			              <div id="msg_password" name="msg_password" class="text-danger" ></div> 
			            </div>
			        </div>

			        <p class="w3-center">
			        <button class="btn btn-primary btn-block"> Iniciar sesión </button>
			        </p>
                 </form>
              </div>
            </div>
          </div>
        </div>
    </div>

<?php   require_once "Modal/Mensajes.php";  ?>
</body>
</html>
<?php
}
?>