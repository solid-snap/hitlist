<!doctype html>
<html>
<!-- Victoria Hoogeveen -->
<head>
    <title>Update Movies Formulier 2</title>
</head>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <div class="topnav" id="myTopNav">
            <h2><a href="../login/login.php" class="active">go back to login</a></h2>
        </div>
    <h1>Update Movies Formulier 2</h1>
        <?php

        require "User.php";					// needed to make an object
        $userId = $_POST["userIdField"];
        $user1 = new User();				// makes object
        $user1->searchUser($userId);

        // properties in variables
        $userName = $user1->get_userName();
        $userPassword = $user1->get_userPassword();
        ?>

        <form action="userUpdate3.php" method="post">
            <!-- $id cant be changed -->
            <input type="hidden" name="userIdField" value="<?php echo $userId;?>"><br>
            <input type="text"   name="userNameField"      value="<?=$userName;?>"><br>
            <input type="text"   name="userPasswordField"  value="<?php echo $userPassword;  ?> "><br>
            <input type="submit"><br><br>
        </form>
        <h2><a href="../login/login.php">go back to login</a></h2>
    </div>
    </body>
<footer> Contact Information : Hittlistt@Gmail.com </footer>
</html>

