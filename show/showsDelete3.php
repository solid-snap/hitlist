
<!doctype html>
<html>
<head>
    <title>delete show formulier 3</title>
</head>
<body>
<h1>delete show formulier 3</h1>
<a href="schoolmenu.php">Terug naar het hoofdmenu</a>
<?php
require "shows.php";

$showId = $_POST["showIdVak"];
$verwijderen = $_POST["verwijderBox"];

if ($verwijderen == "ja") {
    echo "De show is verwijderd <br/>";
    $show1 = new shows();
    $show1->deleteshows($showId);
} else {
    echo "De show is niet verwijderd <br/>";
}
?>

</body>
</html>
