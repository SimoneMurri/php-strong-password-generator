<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password Sicure</title>
    <link rel="stylesheet" href="./style/style.css">
<body>
    <h2>Generatore di Password Sicure</h2>
    <div>
        <form action="index.php" method="GET">
            <label for="passwordLength">Lunghezza della Password:</label>
            <input type="number" name="passwordLength" id="passwordLength" required min="1">
            <button class="position" type="submit">Invia</button>
        </form>
    </div>
</body>
</html>