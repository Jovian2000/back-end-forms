<?php header('content-type: text/css;');
    $name = file_get_contents() 
?>

* {
    font-family: Arial, Helvetica, sans-serif;
}

body {
    display: grid;
    align-items: center;
    justify-content: center;

    /* display: flex;
    align-items: center;
    justify-content: center; */
}

.form-block {
    border: 1px solid black;
    border-radius: 5px;
    padding: 15px; 
    margin-top: 50px;
}

label {
    margin: 10px   
}

input {
    margin: 10px;
}

span {
    color:red;
}
