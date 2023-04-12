<?php
class Database
{
  private static $dbName = 'essalud';
  private static $dbHost = 'localhost';
  private static $dbUsername = 'root';
  private static $dbUserPassword = 'needforspeED1';



  //COMMIT
  private static $cont = null;

  public function __construct()
  {
    die('No esta Permitido Instanciar la Conexion');
  }
  //CUALQUIER COSA
  public static function connect()
  {
    if (null == self::$cont) {
      try {
        self::$cont = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword);
        $dbh = self::$cont;
        $dbh->exec("set names utf8");
        $dbh->exec("SET lc_time_names = 'es_PE'");
      } catch (PDOException $e) {
        die($e->getMessage());
      }
    }
    return self::$cont;
  }

  public static function disconnect()
  {
    self::$cont = null;
  }
}
?>