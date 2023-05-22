<?php

require_once "Database/DBHitlist.php";

class User
{

    // properties -- eigenschappen ----
    public $userName;
    public $userPassword;


    //methode -- functies
    // constructor
    function __construct($userName = NULL, $userPassword = NULL)
    {
        $this->userName = $userName;
        $this->userPassword = $userPassword;

    }

    function set_userName($userName)
    {
        $this->userName = $userName;
    }

    function set_userPassword($userPassword)
    {
        $this->userPassword = $userPassword;
    }

    // getters
    function get_userName()
    {
        return $this->userName;
    }

    function get_userPassword()
    {
        return $this->userPassword;
    }

    public function afdrukken()
    {
        echo $this->get_userName();
        echo "<br/>";
        echo $this->get_userPassword();
        echo "<br/>";
    }

    public function createUser()
    {
        global $conn;
        // gegevens uit object in variabelen zetten
        $userId = NULL;
        $userName = $this->get_userName();
        $userPassword = $this->get_userPassword();

        // statement maken voor tabel
        $sql = $conn->Prepare("insert into users
values (:userName, :userPassword)");
// variabelen in de statement zetten
        $sql->bindParam(":userId", $userId);
        $sql->bindParam(":userName", $userName);
        $sql->bindParam(":userPassword", $userPassword);
        $sql->execute();
        //melding
        echo "The user has been added: </br>";

    }

    public function readUser()
    {
        global $conn;
        // statement maken
        $sql = $conn->prepare(" SELECT * FROM users");
        $sql->execute();
        foreach ($sql as $user) {
            echo $user["userId"] . " - ";                         // geen eigenscap van object student
            $this->set_userName($user["userName"]);
            echo $user["userName"] . " - ";
            $this->set_userPassword($user["userPassword"]);
            echo $user["userPassword"] . " - ";
        }
    }

    public function searchUser($userId)
    {
        global $conn;
        // sql statement
        $sql = $conn->prepare("select * from users
                               where userId = :userId");
        // variabele in de statement zetten
        $sql->bindParam(":userId", $userId);
        $sql->execute();
        // gegevens uit de array in object stoppen en afdrukken
        foreach ($sql as $user) {
            echo $user["userId"] . "<br>";
            echo $this->userName = $user["userName"] . "<br>";
            echo $this->userPassword = $user["userPassword"] . "<br>";
        }
    }

    public function deleteUser($userId)
    {
        global $conn;
        //statements maken
        $sql = $conn->prepare(" DELETE FROM users
        where userId = :userId");
        // variable in de statement zetten
        $sql->bindParam(":userId", $userId);
        $sql->execute();
    }

    public function updateUser($userId)
    {
        global $conn;
        // gegevens uit het object in variabelen zetten
        $userId;
        $userName = $this->get_userName();
        $userPassword = $this->get_userPassword();

        // statement maken
        $sql = $conn->prepare("
									update users
									set userName=:userName, userPassword=:userPassword  
									where userId=:userId
								 ");
        // variabelen in de statement zetten

        $sql->bindParam(":userId", $userId);
        $sql->bindParam(":userName", $userName);
        $sql->bindParam(":userPassword", $userPassword);
        $sql->execute();
    }
}