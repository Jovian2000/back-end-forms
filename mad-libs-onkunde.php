<?php
    $question1 = $question2 = $question3 = $question4 = $question5 = $question6 = $question7 = '';
    $invalid1 = $invalid2 = $invalid3 = $invalid4 = $invalid5 = $invalid6 = $invalid7 = ''; 
    $q1bool = $q2bool = $q3bool = $q4bool = $q5bool = $q6bool = $q7bool = FALSE;

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
        
    }

    function switchSlide() {
        global $q1bool, $q2bool, $q3bool, $q4bool, $q5bool, $q6bool, $q7bool;      
        if ($q1bool == TRUE && $q2bool == TRUE && $q3bool == TRUE && $q4bool == TRUE && $q5bool == TRUE && $q6bool == TRUE && $q7bool == TRUE) {
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
    <link rel="stylesheet" href="style/mad-libs-style.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
</head>
<body>
    <header>
        <h1>Mad Libs</h1>
    </header>
    <main>
        <nav>
            <a href="mad-libs-paniek.php">Er heerst paniek...</a></li>
            <a href="mad-libs-onkunde.php">Onkunde</a></li>
        </nav>
        <h2>Onkunde</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-block">
            <label for="question1">Wat zou je graag willen kunnen?</label>
            <input type="text" name="question1"><span><?php echo $invalid1;?></span><br><br>
            <label for="question2">Met welk persoon kun je goed opschieten?</label>
            <input type="text" name="question2"><span><?php echo $invalid2;?></span><br><br>
            <label for="question3">Wat is je favoriete getal?</label>
            <input type="text" name="question3"><span><?php echo $invalid3;?></span><br><br>
            <label for="question4">Wat heb je altijd bij je als je op vakantie gaat?</label>
            <input type="text" name="question4"><span><?php echo $invalid4;?></span><br><br>
            <label for="question5">Wat is je beste persoonlijke eigenschap?</label>
            <input type="text" name="question5"><span><?php echo $invalid5;?></span><br><br>
            <label for="question6">Wat is je slechste persoonlijke eigenschap?</label>
            <input type="text" name="question6"><span><?php echo $invalid6;?></span><br><br>
            <label for="question7">Wat is het ergste dat je kan overkomen?</label>
            <input type="text" name="question7"><span><?php echo $invalid7;?></span><br><br>
            <button type="submit">verzenden</button>
        </form>
        <div class="text-block">
            <p>
                Er zijn vele mensen die niet kunnen <?php echo htmlspecialchars($_POST["question1"]);?>. Neem nou <?php echo htmlspecialchars($_POST["question2"]);?>. Zelfs met de hulp 
                van een <?php echo htmlspecialchars($_POST["question4"]);?> of zelfs <?php echo htmlspecialchars($_POST["question3"]);?> kan <?php echo htmlspecialchars($_POST["question2"]);?> 
                niet <?php echo htmlspecialchars($_POST["question1"]);?>. Dat heeft niet te maken met een gebrek aan <?php echo htmlspecialchars($_POST["question5"]);?>, maar met een te veel 
                van <?php echo htmlspecialchars($_POST["question6"]);?>. Te veel <?php echo htmlspecialchars($_POST["question6"]);?> leidt tot <?php echo htmlspecialchars($_POST["question7"]);?> 
                en dat is niet goed als je wilt <?php echo htmlspecialchars($_POST["question1"]);?>. Helaas voor <?php echo htmlspecialchars($_POST["question2"]);?>. 
        </p>
        <div class="text-block">
    </main>
    <footer>
        ©Jovian 2023
    </footer>
    <?php switchSlide()?>
</body>
</html>
