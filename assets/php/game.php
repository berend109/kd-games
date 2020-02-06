<?php

    session_start();

    if(!empty($_GET['toggleInput'])) {
        $status = "Decimal";
    } else {
        $status = "Binair";
    }

    if(!empty($_GET['toggleLanguage'])) {
        $language = "English";
    } else {
        $language = "Nederlands";
    }

    $playerName = $_GET["nickname"];

?>
<!DOCTYPE html>
<html>
<head>

    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/game.css">

    <!-- title -->
    <title>Project Binair Rekenen</title>

</head>
<body>

    <div class="card text-center" id="card">
        <div class="card-header text-right" id="header-card">
			<!-- show nickname -->
			<div id="playerControl">
				<p id="nickname">
					<?php echo $playerName; ?>
				</p>
				<!-- start the game button -->
				<button id="start-btn" class="btn btn-primary">Start</button>
				<!-- stop the game button -->
				<button id="stop-btn" class="btn btn-primary">Stop</button>
			</div>
			<!-- Show total questions -->
			<div id="playersGameInfo">
				<div id="questions">
					<p id="questionGame">questions:</p>
					<p id="questionToGo">0</p>
					<p>/</p>
					<p id="questionTotal">20</p>
				</div>
				<!-- show the counter to the player -->
				<div id="counterTime">
					<p id="counterGame">counter:</p>
					<p id="counter">0</p>
				</div>
				<!-- Show score -->
				<div id="score">
					<p id="scoreGame">score:</p>
					<p id="questionRight">0</p>
					<p>/</p>
					<p id="questionWrong">0</p>
				</div>
			</div>
        </div>
        <div class="card-body" id="question-card">
            <div id="binary-image">
                <p id="explaining paragraph"></p>
                <img src="../image/binary-code-binary-system-explained.png" class="img-fluid" alt="explaining of binary counting">
            </div>
        </div>
        <div class="card-body question-container">
			<!-- show the question -->
			<div>
				<p id="startStopSignal"></p>
			</div>
            <div id="question">
				<p id="questionParagraph"></p>
                <p id="question-p"></p>
            </div>
        </div>
        <div class="card-body input-group" id="input-card">
            <!-- user input -->
			<input id="input-field" type="number" class="form-control">
            <button id="next-btn" class="btn btn-primary">Next</button>
        </div>
    </div>

    <script type="text/javascript">

        var importedGameMode = document.createElement('script');
        var importedLanguageMode = document.createElement('script');
        var gameMode = "<?= $status; ?>";
        var languageMode = "<?= $language; ?>";

        if (gameMode === "Binair") {
            importedGameMode.src = '../JS/binair.js';
        } else {
            importedGameMode.src = '../JS/decimal.js';
        }

        if (languageMode === "Nederlands") {
            importedLanguageMode.src = '../JS/nederlands.js';
        } else {
            importedLanguageMode.src = '../JS/english.js';
        }

        document.body.appendChild(importedGameMode);
        document.body.appendChild(importedLanguageMode);

    </script>
</body>
</html>
