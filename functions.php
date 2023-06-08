<?php

// LOGICA PER GENERARE LA PASSWORD

function randomPassword($length) {
    $caratterirandom = ("bahgababaBFABGAIBASIBP235326591+èù§%£");
    $nuovapassword = '';
    
    for($i = 0; $i < $length; $i++ ){
        $nuovapassword .= $caratterirandom[random_int(0 , strlen($caratterirandom) - 1)];
        // var_dump($nuovapassword);
    }
    return $nuovapassword;
}


// LOGICA PER MOSTRARE IL RISULTATO
if(isset($_GET['lunghezza'])){

    $lunghezza = $_GET['lunghezza'];

}else{

    $lunghezza = "";

}

?>