<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>De ingevulde gegevens zijn:</h1>
    <p>Naam: <?php echo $_POST["name"];?></p>
    <p>E-mail: <?php echo $_POST["email"];?></p>
</body>
</html>