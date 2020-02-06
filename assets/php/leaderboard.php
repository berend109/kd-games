<html>
<head>

    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/leaderboard.css">

    <!-- title -->
    <title>Project Binair Rekenen</title>

</head>

<body>

<?php

session_start();

require 'conn.php';

$stmtArray = [];
$pdo = new connection; // class
$con = $pdo->connect(); // function

class getData {

	public function __construct() {}
    
	public function register($con, $stmtArray) {

		try {
			$sql = "SELECT * FROM `leaderboard` ORDER BY score DESC, time DESC";
			$stmtArray = $con->query($sql);
			if($stmtArray->rowCount() > 0){
				echo '<div class="card text-center" id="card">';
					echo '<table class="table"';
						echo '<tr id="tr-head">';
							echo '<th>nickname</th>';
							echo '<th>time</th>';
							echo '<th>score</th>';
							echo '<th>date</th>';
							echo '<th>game</th>';
						echo "</tr>";
					while($row = $stmtArray->fetch()){
						echo '<tbody>';
							echo '<tr>';
								echo '<td>' . $row['nickname'] . '</td>';
								echo '<td>' . $row['time'] . '</td>';
								echo '<td>' . $row['score'] . '</td>';
								echo '<td>' . $row['date'] . '</td>';
								echo '<td>' . $row['game'] . '</td>';
							echo '</tr>';
						echo '</tbody>';
					}
					echo "</table>";
				echo '</div>';
				// Free result set
				unset($stmtArray);
			} else{
				echo "No records matching your query were found.";
			}
		} catch (PDOException $e) {
			echo 'Something went wrong: ' . $e->getMessage();
		}

	}

}

$reg = new getData(); // class
$reg->register($con, $stmtArray); // function

?>

</body>