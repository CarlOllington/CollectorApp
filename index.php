<!DOCTYPE html>
<html lang="en">
<head>
    <title>Where in the World?</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="witw_styles.css" rel="stylesheet">
</head>
<body class="page">
<header class="header">
    <h1>Where in the World!?</h1>
</header>


<div class="content" id=home>
<?php

require_once("db.php");

// sql query pulling all fields and entries from shirts table in collection database
$query = $db->prepare('SELECT `id`,`country`,`team`,`year_collected`,`shirt_front`,`shirt_back` FROM `shirts`');
$query->execute();

// store information as indexed array of associative arrays
$results = $query->fetchAll();

//for each loop to cycle through each row of database and display the data

    echo "<section class = gallery>";
    foreach ($results as $shirt)
    {
        $shirt_front = $shirt['shirt_front'];
        $shirt_back = $shirt['shirt_back'];
        $country = $shirt['country'];
        $team = $shirt['team'];
        $year_collected = $shirt['year_collected'];

        echo "<article class=box>";
        echo "<a class=shirt href='#'>";
        echo "<img src='$shirt_front' alt='$country $team Shirt Front' class= shirt_front>";
        echo "<img src='$shirt_back' alt= '$country $team Shirt Back' class= shirt_back>";
        echo "</a>";
        echo "<div class=summary>";
        echo "<p class='country'>$country</p>";
        echo "<p>|</p>";
        echo "<p class='team'>$team</p>";
        echo "<p>|</p>";
        echo "<p class='year'>$year_collected</p>";
        echo "</article>";
    }
    echo "</section>";

?>
</div>
<footer class=footer>
    <span>Website Design & Build by Carl Ollington</span>
        <a class="btt" href="index.php">Back To Top &#x21EA;</a>
</footer>
</body>
</html>