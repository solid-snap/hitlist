<?php
require_once "../DBHitlist.php";
class planner
{
    // properties -- ----
    public $movId;
    public $showId;
    public $planName;
    public $movieName;
    public $showName;
    public $planDate;

    //methode -- functions
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

    // crud method
    public
    function createPlan()
    {
        global $conn;
        // info from object in variable
        $planId = NULL;
        $movId = $this->get_movId();
        $showId = $this->get_showId();
        $planName = $this->get_planName();
        $movieName = $this->get_movieName();
        $showName = $this->get_showName();
        $planDate = $this->get_planDate();

        // prepare statement for table
        $sql = $conn->Prepare("insert into planner
values (:planId, :movId, :showId, :planName,:movieName, :showName,:planDate)");
// variable in a statement
        $sql->bindParam(":planId", $planId);
        $sql->bindParam(":movId", $movId);
        $sql->bindParam(":showId", $showId);
        $sql->bindParam(":planName", $planName);
        $sql->bindParam(":movieName", $movieName);
        $sql->bindParam(":showName", $showName);
        $sql->bindParam(":planDate", $planDate);
        $sql->execute();
        //notification
        echo "The plan has been added: </br>";
    }

    public
    function updatePlan($planId)
    {
        global $conn;
        // info from the object in variables
        $planId;
        $movId = $this->get_movId();
        $showId = $this->get_showId();
        $planName = $this->get_planName();
        $movieName = $this->get_movieName();
        $showName = $this->get_showName();
        $planDate = $this->get_planDate();
        // statement
        $sql = $conn->prepare("
									update planner
									set movId=:movId, showId=:showId, planName=:planName, 
									    movieName=:movieName, showName=:showName, planDate=:planDate
									where planId=:planId
								 ");
        // putting variables into the statements

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
            // make statement
            $sql = $conn->prepare(" SELECT * FROM planner");
            $sql->execute();
            foreach ($sql as $planner) {
                echo $planner["planId"] . " - ";
                echo $planner["movId"] . " - ";
                echo $planner["showId"] . " - ";//
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
            // putting variables into the statement

            $sql->execute([":planId" => $planId]);
            // putting info into the array and printing
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
            //making the statement
            $sql = $conn->prepare(" DELETE FROM Planner
        where planId = :planId");
            // putting variables into the statement
            $sql->bindParam(":planId", $planId);
            $sql->execute();
        }


    }

