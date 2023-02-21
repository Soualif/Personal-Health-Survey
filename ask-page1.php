<?php

session_start();
include './Ressources/tools.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="./images/logo.jpg" type="image/x-icon">  <link rel="stylesheet" href="./style/style.css">
  <title>HS | Question 1</title>
</head>

<body>

  <div class="main-content">
    <?php include './Ressources/header.php' ?>
    <form action="ask-page2.php" method="post" onsubmit=" return validateRange();">

      <h1 class="h1-content">Personal Health Survey</h1>

      <div class="content-1">

        <p>Wie gesund bist du körperlich?</p>
        <br/>
        <p id="validation-warning" class="warning text-danger w-100"></p>


        <div class="range-wrap" style="width: 25%;">
          <input type="range" class="range" min="0" max="5" step="1" name="res1" id="range-slider" onchange="sliderChanged();">

          <input type="hidden" name="lastPageID" value="ask-page1">
          <input type="hidden" name="range-slider-changed" id="range-slider-changed" class="form-range">
        </div>
      </div>
      <button type="submit" class="next1 btn-primary">Next</button>
    </form>
  </div>
  <?php include './Ressources/footer.php' ?>
  <script src="./script/validation.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>



