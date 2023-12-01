<?php
session_start();
$id = $_SESSION['id'];

include('con-db.php');


if (isset($_POST["submit"])) {
  $imageName = $_FILES['image']['name'];
  $tpmName = $_FILES['image']['tmp_name'];
  $time = time();
  $imageNewName = $time . $imageName;
  $moveImage = move_uploaded_file($tpmName, '../images/' . $imageNewName);

  if ($moveImage) {
    $addImage = mysqli_query($dataBase, "UPDATE worker SET image='$imageNewName' WHERE id='$id'");
    if ($addImage) {
      header('Location:../profile.php');
    }
  }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../css/forms.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <form class="feed-form loginForm gap-3" method="post" enctype="multipart/form-data">
  <h1 class="text-center py-3 title">My photo</h1>
    <input class="addimg title1" type="file" name="image">
    <div class="d-flex gap-2">
      <a class="button_submit text-decoration-none title1" href="../profile.php">cancel</a>
      <button class="button_submit bg-primary title2" name="submit">save</button>
    </div>
  </form>
  <script src="../../js/index.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

</html>