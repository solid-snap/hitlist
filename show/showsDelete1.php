<!doctype html>
<html>
<head>
</head>
<body>
<?php
include "hitlistCss.php"
?>
<div class="pageInfo">
<h1>Remove a show</h1>
<form action="showsDelete2.php" method="post">
    <label for="showId">showId:</label>
    <input type="text" id="showId" name="showIdVak">
    <input type="submit">
    <br>
</form>
<h2><a href="showIndex.php">go back to show</a></h2>
</div>
</body>
</html>