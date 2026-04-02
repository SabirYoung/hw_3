<?php

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$personality_type = $_POST['personality'];
$favorite_os = $_POST['os'];
$min_age = $_POST['min_age'];
$max_age = $_POST['max_age'];

$new_user_data = implode(',', array($name, $gender, $age, $personality_type, $favorite_os, $min_age, $max_age));
$file_path = 'singles.txt';

if (file_exists($file_path)) {
    $file_content = file_get_contents($file_path);
    
    if (!empty($file_content) && substr($file_content, -1) !== "\n") {
        file_put_contents($file_path, "\n", FILE_APPEND | LOCK_EX);
    }
}

$new_user_data .= "\n";
file_put_contents($file_path, $new_user_data, FILE_APPEND | LOCK_EX);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> signup-submit</title>
    <link rel="stylesheet" href="nerdieluv.css">
</head>

<body>
    <div id="content">
        <h1>thank you</h1>
        <p>welcome to Nerdluv,<?= htmlspecialchars($name) ?>!</p>
        <p>The next step is the go back to the home page and log in.</p>
    </div>
    
    <footer>
        <a href="index.php" class="btn"> return to homepage</a>
    </footer>

</body>