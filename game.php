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
            <p id="nickname">
                <?php echo $playerName; ?>
            </p>
            <!-- Language switch -->
            <input type="checkbox" data-toggle="toggle" data-on="English" data-off="Nederlands"
                data-onstyle="success" data-offstyle="success">
        </div>
        <div class="card-body" id="question-card">
            <div id="binary-image">
                <p id="explaining paragraph"></p>
                <img src="assets/image/binary-code-binary-system-explained.png" class="img-fluid" alt="explaining of binary counting">
            </div>
            <div id="question-section">
                <p id="question-p"></p>
            </div>
        </div>
        <div class="card-body input-group" id="input-card">
            <!-- user input -->
            <input id="input-field" type="number" class="form-control">
            <a href="#" class="btn btn-primary">Button</a>
        </div>

    </div>

    <script type="text/javascript">

        var importedGameMode = document.createElement('script');
        var importedLanguageMode = document.createElement('script');
        var gameMode = "<?= $status; ?>";
        var languageMode = "<?= $language; ?>";
        var playerName = "<?= $playerName; ?>";

        if (gameMode === "Binair") {
            importedGameMode.src = 'assets/JS/binair.js';
        } else {
            importedGameMode.src = 'assets/JS/decimal.js';
        }

        if (languageMode === "Nederlands") {
            importedLanguageMode.src = 'assets/JS/Nederlands.js';
        } else {
            importedLanguageMode.src = 'assets/JS/English.js';
        }

        document.head.appendChild(importedGameMode);
        document.head.appendChild(importedLanguageMode);

    </script>
</body>
</html>
