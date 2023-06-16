<link rel="stylesheet" href="../HitList2.css">
<div class="pageInfo"><!-- HTML-formulier voor inloggen -->
    <div class="topnav" id="myTopNav">
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../userMenus/showMoviePreview.php">shows&movies</a></li>
            <li><a href="../userMenus/videoSearch.php">trailer</a></li>
            <li><a href="login.php" class="active">login</a></li>
        </ul>
    </nav>
    </div>
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

    public function login($username, $password)
    {
        try {
            // Query voorbereiden
            $query = "SELECT * FROM users WHERE userName = :username AND userPassword = :password";
            $stmt = $this->dbconn->prepare($query);

            // Parameters binden
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);

            // Query uitvoeren
            $stmt->execute();

            // Controleren op overeenkomende gebruikers
            if ($stmt->rowCount() > 0) {
                // Inloggen gelukt
                return true;
            } else {
                // inloggen mislukt
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
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($user->login($username, $password)) {
        header("location: ../userMenus/userScreen.php");
    } else {
        echo "failed to login!";
    }
}
?>

<form method="POST" action="#">
    <input type="text" name="username" placeholder="username" required><br>
    <input type="password" name="password" placeholder="password" required><br>
    <input type="submit" value="login">
</form>
    <H2><a href="../user/userCreate1.php">Make an account</a></H2>
</div>

<footer> Contact Information : Hittlistt@Gmail.com </footer>