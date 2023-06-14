<!doctype html>

<head>
</head>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
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
        <h2><a href="movieIndex.php">go back to movies</a></h2>
    </div>
    </body>
</html>

