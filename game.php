<!-- Notes -->
<!-- To hide html with bootstrap use class="d-none". -->

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

    <!-- Optional JavaScript Bootstrap -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap Switch CDN -->
    <!-- https://gitbrent.github.io/bootstrap4-toggle -->
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>

    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="./assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/game.css">

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
				<button id="start-btn" class="btn hide btn-primary start-btn">Start</button>
				<!-- stop the game button -->
				<button id="stop-btn" class="btn hide btn-primary stop-btn">Stop</button>
			</div>
			<!-- Show total questions -->
			<div id="playersGameInfo">
				<div id="questions">
					<p>questions:</p>
					<p id="questionToGo">0</p>
					<p>/</p>
					<p id="questionTotal">20</p>
				</div>
				<!-- show the counter to the player -->
				<div id="counterTime">
					<p>counter:</p>
					<p id="counter">0</p>
				</div>
				<!-- Show score -->
				<div id="score">
					<p>score:</p>
					<p id="questionRight">0</p>
					<p>/</p>
					<p id="questionWrong">0</p>
				</div>
			</div>
        </div>
        <div class="card-body" id="question-card">
            <div id="binary-image">
                <p id="explaining paragraph"></p>
                <img src="assets/image/binary-code-binary-system-explained.png" class="img-fluid" alt="explaining of binary counting">
            </div>
        </div>
        <div class="card-body question-container">
			<!-- show the question -->
            <div id="question">
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
            importedGameMode.src = 'assets/JS/binair.js';
        } else {
            importedGameMode.src = 'assets/JS/decimal.js';
        }

        if (languageMode === "Nederlands") {
            importedLanguageMode.src = 'assets/JS/nederlands.js';
        } else {
            importedLanguageMode.src = 'assets/JS/english.js';
        }

        document.body.appendChild(importedGameMode);
        document.body.appendChild(importedLanguageMode);

    </script>
</body>
</html>
