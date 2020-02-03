<?php

session_start();

require 'conn.php';

$pdo = new connection; // class
$con = $pdo->connect(); // function

class getData {

    public function __construct() {}
    
    public function register($con) {

        try {
            $sql = "SELECT * FROM `leaderboard`";
			$stmt = $con->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Something went wrong: ' . $e->getMessage();
        }

    }

}

$reg = new getData(); // class
$reg->register($con); // function

?>