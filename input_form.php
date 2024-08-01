<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Shirt Form</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="witw_styles.css" rel="stylesheet">
</head>

<body class="page_input_form">

<header>
    <h1>Let's add a shirt!</h1>
</header>

<section>
    <div class="form_section">
            <form method="post" class="input_form" enctype="multipart/form-data">
                <div class="form_shirt_front">
                    <input type="text" id="shirt_front" name="shirt_front" required>
                    <label for="shirt_front">Front of Shirt Image URL</label>
                </div>
                <br>
                <div class="form_shirt_back">
                    <input type="text" id="shirt_back" name="shirt_back" required>
                    <label for="shirt_back">Back of Shirt Image URL</label>
                </div>
                <br>
                <div class="form_country">
                    <label for="country_input" class="country_label">Country:</label><br>
                    <input type="text" id="country_input" name="country_input" alt="Country Input" placeholder="i.e. Spain" required>
                </div>
                <br>
                <div class="form_team">
                    <label for="team_input">Team:</label><br>
                    <input type="text" id="team_input" name="team_input" alt="Team Input" placeholder="i.e. National Team" required>
                </div>
                <br>
                <div class="form_year_collected">
                    <label for="year_input">Year Collected:</label><br>
                    <input type="number" id="year_input" name="year_input" alt="Year Input" placeholder="i.e. 2024" required>
                </div>
                <br>
                <input type="submit" name="submit" value="Add to Collection">
            </form>

<?php

require_once("db.php");

$shirt_front = null;
$shirt_back = null;
$country_input = null;
$team_input = null;
$year_input = null;

if (isset($_POST['shirt_front']) && isset($_POST['shirt_back']) && isset($_POST['country_input']) && isset($_POST['team_input']) && isset($_POST['year_input']))
{
    if ($_POST['shirt_front'] != null && $_POST['shirt_back'] != null && $_POST['country_input'] != null && $_POST['year_input'] != null)
    {
    $shirt_front = $_POST['shirt_front'];
    $shirt_back = $_POST['shirt_back'];
    $country = trim($_POST['country_input']);
    $team = trim($_POST['team_input']);
    $year = trim($_POST['year_input']);
    }
}
else
{
    echo "<br>Please fill all the required fields.";
}
if ($shirt_front !== null && $shirt_back !== null && $country !== null && $team !== null && $year !== null)
{
    $query = $db->prepare("INSERT INTO `shirts` (`shirt_front`,`shirt_back`,`country`,`team`,`year_collected`) VALUES (:SF, :SB, :country, :team, :year)");

    $query->bindparam(":SF", $shirt_front);
    $query->bindparam(":SB", $shirt_back);
    $query->bindparam(":country", $country);
    $query->bindparam(":team", $team);
    $query->bindparam(":year", $year);

    $query->execute();
}

?>
    </div>
</section>
<br>

<footer class=footer>
    <span>Website Design & Build by Carl Ollington</span>
    <a class="btt" href="index.php">Back to Gallery &#x1F455;</a>
    <a class="btt" href="input_form.php">Back To Top &#x21EA;</a>
</footer>

</body>
</html>