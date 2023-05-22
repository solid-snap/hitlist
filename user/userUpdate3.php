<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>Update User Formulier 3</title>
</head>
    <body>
    <h1>Update User Formulier 3</h1>
        <?php
        require "User.php";
        // gegevens uit de array in variabelen stoppen
        $userId = $_POST["userIdVak"];
        $userName = $_POST["userNameVak"];
        $userPassword = $_POST["userPasswordVak"];

        // maken object ---------------------------------------------------
        $user1 = new User($userName, $userPassword); // maakt object
        $user1->updateUser($userId);		           // vervangt de tabelgegevens voor objectgegevens
        echo "This is the updated information: <br/>";
        echo $userId ."<br/>";
        $user1->afdrukken();	                       // drukt object af

        ?>
    </body>
</html>

