<?php
/**
 * The database connection class and query functions
 */
class Database
{
  private $host = "localhost";
  private $user = "root";
  private $pass = "";
  private $dbname = "cbuapp";

  private $dbh;
  private $error;
  private $stmt;

  //For the connection with the database
  function __construct()
  {
    // Set DNS
    $dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
    // Set the options
    $options = array(
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    // Create a new PDO instance
    try {
      $this->dbh = new PDO($dns, $this->user, $this->pass, $options);
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
    }
  }

  // Function fo the query statements
  public function query($query){
    $this->stmt = $this->dbh->prepare($query);
  }

  // Function to bind the values of the database
  public function bind($param, $value, $type = NULL){
    if (is_null($type)) {
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
          case is_null($value):
            $type = PDO::PARAM_NULL;
            break;
        default:
          $type = PDO::PARAM_STR;
      }
    }
    $this->stmt->bindValue($param, $value, $type);
  }

  // Function to excute the the statements
  public function execute(){
    return $this->stmt->execute();
  }

  // Function to fetch all the resultSets
  public function resultset(){
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_OBJ);
  }

  // Function to fetch a single resultSet
  public function single(){
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_OBJ);
  }

  // Function For the Row Count
  public function rowCount(){
    return $this->stmt->rowCount();
  }

  // Function for the INSERT id staement
  public function lastInsertId(){
    return $this->dbh->lastInsertId();
  }

  // Function to begin the transaction
  public function beginTransaction(){
    return $this->dbh->beginTransaction();
  }

  // Function to END the transaction
  public function endTransaction(){
    return $this->dbh->commit();
  }

  // Function to Cancel the Transaction
  public function cancelTransaction(){
    return $this->dbh->rollBack();
  }
}
?>
