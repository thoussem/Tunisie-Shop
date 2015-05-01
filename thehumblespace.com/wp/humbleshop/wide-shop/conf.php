<?php
class DB{

	PRIVATE $host = 'localhost';
	PRIVATE $username = 'rooot';
	PRIVATE $password = '';
	PRIVATE $database = 'ecommerce';
	PRIVATE $db;

	public function __construct($host = null,$username = null ,$password = null ,$database =null)
	{
		if($host!=null)
		{
			$this->host=$host;
			$this->username=$username;
			$this->password=$password;
			$this->database=$database;
		}
	try{
	$this->db=new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->username,$this->password);
	}
	catch(PDOException $e)
	{die('<h1>Impossible de ce connecte a la base de donnee</h1>');}

}}

?>