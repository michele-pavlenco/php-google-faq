<?php    
include 'database.php';
//var_dump($domande)



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Google faq</title>
</head>
<body>
    <nav>
        <div>
            <i class="fa-solid fa-bars"></i>
            <h2>Domande frequenti</h2>
        </div>
        <div>
        <i class="fa-solid fa-table-cells"></i>
        <i class="fa-solid fa-user"></i>
        </div>
    </nav>
    <main>
        <div>
            <?php foreach($domande as $key => $value) {

                echo " <h4> " . $value["domanda"] . "</h4> ";

                echo "<p> " . $value["risposta"] . " </p> ";
               

            } ?>
         </div>
    </main>
    
</body>
</html>