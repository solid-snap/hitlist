<!doctype html>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="../HitList2.css">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
<h1>Make a Plan</h1>
    <form action="planCreate2.php" method="post">
        <label for "movIdField">movId: </label>
        <input type="text" name="movIdField"></input>
        <br/>
        <label for "showId">showId: </label>
        <input type="text" name="showIdField"></input>
        <br/>
        <label for "planNameField">planName: </label>
        <input type="text" name="planNameField"></input>
        <br/>
        <label for "movieNameField">movieName: </label>
        <input type="text" name="movieNameField"></input>
        <br/>
        <label for "showNameVak">showName: </label>
        <input type="text" name="showNameField"></input>
        <br/>
        <label for "planDateVak">planDate: </label>
        <input type="text" name="planDateField"></input>
        <input type="submit">
    </form>
    </div>
    <h2><a href="plannerIndex.php" class="active">go back to planner</a></h2>
</div>
</body>
</html>
