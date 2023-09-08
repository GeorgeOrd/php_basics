<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi formulario basico</title>
</head>
<body>
    <?php include './components/date.php'?>
    <form action="user.php" method="POST">
        Username: <input type="text" name="username"><br>
        Email: <input type="text" name="email"><br>
        Want to receive email news? <input type="checkbox" name="email_news">
        <input type="submit">
    </form>
</body>
</html>