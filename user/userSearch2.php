<!doctype html>
<html>
    <body>
        <?php
        require "User.php";
        $userId = $_POST["userIdVak"];
        $user1 = new User();
        $user1->searchUser($userId);
        ?>
    </body>
</html>
