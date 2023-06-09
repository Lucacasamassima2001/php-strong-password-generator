
<?php

include   "./functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<form action="index.php" method="get">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
        <div class="container distance">
            <div> 
                <?php if(verifycheckbox() == true){?>
                    <h2 class="alert alert-success" role="alert">Nuova password impostata.</h2><?php
                }else{?> 
                    <h2 class="alert alert-danger" role="alert">Inserire una password valida.</h2><?php
                }?>           
            </div>
        </div>
        <div class="container py-5 bg-white">
            <div class="container py-3 d-flex justify-content-between">
                <label style="font-size: 2em;" for="input-pass">Lunghezza password:</label>
                <input type="number"  id="input-pass" name="lunghezza" >
            </div>
            <div class="container">
                <div class="checkboxes">
                    <!-- TO DO -->
                    <input type="checkbox" name="numeri[]" id="num" value="true"> Numeri <br>
                    <input type="checkbox" name="letters[]" id="letters" value="true"> Lettere <br>
                    <input type="checkbox" name="simbols[]" id="simbols" value="true"> Simboli <br>
                    <!-- <input type="checkbox" name="simboli[]" id="num" value="true"> Simboli
                    <input type="checkbox" name="lettere[]" id="num" value="true"> Lettere -->
                    <div class="button-container">
                        <button type="submit">Invia</button>
                    </div>
                </div>
                <h3>La tua nuova password:</h3>
                <span><?php if(verifycheckbox() == true){
                    echo randomPassword($lunghezza)?></span><?php
                }else{?>
                    <?php
                }?>
            </div>
            
        </div>
    </form>
</body>
</html>


<style>

    
    body{
        background-color: rgba(55, 55, 134, 1);
    }
    
    h1{
        text-align:center;
        margin-top: 20px;
        color:white;
    }
    h2{
        text-align:center;
        margin-top: 20px;
        color:lightgrey;
    }
    
    h3{
        margin-top: 1em;
    }
    
    .checkboxes{
        font-size: 1.5em;
    }
    input{
        width: 80px;
        text-align: center;
        font-size: 2em;
    }


    
    .button-container{
        display: flex;
        justify-content: flex-end;
    }
    button{
        font-size: 1em;
        margin-top: 1em;
        margin-right: .3em;
        border-radius: 20px;
        padding: .3em;
        display: flex;
        align-content: center;
    }


    
    .distance{
        margin-bottom: 50px;
    }


</style>















