<!doctype html>
<html>
<head>
</head>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <div class="topnav" id="myTopNav">
        <h1>Add a movie</h1>
        <form action="movCreate2.php" method="post">
            <label for "movNameVak">Movie Name: </label>
            <input type = "text" name = "movNameVak"></input>
            <br/>
            <label for "movTypeVak">Movie Type: </label>
            <input type = "text" name = "movTypeVak"></input>
            <br/>
            <label for "movGenreVak">Movie Genre: </label>
            <input type = "text" name = "movGenreVak"></input>
            <br/>
            <label for "movLengthVak">Movie Length: </label>
            <input type = "text" name = "movLengthVak"></input>
            <br/>
            <label for "movReviewVak">Movie Review: </label>
            <input type = "text" name = "movReviewVak"></input>
            <br/>
            <label for "movSummaryVak">Movie Summary: </label>
            <input type = "text" name = "movSummaryVak"></input>
            <input type="submit">
        </form>
        </div>
        <h2><a href="movieIndex.php" class="active">go back to movies</a></h2>
    </div>
    </body>
</html>
