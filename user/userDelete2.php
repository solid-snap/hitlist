<!doctype html>
<html>
<!-- Victoria Hoogeveen -->
    <body>
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
</html>

