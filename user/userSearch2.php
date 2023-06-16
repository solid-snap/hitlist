<!doctype html>
<html>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <div class="topnav" id="myTopNav">
            <h2><a href="../login/login.php" class="active">go back to login</a></h2>
        </div>
        <?php
        require "User.php";
        $userId = $_POST["userIdField"];
        $user1 = new User();
        $user1->searchUser($userId);
        ?>
    </div>
    </body>
    <footer> Contact Information : Hittlistt@Gmail.com </footer>
</html>
