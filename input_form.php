<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Shirt Form</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="witw_styles.css" rel="stylesheet">
</head>

<body class="page_input_form">

<header class="header">
    <h1>Let's add a shirt!</h1>
</header>

<section>
    <div class="form_section">
            <form method="post" class="input_form">
                <div class="form_shirt_front">
                    <input type="file" id="shirt_front" name="shirt_front" accept="image/*" alt="Front of Shirt Image Upload" placeholder="" required><br>
                    <label for="shirt_front">Front of Shirt Image Upload</label>
                </div>
                <br>
                <div class="form_shirt_back">
                    <input type="file" id="shirt_back" name="shirt_back" accept="image/*" alt="Back of Shirt Image Upload" required><br>
                    <label for="shirt_back">Back of Shirt Image Upload</label>
                </div>
                <br>
                <div class="form_country">
                    <label for="country_input">Country:</label><br>
                    <input id="country_input" name="country_input" alt="Country Input" placeholder="i.e. Spain" required>
                </div>
                <br>
                <div class="form_team">
                    <label for="team_input">Team:</label><br>
                    <input type="text" id="team_input" name="team_input" alt="Team Input" placeholder="i.e. National Team">
                </div>
                <br>
                <div class="form_year_collected">
                    <label for="year_input">Year Collected:</label><br>
                    <input type="number" id="year_input" name="year_input" alt="Year Input" placeholder="i.e. 2024" required>
                </div>
                <br>
                <button type="submit">Add to Collection</button>
            </form>
    </div>
</section>
<?php
function form_submission()
{
if (isset($_POST))
{
$submitted_data = $_POST;
}
else
{
    echo "Please fill all the required fields.";
    echo "<br>";
    echo "Please add a JPEG or PNG Image file.";
}
return $submitted_data;
}
form_submission();
$submitted_data = form_submission();

?>
<br>
<footer class=footer>
    <span>Website Design & Build by Carl Ollington</span>
    <a class="btt" href="index.php">Back to Gallery &#x1F455;</a>
    <a class="btt" href="input_form.php">Back To Top &#x21EA;</a>
</footer>

</body>
</html>