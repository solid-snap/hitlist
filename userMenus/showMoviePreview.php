<link rel="stylesheet" href="../HitList2.css">
<html>
    <body>
    <div class="pageInfo">
        <div class="topnav" id="myTopNav">
            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="showMoviePreview.php" class="active">shows&movies</a></li>
                    <li><a href="videoSearch.php">trailer</a></li>
                    <li><a href="../login/login.php">login</a></li>
                </ul>
            </nav>
        </div>
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
         <footer> Contact Information : Hittlistt@Gmail.com </footer>
    </body>
</html>
