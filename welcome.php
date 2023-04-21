<?php
    $nameErr = $emailErr = "";
    $name = $email = "";
    $completeForm = FALSE;
    $nameBool = FALSE;
    $emailBool = FALSE;
    $displayFormOn = "<style> .form-block{display: flex;} .form-done-block{display: none;} </style>";
    $displayFormOff = "<style> .form-block{display: none;} .form-done-block{display: flex;} </style>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } else {
          $name = $_POST["name"];
          $nameBool = TRUE;
        }
        
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } else {
          $email = $_POST["email"]; 
          $emailBool = TRUE;
        }
    }

    function done() {
        global $nameBool, $emailBool, $completeForm ;
        if ($nameBool == TRUE && $emailBool == TRUE) {
            $completeForm = TRUE;
        }
        if ($completeForm) {
            ?>
            <script type="text/javascript">$('.form-block').hide()</script>
            <?php
        } else {
            ?>
            <script type="text/javascript">$('.form-done-block').hide()</script>
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
    <title>Welcome</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
</head>
<body>
    <div class="form-block">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <span>* required field</span><br><br>
            <label for="name">Name:<span> * <?php echo $nameErr;?></span></label></br>
            <input type="text" name="name"></br>
            <label for="mail">E-mail:<span> * <?php echo $emailErr;?></span></label></br>
            <input type="email" name="email"></br>
            <button type="submit" onclick="done()">Submit</button>
        </form>
    </div>
    
    <div class="form-done-block">
        <h1>De ingevulde gegevens zijn:</h1>
            <p>Naam: <?php echo htmlspecialchars($_POST["name"]);?></p>
            <p>E-mail: <?php echo htmlspecialchars($_POST["email"]);?></p>
    </div>
        <?php done();?>
</body>
</html>

<!-- <script>alert('hoi')</script>   -->