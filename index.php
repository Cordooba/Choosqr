<?php  

	require_once 'app/config.php';

	session_start();

    if( isset($_GET['login']) ){

        if( $_POST['nick'] == 'root' && $_POST['password'] == 'root' ){

            $nombre = $_POST['nick'];
            
            //Se ha establecido o creado una session
            $_SESSION['usser'] = $nombre;

            header('Location: main' );

        }else{

            echo 'ERROR 404';

        }

        exit();

    }else{

        require_once 'index.html.php';

    }

?>