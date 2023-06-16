<!doctype html>

<head>
</head>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <div class="topnav" id="myTopNav">
        <h2><a href="movieIndex.php" class="active">go back to movies</a></h2>
        </div>
        <?php
        require "Movies.php";

        // uitlezen vakjes van KlantenCreate1 -----
        $movName=$_POST["movNameField"];
        $movType=$_POST["movTypeField"];
        $movGenre=$_POST["movGenreField"];
        $movLength=$_POST["movLengthField"];
        $movReview=$_POST["movReviewField"];
        $movSummary=$_POST["movSummaryField"];

        // maken object -------------------------------
        $mov1 = new Movies($movName, $movType, $movGenre, $movLength, $movReview, $movSummary);
        $mov1->createMov();

        // afdrukken object ---------------------------

        $mov1->afdrukken();
        ?>
    </div>
    </body>
<footer> Contact Information : Hittlistt@Gmail.com </footer>
</html>

