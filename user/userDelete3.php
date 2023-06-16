<!doctype html>
<html>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <div class="topnav" id="myTopNav">
            <h2><a href="../login/login.php" class="active">go back to shows</a></h2>
        </div>
        <?php
        require "User.php";

        $userId = $_POST["userIdField"];
        $delete = $_POST["deleteBox"];

        if ($delete == "ja") {
            echo "This user has been deleted <br/>";
            $user1 = new User();
            $user1->deleteUser($userId);
        } else {
            echo "This user hasn't been deleted. <br/>";
        }
        ?>
    </div>

    </body>
    <footer> Contact Information : Hittlistt@Gmail.com </footer>
</html>
