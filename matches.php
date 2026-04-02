<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> matches</title>
    <link rel="stylesheet" href="nerdieluv.css">
</head>

<body>
    <header>
        <div id="title">
            <h1>Welcome!</h1>
        </div>
    </header>

    <main>
        <p>This page is for returning users.</p>
        <p>Type in your username and see all of your matches.</p>
        <form action="matches-submit.php" method="GET">
            Name:<input type="text" id="name" name="name" maxlength="16" required>
            <input type="submit" value="check matches">

        </form>

    </main>

    <footer>
        <a href="index.php" class="btn"> return to homepage</a>

    </footer>
</body>

