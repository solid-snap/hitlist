<!doctype html>
<html>
    <body>
            <?php
            require "Movies.php";

            $movId = $_POST["movIdVak"];
            $verwijderen = $_POST["verwijderBox"];

            if ($verwijderen == "ja") {
                echo "This movie has been deleted <br/>";
                $mov1 = new Movies();
                $mov1->deleteMov($movId);
            } else {
                echo "This movie hasn't been deleted. <br/>";
            }
            ?>
    </body>
</html>
