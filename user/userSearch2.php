<!doctype html>
<html>
    <body>
    <link rel="stylesheet" href="../hitlist.css">
    <div class="pageInfo">
        <?php
        require "User.php";
        $userId = $_POST["userIdVak"];
        $user1 = new User();
        $user1->searchUser($userId);
        ?>
        <h2><a href="../login.php">go back to login</a></h2>
    </div>
    </body>
</html>
