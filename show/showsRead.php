<!DOCTYPE html>
<html lang="en">

<body>
<link rel="stylesheet" href="../hitlist.css">
<div class="pageInfo">
<h1>All the shows</h1>
<?php
require "shows.php";
$shows1 = new shows();
$shows1->readshows();

?>
<h2><a href="showIndex.php">go back to shows</a></h2>
</div>
</body>
</html>