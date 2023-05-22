
<!DOCTYPE html>
<html lang="en">

<body>

<div id="centercontent">
<p>Alle gegevens van de Leveranciers:</p>
<?php
require "shows.php";
$shows1 = new shows();
$shows1->readshows();

?>
    <a href="Leveranciersindex.html">terug naar het menu.</a>
</div>
</body>
</html>