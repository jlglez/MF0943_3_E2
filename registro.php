<?php 

if (isset($_GET)){
	
	if (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)){
		header("Location: index.php?error=e2&email=".$_GET["email"]);
		exit;	
	}

	try {

   	$conn = new PDO("mysql:host=localhost;dbname=mf0943_3_e2", 'root', '');

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      $sql = $conn->prepare("INSERT INTO email VALUES (:email)");
      $sql->bindValue(':email',$_GET['email']);
      $sql->execute();
		header("Location: index.php?error=e0&email=".$_GET["email"]);
   }
	catch (PDOException $exc) {

		if($exc->getCode()=="23000"){
			header("Location: index.php?error=e1&email=".$_GET["email"]);
			exit;
		}
   }

}


?>
