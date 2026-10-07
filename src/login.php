```php
<?php
session_start();

$kayttajanimi = "Aleksi";
$salasana = "salasana";

$virhe = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === $kayttajanimi && $password === $salasana) {
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;

        header("Location: index.php");
        exit;
    } else {
        $virhe = "Väärä käyttäjänimi tai salasana.";
    }
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Kirjautuminen</title>
</head>
<body>
    <h1>Kirjaudu sisään</h1>

    <?php if ($virhe): ?>
        <p><?php echo $virhe; ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Käyttäjänimi:</label>
        <input type="text" name="username" required>

        <br><br>

        <label>Salasana:</label>
        <input type="password" name="password" required>

        <br><br>

        <button type="submit">Kirjaudu</button>
    </form>
</body>
</html>
```
