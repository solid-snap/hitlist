<?php


require_once "../DBHitlist.php";

class
shows
{
    // properties --  ----

    public $showName;
    public $showType;
    public $showGenre;
    public $showSeasons;
    public $showEpLength;
    public $showReview;
    public $showSummary;

    //method -- functions
    // constructor
    function __construct($showName = NULL, $showType = NULL, $showGenre = NULL, $showSeasons = NULL, $showEpLength = NULL, $showReview = NULL, $showSummary = NULL )
    {
        $this->showName = $showName;
        $this->showType = $showType;
        $this->showGenre = $showGenre;
        $this->showSeasons = $showSeasons;
        $this->showEpLength = $showEpLength;
        $this->showReview = $showReview;
        $this->showSummary = $showSummary;
    }

    function set_showName($showName)
    {
        $this->showName = $showName;
    }

    function set_showType($showType)
    {
        $this->showType = $showType;
    }

    function set_showGenre($showGenre)
    {
        $this->showGenre = $showGenre;
    }

    function set_showSeasons($showSeasons)
    {
        $this->showSeasons = $showSeasons;
    }

    function set_showEpLength($showEpLength)
    {
        $this->showEpLength = $showEpLength;
    }

    function set_showReview($showReview)
    {
        $this->showReview = $showReview;
    }

    function set_showSummary($showSummary)
    {
        $this->showSummary = $showSummary;
    }
    // getters
    function get_showName()
    {
        return $this->showName;
    }

    function get_showType()
    {
        return $this->showType;
    }

    function get_showGenre()
    {
        return $this->showGenre;
    }
    function get_showSeasons()
    {
        return $this->showSeasons;
    }

    function get_showEpLength()
    {
        return $this->showEpLength;
    }

    function get_showReview()
    {
        return $this->showReview;
    }

    function get_showSummary()
    {
        return $this->showSummary;
    }


    public function afdrukken()
    {
        echo $this->get_showName();
        echo "<br/>";
        echo $this->get_showType();
        echo "<br/>";
        echo $this->get_showGenre();
        echo "<br/>";
        echo $this->get_showSeasons();
        echo "<br/>";
        echo $this->get_showEpLength();
        echo "<br/>";
        echo $this->get_showReview();
        echo "<br/>";
        echo $this->get_showSummary();
        echo "<br/>";
    }

    // crud method
    public function createshows()
    {
        global $conn;
        // info from the objects into the variables
        $showId = NULL;
        $showName = $this->get_showName();
        $showType = $this->get_showType();
        $showGenre = $this->get_showGenre();
        $showSeasons = $this->get_showSeasons();
        $showEpLength = $this->get_showEpLength();
        $showReview = $this->get_showReview();
        $showSummary = $this->get_showSummary();


        // prepare statement for the table
        $sql = $conn->Prepare("insert into shows
values (:showId, :showName, :showType, :showGenre, :showSeasons, :showEpLength, :showReview, :showSummary) ");
// puts variables into the statement
        $sql->bindParam(":showId", $showId);
        $sql->bindParam(":showName", $showName);
        $sql->bindParam(":showType", $showType);
        $sql->bindParam(":showGenre", $showGenre);
        $sql->bindParam(":showSeasons", $showSeasons);
        $sql->bindParam(":showEpLength", $showEpLength);
        $sql->bindParam(":showReview", $showReview);
        $sql->bindParam(":showSummary", $showSummary);
        $sql->execute();
        //notification
        echo "the show has been added: </br>";
    }
    public
    function updateshows($showId)
    {
        global $conn;
        // info from the objects into the statement
        $showId;
        $showName = $this->get_showName();
        $showType = $this->get_showType();
        $showGenre = $this->get_showGenre();
        $showSeasons = $this->get_showSeasons();
        $showEpLength = $this->get_showEpLength();
        $showReview = $this->get_showReview();
        $showSummary = $this->get_showSummary();
        // statement
        $sql = $conn->prepare("
									update shows
									set showId=:showId, showName=:showName, showType=:showType, 
									    showGenre=:showGenre, showSeasons=:showSeasons, showEpLength=:showEpLength, showReview=:showReview, showSummary=:showSummary    
									where showId=:showId
								 ");
        // put variables into statement

        $sql->bindParam(":showId", $showId);
        $sql->bindParam(":showName", $showName);
        $sql->bindParam(":showType", $showType);
        $sql->bindParam(":showGenre", $showGenre);
        $sql->bindParam(":showSeasons", $showSeasons);
        $sql->bindParam(":showEpLength", $showEpLength);
        $sql->bindParam(":showReview", $showReview);
        $sql->bindParam(":showSummary", $showSummary);
        $sql->execute();
    }
    public function readshows ()
    {
        global $conn;
        // statement
        $sql = $conn->prepare(" SELECT * FROM shows");
        $sql->execute();
        foreach ($sql as $shows) {
            echo $shows["showId"] . " - ";                         //
            $this->set_showName($shows["showName"]);
            echo $shows["showName"] . " - ";
            $this->set_showType($shows["showType"]);
            echo $shows["showType"] . " - ";
            $this->set_showGenre($shows["showGenre"]);
            echo $shows["showGenre"] . " - ";
            $this->set_showSeasons($shows["showSeasons"]);
            echo $shows["showSeasons"] . " - ";
            $this->set_showEpLength($shows["showEpLength"]);
            echo $shows["showEpLength"] . " <br/> ";
            $this->set_showReview($shows["showReview"]);
            echo $shows["showReview"] . " <br/> ";
            $this->set_showSummary($shows["showSummary"]);
            echo $shows["showSummary"] . " <br/> ";
        }
    }

    public function searchshows($showId)
    {

        global $conn;
        // sql statement
        $sql = $conn->prepare("select * from shows
                               where showId = :showId");
        // variabeles into the statement
        $sql->bindParam(":showId", $showId);
        $sql->execute();
        // puts info from the array in the object and print
        foreach ($sql as $shows) {
            echo $shows["showId"] . "<br>";
            echo $this->showName = $shows["showName"] . "<br>";
            echo $this->showType = $shows["showType"] . "<br>";
            echo $this->showGenre = $shows["showGenre"] . "<br>";
            echo $this->showSeasons = $shows["showSeasons"] . "<br>";
            echo $this->showEpLength = $shows["showEpLength"] . "<br>";
            echo $this->showReview = $shows["showReview"] . "<br>";
            echo $this->showSummary = $shows["showSummary"] . "<br>";


        }
    }

    public function deleteshows($showId)
    {
        global $conn;
        //statements
        $sql = $conn->prepare(" DELETE FROM shows
        where showId = :showId");
        // variables into the statement
        $sql->bindParam(":showId", $showId);
        $sql->execute();
    }


}