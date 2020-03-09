<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <form action="" method="get">
        
            <input type="text" name="keuze" placeholder="keuze">

            <input id="send" name="send" type="submit" value="submit">

        </form>

        <?php

        session_start();
        
        if (isset($_GET["keuze"])) {
            if (is_numeric($_GET["keuze"]) && $_GET["keuze"] > 0 && $_GET["keuze"] <= 3) {
                $_SESSION["dingie"] = $_GET["keuze"];
                echo "gekozen item: #".$_SESSION["dingie"];

            } 
            else {
                echo " voer een van de bovenstaande getallen in";
            }
        }

        ?>

    </body>
</html>