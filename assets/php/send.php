<?php

session_start();

require 'conn.php';

$pdo = new connection; // class
$con = $pdo->connect(); // function

$result = $_GET['score'];

$pieces = explode(' ', $result);

$time = $pieces[0];
$finalTime = (600 - $time); // this way the user sees total time taken to play the game.
$score = $pieces[1];
$playerName = $pieces[2];
$gameMode = $pieces[3];

class sendData {

    public function __construct() {}
    
    public function register($con, $finalTime, $score, $playerName, $gameMode) {

        try {
			$sql = "INSERT INTO `leaderboard`(`nickname`, `time`, `score`, `game`) VALUES ('$playerName', '$finalTime', '$score', '$gameMode')";
			$stmt = $con->prepare($sql);
			$stmt->execute();
			header('Refresh:0; url=../../index.php');
        } catch (PDOException $e) {
            echo 'Something went wrong: ' . $e->getMessage();
        }

    }

}

$reg = new sendData(); // class
$reg->register($con, $finalTime, $score, $playerName, $gameMode); // function

?>