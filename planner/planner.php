<?php
require_once "../DBHitlist.php";
class planner
{
    // properties -- eigenschappen ----
    public $movId;
    public $showId;
    public $planName;
    public $movieName;
    public $showName;
    public $planDate;

    //methode -- functies
    // constructor
    function __construct($movId = NULL, $showId = NULL, $planName = NULL,
                         $movieName = NULL, $showName = NULL, $planDate=null)
    {

        $this->movId = $movId;
        $this->showId = $showId;
        $this->planName = $planName;
        $this->movieName = $movieName;
        $this->showName = $showName;
        $this->planDate = $planDate;
    }

    // setters
    function set_movId($movId)
    {
        $this->movId = $movId;
    }

    function set_showId($showId)
    {
        $this->showId = $showId;
    }

    function set_planName($planName)
    {
        $this->planName = $planName;
    }

    function set_movieName($movieName)
    {
        $this->movieName = $movieName;
    }

    function set_showName($showName)
    {
        $this->showName = $showName;
    }

    function set_planDate($planDate)
    {
        $this->planDate = $planDate;
    }

    // getters
    function get_movId()
    {
        return $this->movId;
    }

    function get_showId()
    {
        return $this->showId;
    }

    function get_planName()
    {
        return $this->planName;
    }

    function get_movieName()
    {
        return $this->movieName;
    }

    function get_showName()
    {
        return $this->showName;
    }

    function get_planDate()
    {
        return $this->planDate;
    }

    public
    function afdrukken()
    {
        echo $this->get_movId();
        echo "<br/>";
        echo $this->get_showId();
        echo "<br/>";
        echo $this->get_planName();
        echo "<br/>";
        echo $this->get_movieName();
        echo "<br/>";
        echo $this->get_showName();
        echo "<br/>";
        echo $this->get_planDate();

    }

    // crud methoden
    public
    function createPlan()
    {
        global $conn;
        // gegevens uit object in variabelen zetten
        $planId = NULL;
        $movId = $this->get_movId();
        $showId = $this->get_showId();
        $planName = $this->get_planName();
        $movieName = $this->get_movieName();
        $showName = $this->get_showName();
        $planDate = $this->get_planDate();

        // statement maken voor tabel
        $sql = $conn->Prepare("insert into planner
values (:planId, :movId, :showId, :planName,:movieName, :showName,:planDate)");
// variabelen in de statement zetten
        $sql->bindParam(":planId", $planId);
        $sql->bindParam(":movId", $movId);
        $sql->bindParam(":showId", $showId);
        $sql->bindParam(":planName", $planName);
        $sql->bindParam(":movieName", $movieName);
        $sql->bindParam(":showName", $showName);
        $sql->bindParam(":planDate", $planDate);
        $sql->execute();
        //melding
        echo "De klant is toegevoegd: </br>";
    }

    public
    function updatePlan($planId)
    {
        global $conn;
        // gegevens uit het object in variabelen zetten
        $planId;
        $movId = $this->get_movId();
        $showId = $this->get_showId();
        $planName = $this->get_planName();
        $movieName = $this->get_movieName();
        $showName = $this->get_showName();
        $planDate = $this->get_planDate();
        // statement maken
        $sql = $conn->prepare("
									update planner
									set movId=:movId, showId=:showId, planName=:planName, 
									    movieName=:movieName, showName=:showName, planDate=:planDate
									where planId=:planId
								 ");
        // variabelen in de statement zetten

        $sql->bindParam(":planId", $planId);
        $sql->bindParam(":movId", $movId);
        $sql->bindParam(":showId", $showId);
        $sql->bindParam(":planName", $planName);
        $sql->bindParam(":movieName", $movieName);
        $sql->bindParam(":showName", $showName);
        $sql->bindParam(":planDate", $planDate);
        $sql->execute();
    }

        public
        function readPlan()
        {
            global $conn;
            // statement maken
            $sql = $conn->prepare(" SELECT * FROM planner");
            $sql->execute();
            foreach ($sql as $planner) {
                echo $planner["planId"] . " - ";
                echo $planner["movId"] . " - ";
                echo $planner["showId"] . " - ";// geen eigenscap van object student
                $this->set_planName($planner["planName"]);
                echo $planner["planName"] . " - ";
                $this->set_movieName($planner["movieName"]);
                echo $planner["movieName"] . " - ";
                $this->set_showName($planner["showName"]);
                echo $planner["showName"] . " - ";
                $this->set_planDate($planner["planDate"]);
                echo $planner["planDate"] . " <br/> ";
            }
        }

        public
        function searchplan($planId)
        {
            global $conn;
            // sql statement
            $sql = $conn->prepare("select * from planner
                               where planId = :planId");
            // variabele in de statement zetten
            //$sql->bindParam(":inkordid", $inkordid);
            $sql->execute([":planId" => $planId]);
            // gegevens uit de array in object stoppen en afdrukken
            foreach ($sql as $planner) {
                echo $planner["planId"] . "<br>";
                echo $planner["movId"] . "<br>";
                echo $planner["showId"] . "<br>";
                echo $this->planName = $planner["planName"] . "<br>";
                echo $this->movieName = $planner["movieName"] . "<br>";
                echo $this->showName = $planner["showName"] . "<br>";
                echo $this->planDate = $planner["planDate"] . "<br>";


            }
        }

        public
        function deletePlan($planId)
        {
            global $conn;
            //statements maken
            $sql = $conn->prepare(" DELETE FROM Planner
        where planId = :planId");
            // variable in de statement zetten
            $sql->bindParam(":planId", $planId);
            $sql->execute();
        }


    }

