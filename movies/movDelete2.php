<!doctype html>
<html>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <?php
        require "Movies.php";
        $movId = $_POST["movIdField"];
        $mov1 = new Movies();
        $mov1->searchMov($movId);
        ?>

        <form action="movDelete3.php" method="post">
            <!-- $movid mag niet meer gewijzigd worden -->
            <input type="hidden" name="movIdField" value=" <?php echo $movId ?> ">
            <!-- 2x verwijderBox om nee of ja door te kunnen geven -->
            <input type="hidden" name="deleteBox" value="nee">
            <input type="checkbox" name="deleteBox" value="ja">
            <label for="deleteBox">Delete this movie.</label><br/><br/>
            <input type="submit"><br/><br/>
        </form>
        <h2><a href="movieIndex.php">go back to movies</a></h2>
    </div>
    </body>
</html>

