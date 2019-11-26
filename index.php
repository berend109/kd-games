<?php

    session_start();

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
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">

    <!-- title -->
    <title>Project Binair Rekenen</title>

</head>
<body>

    <div class="card text-center" id="card">
        <div class="card-header">
            <form action="game.php" method="GET">
                <div id="inputForm langSelect">
                    <p>Select Language</p>
                    <!-- language switch -->
                    <input type="checkbox" name="toggleLanguage" data-toggle="toggle" data-on="English" data-off="Nederlands"
                        data-onstyle="success" data-offstyle="success">
                </div>
                <div id="inputForm gameSelect">
                    <p>Select game mode</p>
                    <!-- game mode switch -->
                    <input type="checkbox" name="toggleInput" data-toggle="toggle" data-on="Decimal" data-off="Binair"
                        data-onstyle="success" data-offstyle="success">
                </div>
                <div id="inputForm nickName">
                    <!-- user input -->
                    <p>Select nickname</p>
                    <input placeholder="nickname" name="nickname" type="text" class="form-control">
                    <!-- empty paragraph for some padding-->
                    <p></p>
                    <input type="submit" value="submit" class="btn btn-primary">

                </div>
            </form>
        </div>
    </div>

</body>
</html>
