<?php

session_start();

require 'conn.php';

$pdo = new connection; // class
$con = $pdo->connect(); // function

$result = $_GET['score'];

$pieces = explode(" ", $result);

$time = $pieces[0];
$score = $pieces[1];
$playerName = $pieces[2];
$gameMode = $pieces[3];

echo '<br>';
echo 'Time: ' . $time;
echo '<br>';
echo 'Score: ' . $score;
echo '<br>';
echo 'Player: ' . $playerName;
echo '<br>';
echo 'GameMode: ' . $gameMode;

class sendData {

    public function __construct() {}
    
    public function register($con, $time, $score, $playerName, $gameMode) {

        try {
			$sql = "INSERT INTO `leaderboard`(`nickname`, `time`, `score`, `game`) VALUES ('$playerName', '$time', '$score', '$gameMode')";
			$stmt = $con->prepare($sql);
			$stmt->execute();
			header("Refresh:0; url=../../index.php");
        } catch (PDOException $e) {
            echo "Something went wrong: " . $e->getMessage();
        }

    }

}

$reg = new sendData(); // class
$reg->register($con, $time, $score, $playerName, $gameMode); // function

?>