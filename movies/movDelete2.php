<!doctype html>
<html>
    <body>
    <link rel="stylesheet" href="../hitlist.css">
    <div class="pageInfo">
        <?php
        require "Movies.php";
        $movId = $_POST["movIdVak"];
        $mov1 = new Movies();
        $mov1->searchMov($movId);
        ?>

        <form action="movDelete3.php" method="post">
            <!-- $movid mag niet meer gewijzigd worden -->
            <input type="hidden" name="movIdVak" value=" <?php echo $movId ?> ">
            <!-- 2x verwijderBox om nee of ja door te kunnen geven -->
            <input type="hidden" name="verwijderBox" value="nee">
            <input type="checkbox" name="verwijderBox" value="ja">
            <label for="verwijderBox">Delete this movie.</label><br/><br/>
            <input type="submit"><br/><br/>
        </form>
        <h2><a href="movieIndex.php">go back to movies</a></h2>
    </div>
    </body>
</html>

