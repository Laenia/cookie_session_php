<?php
	session_start(); 
	if(!isset($_SESSION['password']) == true){         
		unset($_SESSION['password']);
header("Location:index.php");
}    
echo"  parabéns: ".$_SESSION['username'].'<br>';
echo" vc está na pagina de usuário"
?>