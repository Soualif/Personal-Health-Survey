<?php
    $frage1 = $_SESSION['ask-page1']['res1'];
    $frage2 = $_SESSION['ask-page2']['res2'];
    $frage3 = $_SESSION['ask-page3']['res3'];
    $frage4 = $_SESSION['ask-page4']['checkbox'];
    $frage5 = $_SESSION['ask-page5']['res5'];
    $frage6 = $_SESSION['ask-page6']['res6'];
    $frage7 = $_SESSION['ask-page7']['res7'];
    $frage8 = $_SESSION['ask-page8']['res8'];
    $frage9 = $_SESSION['ask-page9']['res9'];
    $frage10 = $_SESSION['ask-page10']['res10'];
    $good = 0;
    $normal = 0;
    $bad = 0;

    //---------------------------Frage#1
    if($frage1 < 3){
        $bad++;
    }else if($frage1 < 5){
        $normal++;
    }else{
        $good++;
    }

    //---------------------------Frage#2
    if($frage2 === "Ja"){
        $bad++;
    }else{
        $good++;
    }

    //---------------------------Frage#3
    if($frage3 < 3){
        $bad++;
    }else if($frage3 < 5){
        $normal++;
    }else{
        $good++;
    }

    //---------------------------Frage#4
    if(sizeof($frage4) < 2){
        $bad++;
    }else if(sizeof($frage4) > 2 && sizeof($frage4) < 3){
        $normal++;
    }else{
        $good++;
    }

    //---------------------------Frage#5


    //---------------------------Frage#6
    if($frage6 > 3){
        $bad++;
    }else if($frage6 > 1){
        $normal++;
    }else{
        $good++;
    }

    //---------------------------Frage#7


    //---------------------------Frage#8
    if($frage8 === 1){
        $bad++;
    }else if($frage8 < 4){
        $normal++;
    }else{
        $good++;
    }

    //---------------------------Frage#9
    if($frage9 === 1){
        $bad++;
    }else if($frage9 < 4){
        $normal++;
    }else{
        $good++;
    }

    //---------------------------Frage#10
    if($frage10 > 3){
        $bad++;
    }else if($frage10 > 1){
        $normal++;
    }else{
        $good++;
    }


    //---------------------------Prozesse
    $tipp = sizeof($_SESSION) - $bad;
?>