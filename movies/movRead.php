<!DOCTYPE html>
<html lang="en">
    <body>
        <p>All the data from Movies:</p>
        <?php
        require "Movies.php";
        $mov1 = new Movies();
        $mov1->readMov();
        ?>
    </body>
</html>
