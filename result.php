<?php
include './Ressources/data-collector.php';
include './Ressources/footer.php';
include './Ressources/umfrage.php';
include './Ressources/header.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/resultPage.css">
    <link rel="shortcut icon" href="./images/logo.jpg" type="image/x-icon">
    <title> HS | Result</title>
    
</head>

<body>
    <main class="cont-res">
        <h1 class="h1-content text-center">Personal Health Survey</h1>
        <h1>Resultät
        <img src="" class="img-heart">
        </h1>
        <a href="home.php"><button type="button" class="btn btn-primary">Go to Home</button></a>
        <button type="button" class="btn btn-success">Save as .PDF</button>
        <table class="result">
            <thead>
                <tr>
                  <th scope="col" class="text-center">#</th>
                  <th scope="col" class="text-center">Frage</th>
                  <th scope="col" class="text-center">Antwort</th>
                </tr>
            </thead>
            </tbdoy>
            <?php
                $checked = $_SESSION["ask-page4"]['checkbox'];
                    $i = 1;
                    for($q = 0; $q < sizeof($_SESSION); $q++){
                        if($q === 3){
                            echo 
                            "<tr>
                                <th scope='row' class='table-count text-center'>".$i."</th>
                                <td class='table-frage'>- ".$questions[$q]."</td>
                                <td class='table-antwort'>
                                    ";
                                    for($x = 0; $x < sizeof($checked); $x++){
                                        echo
                                        "<p class='list'>".$checked[$x]."</p>";
                                    }
                                    "
                                </td>
                            </tr>"; 
                        } else {
                            echo 
                            "<tr>
                                <th scope='row' class='table-count text-center'>".$i."</th>
                                <td class='table-frage'>- ".$questions[$q]."</td>
                                <td class='table-antwort'>".$_SESSION["ask-page".$i]["res".$i]."</td>
                            </tr>";
                            
                        }
                        $i++;
                    }
                ?>
            </tbody>
        </table>
        <div>
            <h2>Unsere Tipp:</h2>
        <?php
        include './Ressources/condition.php';
        if($tipp < 7){
            echo "<p class='bad'>Dein Gesund ist schlecht. Bitte kontaktieren Ihre Hausartz schnell als möglich.</p>";
        }elseif($tipp < 9){
            echo "<p class='normal' >Sie sind gut, versuchen Täglich Sport machen.</p>";
        }else{
            echo "<p class='good'>Sie sind ziemlich gut, bleiben so.</p>";
        }
        ?>
        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>