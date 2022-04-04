<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Concesionary_PHP_OO_MVC/';
    include($path . "model/connect.php");
    
    class DAOLogin{
        function insert_user($username, $email, $password){
            $hashed_pass = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
            $hashavatar = md5(strtolower(trim($email))); 
            $avatar = "https://robohash.org/$hashavatar";
            $sql ="INSERT INTO users(`username`, `password`, `email`, `type`, `avatar`)
            VALUES ('$username','$hashed_pass','$email','client', '$avatar')";

            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

        function select_user($username){
			$sql = "SELECT `username`, `password`, `email`, `type`, `avatar` FROM `users` WHERE username='$username'";
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            $value = get_object_vars($res);
            return $value;
        }

		function select_email($email){
			$sql = "SELECT email FROM `users` WHERE email='$email'";
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}

        function select_data($username){
			$sql = "SELECT `username`, `email`, `type`, `avatar` FROM `users` WHERE username='$username'";
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
        }

    }

?>