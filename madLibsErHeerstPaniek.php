<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs</title>
    <link rel="stylesheet" href="style/madLibsStyle.css">
</head>
<body>
    <header>
        <h1>Mad Libs</h1>
    </header>
    <main>
        <nav>
            <a href="#test">Er heerst paniek...</a></li>
            <a href="#test2">Onkunde</a></li>
        </nav>
        <h2>Er heerst paniek...</h2>
        <p>
            Er heerst paniek in het koninkrijk <?php echo htmlspecialchars($_POST["question3"]);?>. 
            Koning <?php echo htmlspecialchars($_POST["question6"]);?> is ten einde raad en als koning <?php echo htmlspecialchars($_POST["question6"]);?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo htmlspecialchars($_POST["question2"]);?><br>
            "<?php echo htmlspecialchars($_POST["question2"]);?>! Het is een ramp! Het is een schande!"
            "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"
            "Mijn <?php echo htmlspecialchars($_POST["question1"]);?> is verdwenen! Zo maar zonder waarschuwing. En ik had net <?php echo htmlspecialchars($_POST["question5"]);?> voor hem gekocht!"
            "Majesteit, uw <?php echo htmlspecialchars($_POST["question1"]);?> komt vast vanzelf weer terug?"
            "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo htmlspecialchars($_POST["question8"]);?> leren?"
            "Maar Sire, daar kunt u toch uw <?php echo htmlspecialchars($_POST["question7"]);?> voor gebruiken."
            "<?php echo htmlspecialchars($_POST["question2"]);?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
            "<?php echo htmlspecialchars($_POST["question4"]);?>, Sire."
        </p>
    </main>
    <footer>

    </footer>
</body>
</html>
