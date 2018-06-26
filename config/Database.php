<?php

class Database{

private $host='localhost';
private $dbname='myblog';
private $user='root';
private $password='';

private $handler;
public function connect(){
    $this->handler=null;

    try{
        $this->handler=new PDO('mysql:host='.$this->host.';dbname ='.$this->dbname,$this->user,$this->password);
      $this->handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $ex){
        echo "Connection Error: ".$ex->getMessage();
    }

    return $this->handler;
    
}

}

$db=new Database();
$db->connect();


?>