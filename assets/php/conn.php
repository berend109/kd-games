<?php
class connection {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;
    public function connect() {
        
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "kdBasisGames";
        $this->charset = "utf8mb4";
        try {
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connection successfull";
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
        }
    }
}

// test connection
// echo "<br/>";
// echo "<br/>";
// $object = new connection; // class
// $object->connect(); // function