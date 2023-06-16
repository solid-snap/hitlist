<!doctype html>
<html>
<head>
</head>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <div class="topnav" id="myTopNav">

        <h2><a href="../login/login.php" class="active">go back to shows</a></h2>
    </div>
        <?php
        require "User.php";
        $userName=$_POST["userNameField"];
        $password=$_POST["userPasswordField"];

        $gehashed = password_hash($password, null);
        $userPassword =$gehashed;

        // maken object -------------------------------
        $user1 = new User($userName, $userPassword);
        $user1->createUser();

        // afdrukken object ---------------------------

        ?>
        <h2><a href="../login/login.php">go back to login</a></h2>
    </div>
    </body>
</html>

