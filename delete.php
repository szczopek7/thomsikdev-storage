<?php

//Dołącz plik system.php zawierający połączenia z bazą danych w zmiennej $connect;
require ('app/system.php');


//Check if the passed get is an int
if(filter_var($_GET['id'], FILTER_VALIDATE_INT) !== false){

    // GET to variable
    $id = $_GET['id'];

    // SQL query that deletes a record
    $deleteSQL = "DELETE FROM storage WHERE id = $id";

    // Execution of the SQL query
    if($connect->query($deleteSQL)){
        header("Location: index.php");
    }else{
        // @todo: Komunikat że nie  udało się usunąć;
        header("Location: index.php");
    }

}else{

    die();

}


?>
