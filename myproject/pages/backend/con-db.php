<?php
$dataBase=mysqli_connect("localhost","root","","workers");

if(!isset($dataBase)){
   die('error:no connection with data base');
}
