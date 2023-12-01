<?php

include('con-db.php');


    $getData=mysqli_query($dataBase,"SELECT * FROM worker");
    $getDatas=mysqli_fetch_assoc($getData);


