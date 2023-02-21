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
    <title>HS | Question 3</title>
</head>
<body>
    
<?php include './Ressources/header.php' ?>
        
           <form action="ask-page4.php" method="post"onsubmit= " return validateRange();">
            
           <h1 class="h1-content">Personal Health Survey</h1>
     
     
                   <div class="content-1 w-100">
                       <div>
                           <p>Wie wichtig ist köperliche Aktivität für dich?</p>
                       </div>
                       <div class="range-wrap w-100">
                             <input type="range" class="range w-25 m-auto" min="0" max="5" step="1" name="res3" id="range-slider" onchange="sliderChanged();">
                                  
                               <input type="hidden" name="lastPageID" value="ask-page3">
                               <input type="hidden" name="range-slider-changed" id="range-slider-changed" class="form-range">
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