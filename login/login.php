<link rel="stylesheet" href="../hitlist.css">
<div class="pageInfo"><!-- HTML-formulier voor inloggen -->
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../userMenus/showMoviePreview.php">shows&movies</a></li>
            <li><a href="../userMenus/videoSearch.php">trailer</a></li>
            <li><a href="login.php">login</a></li>
        </ul>
    </nav>
<?php
// Configuratiegegevens voor de database
$dbhost = "localhost";
$dbname = "hitlist";
$dbuser = "root";
$dbpass = "root";

// Klasse voor gebruikersbeheer
class User

{
    private $dbconn;

    public function __construct($dbhost, $dbname, $dbuser, $dbpass)
    {
        // Verbinding maken met de database via PDO
        $dsn = "mysql:host=$dbhost;dbname=$dbname;charset=utf8mb4";

        try {
            $this->dbconn = new PDO($dsn, $dbuser, $dbpass);
            $this->dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Kan geen verbinding maken met de database: " . $e->getMessage());
        }
    }

    public function login($gebruikersnaam, $wachtwoord)
    {
        try {
            // Query voorbereiden
            $query = "SELECT * FROM users WHERE userName = :gebruikersnaam AND userPassword = :wachtwoord";
            $stmt = $this->dbconn->prepare($query);

            // Parameters binden
            $stmt->bindParam(':gebruikersnaam', $gebruikersnaam);
            $stmt->bindParam(':wachtwoord', $wachtwoord);

            // Query uitvoeren
            $stmt->execute();

            // Controleren op overeenkomende gebruikers
            if ($stmt->rowCount() > 0) {
                // Inloggen gelukt
                return true;
            } else {
                // Inloggen mislukt
                return false;
            }
        } catch (PDOException $e) {
            die("Fout bij het uitvoeren van de query: " . $e->getMessage());
        }
    }
}

// Gebruik van het inlogsysteem
$user = new User($dbhost, $dbname, $dbuser, $dbpass);

// Inlogpoging controleren
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $wachtwoord = $_POST["wachtwoord"];

    if ($user->login($gebruikersnaam, $wachtwoord)) {
        header("location: ../userMenus/userScreen.php");
    } else {
        echo "Inloggen mislukt!";
    }
}
?>

<form method="POST" action="#">
    <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam" required><br>
    <input type="password" name="wachtwoord" placeholder="Wachtwoord" required><br>
    <input type="submit" value="Inloggen">
</form>
    <H2><a href="../user/userCreate1.php">Make a account</a></H2>
</div>