<?php

    session_start();

    if(!empty($_GET['toggleInput'])) {
        $status = "Decimal";
    } else {
        $status = "Binair";
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
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">

    <!-- title -->
    <title>Project Binair Rekenen</title>

</head>
<body>

    <div class="card text-center" id="card">

        <div class="card-header">
            <!-- Language switch -->
            <input type="checkbox" data-toggle="toggle" data-on="Nederlands" data-off="English" 
                data-onstyle="success" data-offstyle="success">

        </div>
        <div class="card-body" id="question">

        </div>
        <div class="card-body input-group" id="input">
            <!-- user input -->
            <input type="number" class="form-control">
            <a href="#" class="btn btn-primary">Button</a>
        </div>

    </div>

    <script type="text/javascript">

        var imported = document.createElement('script');
        var gameMode = "<?= $status; ?>";
        var playerName = "<?= $playerName; ?>";

        if (gameMode == "Binair") {
            imported.src = 'assets/JS/binair.js';
        } else {
            imported.src = 'assets/JS/decimal.js';
        }

        document.head.appendChild(imported);
        
    </script>
</body>
</html>
