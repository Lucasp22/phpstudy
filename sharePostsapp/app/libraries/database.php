/*<?php
/*
  -PDO Database class
  - Connect To database
  - Create prepared Statements
  - Bind values
  - Return rows and results
*/

class Database {
  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = BD_PASS;
  private $dbname = DB_NAME;


  private $dbh;
  private $stmt;
  private $error;

  public function _construct(){
    //Set DSN
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
    $options = array(
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    //Create PDO instance
    try{
      $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
    } catch(PDOException $e){
      $this->error = $e->getMessage();
      echo $this->error;
    }

  }
}
