<?php 
class Database{

	public static function conectar(){
		$servidor= "localhost";
		$usuario="root";
		$password="";
		$base_datos="appchat";

		return $conexion = new PDO("mysql:host=$servidor; dbname=$base_datos","$usuario","$password");
					
	}

}

?>