<?php
$name = $_GET["name"];

$lines = file("singles.txt", FILE_IGNORE_NEW_LINES);

$user = null;

foreach ($lines as $line) {
    $data = explode(",", $line);
    if ($data[0] === $name) {
        $user = $data;
        break;
    }
}

if ($user === null) {
    die("User not found.");
}

list($userName, $userGender, $userAge, $userType, $userOs, $userMin, $userMax) = $user;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matches</title>
    <link rel="stylesheet" href="/css/nerdieluv.css">
</head>

<body>

    <header>
        <h1>Matches for <?php echo htmlspecialchars($userName); ?></h1>
    </header>

    <main class="matches-container">

        <?php
        $matches = [];

        foreach ($lines as $line) {
            $data = explode(",", $line);
            list($name2, $gender2, $age2, $type2, $os2, $min2, $max2) = $data;

            if ($name2 === $userName) continue;

            if ($userGender !== 'O' && $gender2 === $userGender) continue;

            if ($userAge < $min2 || $userAge > $max2 || $age2 < $userMin || $age2 > $userMax) continue;

            if ($os2 !== $userOs) continue;

            $match = false;
            for ($i = 0; $i < strlen($userType); $i++) {
                if ($userType[$i] === $type2[$i]) {
                    $match = true;
                    break;
                }
            }

            if (!$match) continue;

            $matches[] = [
                'name' => $name2,
                'gender' => $gender2,
                'age' => $age2,
                'type' => $type2,
                'os' => $os2
            ];
        }

        if (empty($matches)) {
            echo "<p>No matches found for " . htmlspecialchars($userName) . ".</p>";
        } else {
            foreach ($matches as $match) {
        ?>
                <div class="match-card">
                    <img src="images/user.jpg" alt="user">
                    <h3><?php echo htmlspecialchars($match['name']); ?></h3>
                    <ul>
                        <li><strong>Gender:</strong> <?php echo htmlspecialchars($match['gender']); ?></li>
                        <li><strong>Age:</strong> <?php echo htmlspecialchars($match['age']); ?></li>
                        <li><strong>Type:</strong> <?php echo htmlspecialchars($match['type']); ?></li>
                        <li><strong>OS:</strong> <?php echo htmlspecialchars($match['os']); ?></li>
                    </ul>
                </div>
        <?php
            }
        }
        ?>

    </main>

    <footer>
        <a href="index.php" class="btn">Return to homepage</a>
    </footer>

</body>
</html>