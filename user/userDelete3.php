<!doctype html>
<html>
    <body>
    <link rel="stylesheet" href="../hitlist.css">
    <div class="pageInfo">
        <?php
        require "User.php";

        $userId = $_POST["userIdVak"];
        $verwijderen = $_POST["verwijderBox"];

        if ($verwijderen == "ja") {
            echo "This user has been deleted <br/>";
            $user1 = new User();
            $user1->deleteUser($userId);
        } else {
            echo "This user hasn't been deleted. <br/>";
        }
        ?>
        <h2><a href="../login.php">go back to login</a></h2>
    </div>

    </body>
</html>
