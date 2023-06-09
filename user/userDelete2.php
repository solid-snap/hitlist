<!doctype html>
<html>
    <body>
    <link rel="stylesheet" href="../hitlist.css">
    <div class="pageInfo">
    <?php
    require "User.php";
    $userId = $_POST["userIdVak"];
    $user1 = new User();
    $user1->searchUser($userId);
    ?>

    <form action="userDelete3.php" method="post">
        <!-- $movid mag niet meer gewijzigd worden -->
        <input type="hidden" name="userIdVak" value=" <?php echo $userId ?> ">
        <!-- 2x verwijderBox om nee of ja door te kunnen geven -->
        <input type="hidden" name="verwijderBox" value="nee">
        <input type="checkbox" name="verwijderBox" value="ja">
        <label for="verwijderBox">Delete this user.</label><br/><br/>
        <input type="submit"><br/><br/>
    </form>
        <h2><a href="../login/login.php">go back to login</a></h2>
    </div>
</html>

