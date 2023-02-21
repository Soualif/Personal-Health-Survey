

<?php
function prettyPrint($a)
{
    echo '<pre>';
    print_r($a);
    echo '</pre>';
}

//Hole de Namen der letzten Seite aus $_POST 2lastPage
if (isset($_POST["lastPageID"])) {
    $lastPageID = $_POST["lastPageID"];

    //Speichre alle Daten des letzten  Posts mit den Namen $lastPageID in der session.
    $_SESSION["$lastPageID"] = $_POST;
}
?>


