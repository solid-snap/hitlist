<!doctype html>
<html>
<!-- Victoria Hoogeveen -->
<head>
    <title>Update Movies Formulier 2</title>
</head>
    <body>
    <h1>Update Movies Formulier 2</h1>
        <?php

        require "User.php";					// nodig om object te maken
        $userId = $_POST["userIdVak"];
        $user1 = new User();				// object aanmaken
        $user1->searchUser($userId);

        // properties in variabelen zetten
        $userName = $user1->get_userName();
        $userPassword = $user1->get_userPassword();
        ?>

        <form action="userUpdate3.php" method="post">
            <!-- $userid mag niet meer gewijzigd worden -->
            <input type="hidden" name="userIdVak" value="<?php echo $userId;?>"><br>
            <input type="text"   name="userNameVak"      value="<?=$userName;?>"><br>
            <input type="text"   name="userPasswordVak"  value="<?php echo $userPassword;  ?> "><br>
            <input type="submit"><br><br>
        </form>
    </body>
</html>

