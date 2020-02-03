<?php

session_start();

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

?>