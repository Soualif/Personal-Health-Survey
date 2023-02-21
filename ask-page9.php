<?php include './Ressources/data-collector.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logo.jpg" type="image/x-icon">  <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/style.css">
    <title>HS | Question 9</title>
</head>

<body>
    
    <?php include './Ressources/header.php' ?>
    
    <form action="ask-page10.php" method="post" onsubmit=" return validateNumber();">
    <h1 class="h1-content">Personal Health Survey</h1>


        <div class="content-1">
            <div>
                <p>An einem typischen Tag:<br> Wie viele deiner
                    Malzeiten oder Snacks enthalten Früchte?</p>
            </div>
            <div>
                <input class="input-number" type="number" id="input-number" name="res9" min="1" 
                max="10" onchange="numberChanged();" autofocus>
            </div>

            <input type="hidden" name="lastPageID" value="ask-page9">
            <input type="hidden" name="input-number-changed" id="input-number-changed" class="form-range">
            <br/>
            <p id="validation-warning" class="warning text-danger w-100"></p>

            <button type="submit" class="next1  btn-primary ">Next</button>
        </div>

    </form>
          <?php include './Ressources/footer.php' ?>
          <script src="./script/validation.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>