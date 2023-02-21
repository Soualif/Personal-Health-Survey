<?php
include './Ressources/data-collector.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="shortcut icon" href="./images/logo.jpg" type="image/x-icon">  <link rel="stylesheet" href="./style/style.css">
   <link rel="stylesheet" href="./style/style.css">
   <title>HS | Question 2</title>
</head>

<body>
    <?php include './Ressources/header.php' ?>

   <h1 class="h1-content">Personal Health Survey</h1>

   <form method="post" action="ask-page3.php" onsubmit="return validateRadios();">
      <div class="content-1">
         <p>Nimmst du Nahrungsergänzungsmittel?</p>

         <div class="radio-container">
            <div>
               <input type="radio" name="res2" id="single-choice-0" value="Nein" class="resNein">
               <label class="form-check-label" for="single-choice-0">Nein</label>
            </div>

            <div>
               <input type="radio" name="res2" id="single-choice-1" value="Ja" class="resJa">
               <label class="form-check-label" for="single-choice-1">Ja</label>
            </div>
         </div>

         <input type="hidden" name="lastPageID" value="ask-page2">
         <br/>
         <p id="validation-warning" class="warning"></p>
         <button type="submit" class="next1  btn-primary ">Next</button>
      </div>
   </form>

   <?php include './Ressources/footer.php' ?>
   <script src="./script/validation.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>