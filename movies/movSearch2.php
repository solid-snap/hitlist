<!doctype html>
<html>
    <body>
            <?php
            require "Movies.php";
            $movId = $_POST["movIdVak"];
            $mov1 = new Movies();
            $mov1->searchMov($movId);
            ?>
    </body>
</html>
