<?php
require_once "../DBHitlist.php";

class User
{

    // properties ------
    public $userName;
    public $userPassword;


    //method -- functions
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
        // info from the objects into the statements
        $userId = NULL;
        $userName = $this->get_userName();
        $userPassword = $this->get_userPassword();

        // prepares statement from the table
        $sql = $conn->Prepare("insert into users
values (:userId,:userName, :userPassword)");
// variables into the statement
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
        // makes statement
        $sql = $conn->prepare(" SELECT * FROM users");
        $sql->execute();
        foreach ($sql as $user) {
            echo $user["userId"] . " - ";                         //
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
        // variables into the statement
        $sql->bindParam(":userId", $userId);
        $sql->execute();
        // info from the array in object and prints it
        foreach ($sql as $user) {
            echo $user["userId"] . "<br>";
            echo $this->userName = $user["userName"] . "<br>";
            echo $this->userPassword = $user["userPassword"] . "<br>";
        }
    }

    public function deleteUser($userId)
    {
        global $conn;
        //statements
        $sql = $conn->prepare(" DELETE FROM users
        where userId = :userId");
        // puts variables into the statement
        $sql->bindParam(":userId", $userId);
        $sql->execute();
    }

    public function updateUser($userId)
    {
        global $conn;
        // puts info from the variables into the statement
        $userId;
        $userName = $this->get_userName();
        $userPassword = $this->get_userPassword();

        // statement
        $sql = $conn->prepare("
									update users
									set userName=:userName, userPassword=:userPassword  
									where userId=:userId
								 ");
        // variables into the statements

        $sql->bindParam(":userId", $userId);
        $sql->bindParam(":userName", $userName);
        $sql->bindParam(":userPassword", $userPassword);
        $sql->execute();
    }
}
