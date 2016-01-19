<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio Choosqr</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css">
	<link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
	<div class="container">
		<div class="log col-lg-offset-8">
			<?php if( isset( $_SESSION['usser'] ) ) : ?>
				<a class="btn btn-primary" href="?logout" role="button">Salir sesión</a>
			<?php endif ; ?>	 
		</div>
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6">
				<h1><u>Choosqr</u></h1>
					<form action="?send" method="POST">
						<div class="form-group">
							<textarea class="form-control" name="content_message" cols="30" rows="5" placeholder="Introduzca una publicación..."></textarea>
						</div>
						<div class="form-group">
							<div class="form-group col-lg-10">
								<input class="form-control" type="text" name="nickname_ussers" placeholder="Usuario">
							</div>	
							<div class="form-group col-lg-2">
								<button class="btn btn-primary" type="submit">Publicar</button>
							</div>		
						</div>
					</form>
					<div class="form-group">
						<?php if ( !isset( $listMessage ) ) : ?>
							<h2>No existen publicaciones...</h2>
						<?php else : ?>
						<?php foreach($listMessage as $message) : ?>
							<div class="row">
								<div><?=$message['content_message']?></div>
								<div class="actionButton">
									<div class="col-lg-10">
										<p>Usuario : <strong><?=$message['nickname_ussers']?></strong> --- Fecha : <strong><?=$message['createdat_message']?></strong></p>
									</div>
									<div class="col-lg-1">
										<form action="?edit" method="POST">
											<input type="hidden" name="id_messagedit" value="<?=$message['id_message']?>">
											<button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="glyphicon glyphicon-pencil"></i></button>
										</form>
									</div>
									<div class="col-lg-1">
										<form action="?delete" method="POST">
											<input type="hidden" name="id_messagelete" value="<?=$message['id_message']?>">
											<button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="glyphicon glyphicon-trash"></i></button>
										</form>
									</div>
								</div>
								<br>
							</div>
						<?php endforeach; ?>
						<?php endif ; ?>							
					</div>
			</div>
		</div>

	</div>
</body>
</html>