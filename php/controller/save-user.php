<?php
    require_once(__DIR__ . "/../model/config.php");
    
    //taking the exp var and storing them as exp
    
    $exp = filter_input(INPUT_POST, "exp", FILTER_SANITIZE_STRING);
    $exp1 = filter_input(INPUT_POST, "exp1", FILTER_SANITIZE_STRING);
    $exp2 = filter_input(INPUT_POST, "exp2", FILTER_SANITIZE_STRING);
    $exp3 = filter_input(INPUT_POST, "exp3", FILTER_SANITIZE_STRING);
    $exp4 = filter_input(INPUT_POST, "exp4", FILTER_SANITIZE_STRING);

    //going to update the users table
    $query = $_SESSION["connection"]->query("UPDATE users SET "
            // . "combines things"
        . "exp = $exp, "
        . "exp1 = $exp1, "
        . "exp2 = $exp2, "
        . "exp3 = $exp3, "
        . "exp4 = $exp4, WHERE username = \"" .$_SESSION["name"]. "\"");
    
    if($query){
        echo "true";
    }else{
           echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }

    