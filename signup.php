<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> signup</title>
    <link rel="stylesheet" href="nerdieluv.css">
</head>

<body>
    <header>
        <div id="title">
            <p1>Welcome!</p>
        </div>
    </header>

    <main>
        <form action="signup-submit.php" method="post">
            Name:<input type="text" id="name" name="name" maxlength="16" required>
            <br>
            <label>Gender:</label>
            <input type="radio" id="female" name="gender" value="F" checked>
            <label for="female">Female</label>
            <input type="radio" id="male" name="gender" value="M">
            <label for="female">Male</label>
            <input type="radio" id="other" name="gender" value="O">
            <label for="Other">Other</label>
            <br>
            Age:<input type="number" id="age" name="age" min="18" max="120" required>
            <br>
            Personality type:<input type="text" id="personality" name="personality" maxlength="4" required>
            <a href=" http://www.humanmetrics.com/cgi-win/JTypes2.asp" target="_blank">What is this?</a>
            <br>
            Favorite OS:<select id="os" name="os">
                <option value="Windows" selected>Windows</option>
                <option value="mac OS X">mac OS X</option>
                <option value="linux">linux</option>
            </select>
            <br>
            Seeking Age:
            <input type="number" id="min_age" name="min_age" min="18" max="120" placeholder="min" required>
            <input type="number" id="max_age" name="max_age" min="18" max="120" placeholder="max" required>
            <br>
            <input type="submit" value="Sign Up" class="btn">
        </form>
    </main>

    <footer>
        <a href="index.php" class="btn"> return to homepage</a>

    </footer>
</body>
