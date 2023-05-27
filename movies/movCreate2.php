<!doctype html>
<html>
<!-- Victoria Hoogeveen -->
<head>
    <title>Movie Create 2</title>
</head>
    <body>
        <h1>Movie Create 2</h1>
        <?php
        require "Movies.php";

        // uitlezen vakjes van KlantenCreate1 -----
        $movName=$_POST["movNameVak"];
        $movType=$_POST["movTypeVak"];
        $movGenre=$_POST["movGenreVak"];
        $movLength=$_POST["movLengthVak"];
        $movReview=$_POST["movReviewVak"];
        $movSummary=$_POST["movSummaryVak"];

        // maken object -------------------------------
        $mov1 = new Movies($movName, $movType, $movGenre, $movLength, $movReview, $movSummary);
        $mov1->createMov();

        // afdrukken object ---------------------------

        $mov1->afdrukken();
        ?>
    </body>
</html>

