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
  <title>HS | Question 4</title>
</head>

<body>
<?php include './Ressources/header.php' ?>
          
         <h1 class="h1-content">Personal Health Survey</h1>

  <form method="post" action="ask-page5.php" id=checkbox onsubmit="return validateCheck();">
          <div class="content-1">
              <p>Welche zusätzliche körperliche Aktivität
                betreibst du am meisten?</p><br>
          </div>
             
          <div class="check-content">
                  <div class="me-5">
                    <div class="cont-check">
                    <label class="container" for="op1">Keine zusätzliche körperliche Aktivität</label>
                      <input type="checkbox" name="checkbox[]" id="op1"  value=" Keine zusätzliche körperliche Aktivität">
                      
                    </div>
                    
              
                    <div class="cont-check">
                    <label class="container" for="op2">Gewichte heben</label>
                      <input type="checkbox" name="checkbox[]" value="Gewichte heben" id="op2">
                
                    </div>
                    
              
                    <div class="cont-check">
                    <label class="container" for="op3">Gehen</label>
                      <input type="checkbox" name="checkbox[]" value="Gehen" id="op3" >
                   
                    </div>
                   
                  </div>
        
                  <div class="mx-5">
                      <div class="cont-check">
                      <label class="container" for="op4">Wandern</label>
                        <input type="checkbox" name="checkbox[]" value="Wandern" id="op4" >
                       
                      </div>
                      
              
                      <div class="cont-check">
                      <label class="container" for="op5">Joggen</label>
                        <input type="checkbox" name="checkbox[]" value="Joggen" id="op5">
                    
                      </div>
                      
              
                      <div class="cont-check">
                      <label class="container " for="op6">Rennen</label>
                        <input type="checkbox" name="checkbox[]" value="Rennen" id="op6" >
                      
                      </div>
                      
                  </div>
        
                  <div class="mx-5">
                     <div class="cont-check">
                     <label class="container" for="op7">Schwimmen</label>
                           <input type="checkbox" name="checkbox[]" value="Schwimmen"id="op7" >
                      
                     </div>
                     
              
                     <div class="cont-check">
                     <label class="container" for="op8">Four</label>
                           <input type="checkbox" name="checkbox[]" value="Four" id="op8">
                     
                     </div>
                     
                     <div class="cont-check">
                     <label class="container" for="op9">Tanzen</label>
                          <input type="checkbox" name="checkbox[]" value="Tanzen" id="op9">
                  
                     </div>
                     
                  </div>
               
                  <div class="mx-5">
                      <div class="cont-check">
                      <label class="container" for="op10">Aerobics</label>
                             <input type="checkbox" name="checkbox[]" value="Aerobics" id="op10">
                    
                      </div>
                      
                
                      <div class="cont-check">
                      <label class="container" for="op11">Pilates</label>
                           <input type="checkbox" name="checkbox[]" value="Pilates" id="op11">
                     
                      </div>
                      
                
                      <div class="cont-check">
                      <label class="container" for="op12">Team Sport</label>
                            <input type="checkbox" name="checkbox[]" value="Team Sport" id="op12">
                   
                      </div>
                      
                  </div>
                        <input type="hidden" name="lastPageID" value="ask-page4">
                        <br>
                        <p id="validation-warning" class="warning text-danger w-100"></p>
          </div>

                  <button type="submit" class="btn  btn-primary m-auto">Next</button>
                    
  </form>
                           
         <?php include './Ressources/footer.php' ?>
         <script src="./script/validation.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>