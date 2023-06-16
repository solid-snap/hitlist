<!doctype html>
<html>
<head>
</head>
    <body>
    <link rel="stylesheet" href="../HitList2.css">
    <div class="pageInfo">
        <div class="topnav" id="myTopNav">
            <h2><a href="showIndex.php" class="active">go back to show</a></h2>
        </div>
    <h1>Add a show</h1>
        <form action="showsCreate2.php" method="post">
            <label for "showNameVak">showName: </label>
            <input type="text" name="showNameVak"></input>
            <br/>
            <label for "showTypeVak">showType: </label>
            <input type="text" name="showTypeVak"></input>
            <br/>
            <label for "showGenreVak">showGenre: </label>
            <input type="text" name="showGenreVak"></input>
            <br/>
            <label for "showSeasonsVak">showSeasons: </label>
            <input type="text" name="showSeasonsVak"></input>
            <br/>
            <label for "showEpsLengthVak">showEpLength: </label>
            <input type="text" name="showEpLengthVak"></input>
            <br/>
            <label for "showReviewVak">showReview: </label>
            <input type="text" name="showReviewVak"></input>
            <br/>
            <label for "showSummaryVak">showSummary: </label>
            <input type="text" name="showSummaryVak"></input>
            <br/>
            <input type="submit">
        </form>
    <h2><a href="showIndex.php">go back to shows</a></h2>
    </div>
    </body>
</html>
