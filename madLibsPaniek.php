<?php
    $question1 = $question2 = $question3 = $question4 = $question5 = $question6 = $question7 = $question8 = '';
    $invalid1 = $invalid2 = $invalid3 = $invalid4 = $invalid5 = $invalid6 = $invalid7 = $invalid8 = ''; 
    $q1bool = $q2bool = $q3bool = $q4bool = $q5bool = $q6bool = $q7bool = $q8bool = FALSE;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST["question1"])) {
            $invalid1 = "Nog niet ingevuld";
            $q1bool = FALSE;
        } else {
            $question1 = $_POST["question1"];
            $q1bool = TRUE;
        }

        if (empty($_POST["question2"])) {
            $invalid2 = "Nog niet ingevuld";
            $q2bool = FALSE;
        } else {
            $question2 = $_POST["question2"];
            $q2bool = TRUE;
        }
        
        if (empty($_POST["question3"])) {
            $invalid3 = "Nog niet ingevuld";
            $q3bool = FALSE;
        } else {
            $question3 = $_POST["question3"];
            $q3bool = TRUE;
        }
        
        if (empty($_POST["question4"])) {
            $invalid4 = "Nog niet ingevuld";
            $q4bool = FALSE;
        } else {
            $question4 = $_POST["question4"];
            $q4bool = TRUE;
        }
        
        if (empty($_POST["question5"])) {
            $invalid5 = "Nog niet ingevuld";
            $q5bool = FALSE;
        } else {
            $question5 = $_POST["question5"];
            $q5bool = TRUE;
        }
        
        if (empty($_POST["question6"])) {
            $invalid6 = "Nog niet ingevuld";
            $q6bool = FALSE;
        } else {
            $question6 = $_POST["question6"];
            $q6bool = TRUE;
        }
        
        if (empty($_POST["question7"])) {
            $invalid7 = "Nog niet ingevuld";
            $q7bool = FALSE;
        } else {
            $question7 = $_POST["question7"];
            $q7bool = TRUE;
        }
        
        if (empty($_POST["question8"])) {
            $invalid8 = "Nog niet ingevuld";
            $q8bool = FALSE;
        } else {
            $question8 = $_POST["question8"];
            $q8bool = TRUE;
        }
    }

    function switchSlide() {
        global $q1bool, $q2bool, $q3bool, $q4bool, $q5bool, $q6bool, $q7bool, $q8bool;      
        if ($q1bool == TRUE && $q2bool == TRUE && $q3bool == TRUE && $q4bool == TRUE && $q5bool == TRUE && $q6bool == TRUE && $q7bool == TRUE && $q8bool == TRUE) {
            $complete = TRUE;
        }  else {
            $complete = FALSE;
        }

        if ($complete) {
            ?>
            <script type="text/javascript">$('form').hide()</script>
            <?php
        } else {
            ?>
            <script type="text/javascript">$('p').hide()</script>
            <?php
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs</title>
    <link rel="stylesheet" href="style/madLibsStyle.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
</head>
<body>
    <header>
        <h1>Mad Libs</h1>
    </header>
    <main>
        <nav>
            <a href="madLibsPaniek.php">Er heerst paniek...</a></li>
            <a href="madLibsOnkunde.php">Onkunde</a></li>
        </nav>
        <h2>Er heerst paniek...</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-block">
            <label for="question1">Welk dier zou je nooit als huisdier willen hebben?</label>
            <input type="text" name="question1"><span><?php echo $invalid1;?></span><br><br>
            <label for="question2">Wie is de belangrijkste persoon in je leven?</label>
            <input type="text" name="question2"><span><?php echo $invalid2;?></span><br><br>
            <label for="question3">In welk land zou je graag willen wonen?</label>
            <input type="text" name="question3"><span><?php echo $invalid3;?></span><br><br>
            <label for="question4">Wat doe je als je je verveelt?</label>
            <input type="text" name="question4"><span><?php echo $invalid4;?></span><br><br>
            <label for="question5">Met welk speelgoed speelde je als kind het meest?</label>
            <input type="text" name="question5"><span><?php echo $invalid5;?></span><br><br>
            <label for="question6">Bij welk docent spijbel je het liefst?</label>
            <input type="text" name="question6"><span><?php echo $invalid6;?></span><br><br>
            <label for="question7">Als je €100.000,- had, wat zou je dan kopen?</label>
            <input type="text" name="question7"><span><?php echo $invalid7;?></span><br><br>
            <label for="question8">Wat is je favoriete bezigheid?</label>
            <input type="text" name="question8"><span><?php echo $invalid8;?></span><br><br>
            <button type="submit">verzenden</button>
        </form>
        <p>
            Er heerst paniek in het koninkrijk <?php echo htmlspecialchars($_POST["question3"]);?>. 
            Koning <?php echo htmlspecialchars($_POST["question6"]);?> is ten einde raad en als koning <?php echo htmlspecialchars($_POST["question6"]);?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo htmlspecialchars($_POST["question2"]);?><br><br>
            "<?php echo htmlspecialchars($_POST["question2"]);?>! Het is een ramp! Het is een schande!"<br><br>
            "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>
            "Mijn <?php echo htmlspecialchars($_POST["question1"]);?> is verdwenen! Zo maar zonder waarschuwing. En ik had net <?php echo htmlspecialchars($_POST["question5"]);?> voor hem gekocht!"<br><br>
            "Majesteit, uw <?php echo htmlspecialchars($_POST["question1"]);?> komt vast vanzelf weer terug?"<br><br>
            "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo htmlspecialchars($_POST["question8"]);?> leren?"<br><br>
            "Maar Sire, daar kunt u toch uw <?php echo htmlspecialchars($_POST["question7"]);?> voor gebruiken."<br><br>
            "<?php echo htmlspecialchars($_POST["question2"]);?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>
            "<?php echo htmlspecialchars($_POST["question4"]);?>, Sire."<br><br>
        </p>
    </main>
    <footer>

    </footer>
    <?php switchSlide()?>
</body>
</html>