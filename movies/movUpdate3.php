<!doctype html>
<html>
<!-- Anjo Eijeriks -->
    <head>
        <title>Update Movies Formulier 3</title>
    </head>
    <body>
    <h1>Update Movies Formulier 3</h1>

        <?php
        require "Movies.php";
        // gegevens uit de array in variabelen stoppen
        $movId = $_POST["movIdVak"];
        $movName = $_POST["movNameVak"];
        $movType = $_POST["movTypeVak"];
        $movGenre = $_POST["movGenreVak"];
        $movLength = $_POST["movLengthVak"];
        $movReview = $_POST["movReviewVak"];
        $movSummary = $_POST["movSummaryVak"];

        // maken object ---------------------------------------------------
        $mov1 = new Movies($movName, $movType, $movGenre, $movLength, $movReview, $movSummary); // maakt object
        $mov1->updateMov($movId);		           // vervangt de tabelgegevens voor objectgegevens
        echo "This is the updated information: <br/>";
        echo $movId ."<br/>";
        $mov1->afdrukken();	                       // drukt object af

        ?>
    </body>
</html>

