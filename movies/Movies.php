<?php

require_once "../DBHitlist.php";

class Movies
{

    // properties -- eigenschappen ----
    public $movName;
    public $movType;
    public $movGenre;
    public $movLength;
    public $movReview;
    public $movSummary;

    //methode -- functies
    // constructor
    function __construct($movName = NULL, $movType = NULL, $movGenre = NULL,
                         $movLength = NULL, $movReview = NULL, $movSummary = NULL)
    {
        $this->movName = $movName;
        $this->movType = $movType;
        $this->movGenre = $movGenre;
        $this->movLength = $movLength;
        $this->movReview = $movReview;
        $this->movSummary = $movSummary;
    }

    function set_movName($movName)
    {
        $this->movName = $movName;
    }

    function set_movType($movType)
    {
        $this->movType = $movType;
    }

    function set_movGenre($movGenre)
    {
        $this->movGenre = $movGenre;
    }

    function set_movLength($movLength)
    {
        $this->movLength = $movLength;
    }

    function set_movReview($movReview)
    {
        $this->movReview = $movReview;
    }

    function set_movSummary($movSummary)
    {
        $this->movSummary = $movSummary;
    }

    // getters
    function get_movName()
    {
        return $this->movName;
    }

    function get_movType()
    {
        return $this->movType;
    }

    function get_movGenre()
    {
        return $this->movGenre;
    }

    function get_movLength()
    {
        return $this->movLength;
    }

    function get_movReview()
    {
        return $this->movReview;
    }

    function get_movSummary()
    {
        return $this->movSummary;
    }



    public function afdrukken()
    {
        echo $this->get_movName();
        echo "<br/>";
        echo $this->get_movType();
        echo "<br/>";
        echo $this->get_movGenre();
        echo "<br/>";
        echo $this->get_movLength();
        echo "<br/>";
        echo $this->get_movReview();
        echo "<br/>";
        echo $this->get_movSummary();
    }

    public function createMov()
    {
        global $conn;
        // info from objects in variables
        $movId = NULL;
        $movName = $this->get_movName();
        $movType = $this->get_movType();
        $movGenre = $this->get_movGenre();
        $movLength = $this->get_movLength();
        $movReview = $this->get_movReview();
        $movSummary = $this->get_movSummary();

        // statement for the table
        $sql = $conn->Prepare("INSERT into movies
values (:movId,:movName, :movType, :movGenre, :movLength, :movReview, :movSummary)");
// variabelen in de statement zetten
        $sql->bindParam(":movId", $movId);
        $sql->bindParam(":movName", $movName);
        $sql->bindParam(":movType", $movType);
        $sql->bindParam(":movGenre", $movGenre);
        $sql->bindParam(":movLength", $movLength);
        $sql->bindParam(":movReview", $movReview);
        $sql->bindParam(":movSummary", $movSummary);
        $sql->execute();
        //notification
        echo "The movie has been added: </br>";

    }

    public function readMov()
    {
        global $conn;
        // statement
        $sql = $conn->prepare(" SELECT * FROM movies");
        $sql->execute();
        foreach ($sql as $mov) {
            echo $mov["movId"] . " - ";                         // geen eigenscap van object student
            $this->set_movName($mov["movName"]);
            echo $mov["movName"] . " - ";
            $this->set_movType($mov["movType"]);
            echo $mov["movType"] . " - ";
            $this->set_movGenre($mov["movGenre"]);
            echo $mov["movGenre"] . " - ";
            $this->set_movLength($mov["movLength"]);
            echo $mov["movLength"] . " - ";
            $this->set_movReview($mov["movReview"]);
            echo $mov["movReview"] . " <br/> ";
            $this->set_movSummary($mov["movSummary"]);
            echo $mov["movSummary"] . " <br/> ";
        }
    }

    public function searchMov($movId)
    {
        global $conn;
        // sql statement
        $sql = $conn->prepare("select * from movies
                               where movId = :movId");
        // putting variables in statement
        $sql->bindParam(":movId", $movId);
        $sql->execute();
        // info from the array in object and print
        foreach ($sql as $mov) {
            echo $mov["movId"] . "<br>";
            echo $this->movName = $mov["movName"] . "";
            echo "<br>";
            echo $this->movType = $mov["movType"] . "";
            echo "<br>";
            echo $this->movGenre = $mov["movGenre"] . "";
            echo "<br>";
            echo $this->movLength = $mov["movLength"] . "";
            echo "<br>";
            echo $this->movReview = $mov["movReview"] . "";
            echo "<br>";
            echo $this->movSummary = $mov["movSummary"] . "";
        }
    }

    public function deleteMov($movId)
    {
        global $conn;
        //statements
        $sql = $conn->prepare(" DELETE FROM movies
        where movId = :movId");
        // variables in a statement
        $sql->bindParam(":movId", $movId);
        $sql->execute();
    }

    public function updateMov($movId)
    {
        global $conn;
        // gegevens uit het object in variabelen zetten
        $movId;
        $movName = $this->get_movName();
        $movType = $this->get_movType();
        $movGenre = $this->get_movGenre();
        $movLength = $this->get_movLength();
        $movReview = $this->get_movReview();
        $movSummary = $this->get_movSummary();
        // statement maken
        $sql = $conn->prepare("
									update movies
									set movName=:movName, movType=:movType, movGenre=:movGenre, 
									    movLength=:movLength, movReview=:movReview, movSummary=:movSummary   
									where movId=:movId
								 ");
        // variabelen in de statement zetten

        $sql->bindParam(":movId", $movId);
        $sql->bindParam(":movName", $movName);
        $sql->bindParam(":movType", $movType);
        $sql->bindParam(":movGenre", $movGenre);
        $sql->bindParam(":movLength", $movLength);
        $sql->bindParam(":movReview", $movReview);
        $sql->bindParam(":movSummary", $movSummary);
        $sql->execute();
    }
}