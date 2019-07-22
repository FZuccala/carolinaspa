<?php
try{
    $bd = new mysqli('localhost', 'root', '', 'carolinaspa');
} catch(Exception $e){
    echo $e->getMessage();
    exit;
}

// if($bd->ping() ){
//     echo "todo bien";
// } else{
//     echo $bd->connect_error;
// }


?>