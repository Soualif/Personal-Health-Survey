<?php
 session_start();

 include 'tools.php';

if (isset($_POST["lastPageID"]))
{
 $lastPageID = $_POST["lastPageID"];

 //Speichre alle Daten des letzten  Posts mit den Namen $lastPageID in der session.
 $_SESSION["$lastPageID"] = $_POST;
 
}

///prettyPrint($_SESSION);
 ?>


