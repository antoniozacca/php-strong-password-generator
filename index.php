<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password Sicure</title>
</head>
<body>
    <h1>Generatore di Password Sicure</h1>
    <form method="GET" action="">
        <label for="length">Lunghezza Password:</label>
        <input type="number" id="length" name="length" min="1" required>
        <button type="submit">Genera Password</button>
    </form>

    <?php
    if (isset($_GET['length'])) {
        $length = intval($_GET['length']);
        if ($length > 0) {
            include 'functions.php';
            $password = generate_password($length);
            echo "<p>Password generata: <strong>$password</strong></p>";
        } else {
            echo "<p>Inserisci un valore valido per la lunghezza della password.</p>";
        }
    }
    ?>
</body>
</html>