<?php
try{
    $bd = new mysqli('localhost', 'root', '', 'carolinaspa');
} catch(Exception $e){
    echo $e->getMessage();
    exit;
}



?>