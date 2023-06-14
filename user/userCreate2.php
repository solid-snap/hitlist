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

        // uitlezen vakjes van KlantenCreate1 -----
        $userName=$_POST["userNameVak"];
        $userPassword=$_POST["userPasswordVak"];
        // maken object -------------------------------
        $user1 = new User($userName, $userPassword);
        $user1->createUser();

        // afdrukken object ---------------------------

        $user1->afdrukken();
        ?>
    </body>
</html>

