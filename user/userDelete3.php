<!doctype html>
<html>
    <body>
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
    </body>
</html>
