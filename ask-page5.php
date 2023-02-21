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
    <title>HS | Question 5</title>
</head>
<body>
<?php include './Ressources/header.php' ?>
       
       <h1 class="h1-content">Personal Health Survey</h1>
     
        <form action="ask-page6.php" method="post"onsubmit= " return validateRange();">
                <div class="content-1">
                         <div>
                             <p>Hast du das Gefühl, zu wenig, genügend
                                                            oder viel zu viel zusätzliche körperliche
                                                        Aktivitäten zu betreiben?</p>
                         </div>
                         <div class="range-wrap" style="width: 25%;">
                               <input type="range" class="range" min="0" max="5" step="1" name="res5" id="range-slider" onchange="sliderChanged();">
                                    
                                 <input type="hidden" name="lastPageID" value="ask-page5">
                                 <input type="hidden" name="range-slider-changed" id="range-slider-changed" class="form-range">
                                    
                               <input type="hidden" name="lastPageID" value="ask-page5">
                               <br/>
                              <p id="validation-warning" class="warning text-danger w-100"></p>
                                   
                              <button type="submit" class="next1  btn-primary ">Next</button>
                         </div>
                </div>
        </form>

        
        <?php include './Ressources/footer.php' ?>    
        <script src="./script/validation.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>