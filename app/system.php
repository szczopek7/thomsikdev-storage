<?php

//Conifgure showing errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

//@todo: use .env
//Connect to Database
$connect = mysqli_connect('server_database','username', 'password', 'database','port');

//Check connection
if(!$connect){
    //Error message
    echo 'Nie ma połączenia z DB'.mysqli_connect_error();
}else{
    //If no any problem with connection
    //I leave as if something needed to be checked or configs
}