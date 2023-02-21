<?php
//dession_destroy();
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
    <link rel="stylesheet" href="./style/style.css">
    <title> HS | Home</title>
</head>

<body>


    <div class="main-content">
        <?php include './Ressources/header.php' ?>

        <form action="ask-page1.php" method="post" onsubmit=" return validateRange();">

        
             <div class="home-text m-auto"><p>The 2022 Food and Health Survey marks the 17th consecutive yearnthe International Food Information Council
                (IFIC)<br>has surveyed Americans to understand their perceptions, beliefs, and behaviorssurrounding food-purchasing ecisions.<br>
                 This year’s survey continues an examination of issues related to personal
                health, nutrition, eating patterns, and food safety.<br> In this article, we’re taking a closer
                look atthe findings related to food behaviors-including snacking, mindful eating,<br>and specific diets and eating patterns.</p>
             </div>
             <button type="submit" class="survey btn-primary m-auto mt-5">To Survey</button>
    </form>
    </div>
    <?php include './Ressources/footer.php' ?>
    <script src="./script/validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>