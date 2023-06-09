<?php
// TO DO
// isset($_GET['lettere']);
// isset($_GET['numeri']);



// LOGICA PER GENERARE LA PASSWORD

function randomPassword($length) {
    $numbers = isset($_GET['numeri']) ? $_GET['numeri'] : '';
    $letters = isset($_GET['letters']) ? $_GET['letters'] : '';
    $simbols = isset($_GET['simbols']) ? $_GET['simbols'] : '';

    $arrnumbers = '0123456789';
    $arrletters = 'abcdefghilmnopqrstuvz';
    $arrsimbols = '£$%&';
    $nuovapassword = '';
    $caratterirandom = '';
    
    if($numbers == true){
        $caratterirandom .= $arrnumbers;
    };
    if($letters == true){
        $caratterirandom .= $arrletters;
    };
    if($simbols == true){
        $caratterirandom .= $arrsimbols;
        
    };
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

// <!-- VERIFICO CHE LE CHECKBOX SIANO ATTIVATE -->


function verifycheckbox(){
    $numbers = isset($_GET['numeri']) ? $_GET['numeri'] : '';
    $letters = isset($_GET['letters']) ? $_GET['letters'] : '';
    $simbols = isset($_GET['simbols']) ? $_GET['simbols'] : '';
    $checkbox = false;
    if($numbers == true || $letters == true || $simbols == true){
        $checkbox = true;
        return $checkbox;
        
    }else{
        $checkbox = false;
        return $checkbox;
    }
}











?>


