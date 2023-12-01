<?php

include('con-db.php');
$id = $_SESSION['id'];
$profileData = mysqli_query($dataBase, "SELECT * FROM worker WHERE id='$id'");
$profileDatas = mysqli_fetch_assoc($profileData);
