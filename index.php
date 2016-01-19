<?php  

	require_once 'app/config.php';
	require_once 'db/db.php';
	
	session_start();
 
	if( isset( $_GET['logout'] ) ) {
    
    	unset($_SESSION['usser']);
    	session_destroy();
    
   		header('Location: '.$base_url.'/log');
		exit();

	}

	try{

		$sql = 'SELECT content_message, createdat_message, nickname_ussers FROM message JOIN ussers ON message.id_author_message = ussers.id_ussers ORDER BY message.content_message ASC ;';
		$ps = $pdo->prepare($sql);
		$ps->execute();

		}catch(PDOException $e) {

			die("No se ha podido consultar información en la base de datos:". $e->getMessage());

		}

	while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

	$listMessage[] = $row;

	}	

	require_once 'index.html.php';	

?>