<?php 

	session_start(); 	
	if(isset($_SESSION['username']) == true){
		header("Location: pagina.php");
	}
?>
<?php
    session_start();
		if(isset($_POST['enviar'])){			
    $password = $_POST['password'];
        $user=$_POST['usuario'];
       $_SESSION['username']=$user;
			if( $password == $_POST['password'] ){
				$_SESSION['password'] = $password;
				header("Location: pagina.php");
			}else{
			}
		}
	?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Login</title>
    </head>
  <body>
    <h1>Login</h1>
<form enctype="multipart/form-data" method="post" action="
  ">
  <label>Nome</label>
    <input type="text" name="usuario"  placeholder="usuario"><br>
  <label class="password"  >Senha</label>
	<input type="password" name="password" placeholder="senha"><br>
	<button type="submit" name="enviar">entrar</button>
</body>
</html>
  