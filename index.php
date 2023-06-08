
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
        <div class="container py-5">
            <div> 
                <?php if($lunghezza >= 1){?>
                    <h2 class="alert alert-success" role="alert">Nuova password impostata.</h2><?php

                }
                else{?>
                    <h2 class="alert alert-warning" role="alert">Inserire una nuova password.</h2><?php
                }?>
            </div>
        </div>
        <div class="container py-5 bg-white">
            <div class="container py-3 d-flex justify-content-between">
                <label style="font-size: 2em;" for="input-pass">Lunghezza password:</label>
                <input type="number"  id="input-pass" name="lunghezza" >
            </div>
            <div class="container">
                <div>
                    <button type="submit">Invia</button>
                </div>
                <span><?php echo randomPassword($lunghezza)?></span>
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
        margin-top: 50px;
        color:white;
    }
    h2{
        text-align:center;
        margin-top: 20px;
        color:lightgrey;
    }



    input{
        width: 80px;
        text-align: center;
        font-size: 2em;
    }

    
    button{
        font-size: 2em;
        border-radius: 20px;
        padding: .2em;
        display: flex;
        align-content: center;
    }
</style>















