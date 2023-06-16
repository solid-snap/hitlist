<!doctype html>
<html>
<head>
</head>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <div class="topnav" id="myTopNav">
        <h2><a href="movieIndex.php" class="active">go back to movies</a></h2>
        </div>
        <h1>Add a movie</h1>
        <form action="movCreate2.php" method="post">
            <label for "movNameField">Movie Name: </label>
            <input type = "text" name = "movNameField"></input>
            <br/>
            <label for "movTypeVakField">Movie Type: </label>
            <input type = "text" name = "movTypeField"></input>
            <br/>
            <label for "movGenreField">Movie Genre: </label>
            <input type = "text" name = "movGenreField"></input>
            <br/>
            <label for "movLengthField">Movie Length: </label>
            <input type = "text" name = "movLengthField"></input>
            <br/>
            <label for "movReviewField">Movie Review: </label>
            <input type = "text" name = "movReviewField"></input>
            <br/>
            <label for "movSummaryField">Movie Summary: </label>
            <input type = "text" name = "movSummaryField"></input>
            <input type="submit">
        </form>
    </div>
    <footer> Contact Information : Hittlistt@Gmail.com </footer>
    </body>
</html>
