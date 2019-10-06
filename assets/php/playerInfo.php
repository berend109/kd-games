<?php

    session_start();

    echo $_GET["nickname"];

    if(!empty($_GET['toggleInput'])) {

        echo "<br>";
        echo "<br>";
        echo "Decimal";

    } else {

        echo "<br>";
        echo "<br>";
        echo "Binair";

    }

?>
