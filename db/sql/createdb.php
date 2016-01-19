<?php  

	require_once('../db.php');

	global $pdo;

	try {

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sqlUsser = "CREATE TABLE ussers (
		id_ussers 					INT AUTO_INCREMENT PRIMARY KEY,
		nickname_ussers 			VARCHAR(50),
		password_ussers 			VARCHAR(50),
		email_ussers				VARCHAR(50),
		createdat_ussers 			TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		deletedat_ussers			TIMESTAMP NULL DEFAULT NULL
		) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB;";

	$pdo -> exec($sqlUsser);

	$sqlMessage = "CREATE TABLE message (
		id_message 				      INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		id_author_message	      	  INT,
		content_message			      VARCHAR(140) NOT NULL,
		createdat_message			  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		modifiedat_message			  TIMESTAMP NULL DEFAULT NULL,

		FOREIGN KEY (id_author_message) REFERENCES ussers(id_ussers)
			ON UPDATE CASCADE
			ON DELETE SET NULL
		) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB;";

	$pdo -> exec($sqlMessage);
	
} catch (PDOException $e) {
	
	die("No se ha podido crear la base de datos debido a ... ". $e->getMessage());

}

?>