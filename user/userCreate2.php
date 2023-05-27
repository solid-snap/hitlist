<!doctype html>
<html>
<!-- Victoria Hoogeveen -->
<head>
    <title>Movie Create 2</title>
</head>
    <body>
    <h1>Movie Create 2</h1>
        <?php
        require "User.php";

        // uitlezen vakjes van KlantenCreate1 -----
        $userName=$_POST["userNameVak"];
        $userPassword=$_POST["userPasswordVak"];
        echo "test";
        // maken object -------------------------------
        $user1 = new User($userName, $userPassword);
        $user1->createUser();

        // afdrukken object ---------------------------

        $user1->afdrukken();
        ?>
    </body>
</html>

