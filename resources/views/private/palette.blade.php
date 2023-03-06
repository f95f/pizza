<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A</title>
    <style>
        main{   display: flex;  }
        div{    
            width: 100px; height: 100px;
            margin: 1rem;
            box-shadow: 1px 1px 5px #3B4D2588;
            font-family: 'Courier New', Courier, monospace;
            font-size: 2em;
            text-align: center;
            line-height: 100px;
        }
        #cor1{  
            background-color: #1A100E;
            color:#F39220;
        }
        #cor2{  
            background-color: #3B4D25;
            color:#F2F2F4;
        }
        #cor3{  background-color: #C14325; color:#F2F2F4;}
        #cor4{  background-color: #F39220; color:#1A100E;}
        #cor5{  background-color: #F2F2F4; color:#3B4D25;}
        </style>
</head>
<body>
    <main>
        <?php
            for($i = 0; $i < 5; $i++){
                echo "<div id = 'cor". $i + 1 ."'>". $i + 1 ."</div>";
            }
        ?>
        </main>
</body>
</html>