<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>Update User Formulier 3</title>
</head>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
    <h1>Update User Formulier 3</h1>
        <?php
        require "User.php";
        // gegevens uit de array in variabelen stoppen
        $userId = $_POST["userIdField"];
        $userName = $_POST["userNameField"];
        $userPassword = $_POST["userPasswordField"];

        //  object ---------------------------------------------------
        $user1 = new User($userName, $userPassword); //  object
        $user1->updateUser($userId);		           // changes the tableinfo and object info
        echo "This is the updated information: <br/>";
        echo $userId ."<br/>";
        $user1->afdrukken();	                       // prints objects

        ?>
        <h2><a href="../login/login.php">go back to login</a></h2>
    </div>
    </body>
</html>

