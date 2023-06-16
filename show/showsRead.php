<!DOCTYPE html>
<html lang="en">

<body>
<link rel="stylesheet" href="../HitList2.css">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="showIndex.php" class="active">go back to show</a></h2>
    </div>
<h1>All the shows</h1>
<?php
require "shows.php";
$shows1 = new shows();
$shows1->readshows();

?>
</div>
</body>
<footer> Contact Information : Hittlistt@Gmail.com </footer>
</html>