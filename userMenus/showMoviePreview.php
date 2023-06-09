<html>
<body>
<link rel="stylesheet" href="../hitlist.css">
<div class="pageInfo">
<nav>
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="showMoviePreview.php">shows&movies</a></li>
        <li><a href="videoSearch.php">trailer</a></li>
        <li><a href="../login/login.php">login</a></li>
    </ul>

</nav>
    <?php
    require_once "show/shows.php";
    $shows1 = new shows();
    $shows1->readshows();

    ?>
    <br>
    <?php
    require_once "movies/Movies.php";
    $mov1 = new Movies();
    $mov1->readMov();
    ?>
<a href="../index.php">go to home screen</a>
</div>
</body>
</html>
