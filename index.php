<!DOCTYPE html>
<html lang="en">

<header>

</header>
<head>
    <title>Where in the World?</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1" />
    <link href="witw_styles.css" rel="stylesheet">
</head>
<body class="page">
<header class="header">
    <h1>Where in the World!?</h1>
</header>


<div class="content" id = home>
<?php

// Establish connection to database
$db = new PDO('mysql:host=db; dbname=shirt_collection','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// sql query pulling all fields and entries from shirts table in collection database
$query = $db->prepare('SELECT `id`,`country`,`team`,`year_collected`,`shirt_front`,`shirt_back` FROM `shirts`');
$query->execute();

// store information as indexed array of associative arrays
$results = $query->fetchAll();

//function to display data
function visualise_data($results)
{
    echo "<section class = gallery>";
    foreach ($results as $shirt)
    {
        $shirt_front = $shirt['shirt_front'];
        $shirt_back = $shirt['shirt_back'];
        $country = $shirt['country'];
        $team = $shirt['team'];
        $year_collected = $shirt['year_collected'];

        echo "<article class=box>";
        echo "<a class = shirt href = '#'>";
        echo "<img src = '$shirt_front' alt='$country $team Shirt Front' class= shirt_front>";
        echo "<img src = '$shirt_back' alt= '$country $team Shirt Back' class= shirt_back>";
        echo "</a>";
        echo "<div class = summary>";
        echo "<p class = 'country'>$country</p>";
        echo "<p>|</p>";
        echo "<p class = 'team'>$team</p>";
        echo "<p>|</p>";
        echo "<p class = 'year'>$year_collected</p>";
        echo "</article>";
    }
    echo "</section>";
}

visualise_data($results);
?>
</div>
<footer class = footer>
    <span>Website Design & Build by Carl Ollington</span>
        <a class="btt" href="index.php">Back To Top &#x21EA;</a>
</footer>
</body>
</html>