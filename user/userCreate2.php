<!doctype html>
<html>
<head>
</head>
    <body>
    <link rel="stylesheet" href="../hitlist.css">
    <div class="pageInfo">
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
        <h2><a href="../login/login.php">go back to shows</a></h2>
    </div>
    </body>
</html>

