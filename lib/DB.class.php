<?php
/**
* OMGL3
* Class DB : interface SGBD
*
*/
class DB{
 
	public static $Base;
 
 	//tente la connexion sur le SGBD, en utilisant des constantes définies
	private function __construct(){
 
		self::$Base=new PDO("mysql:host=".DB_HOST.";dbname=".BASE.";port=".PORT,DB_USER,DB_PASS);
		self::$Base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
 
	}
	

	//retourne l'instance unique
	public static function get_instance(){
			if (self::$Base==NULL)
				new DB();
			return self::$Base;
	}
}