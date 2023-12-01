<?php
session_start();
include('con-db.php');
$id = $_SESSION['id'];
$getDescription = mysqli_query($dataBase, "SELECT description FROM worker WHERE id='$id'");
$description = mysqli_fetch_assoc($getDescription);
if (isset($_POST['submit'])) {
    $description = $_POST['description'];
    $addDescription = mysqli_query($dataBase, "UPDATE worker SET description='$description' WHERE id='$id'");
    if ($addDescription) {
        header('Location:../profile.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../css/forms.css">
    <title>Edit description</title>
</head>

<body>
   
    <form method="post" class="feed-form loginForm gap-3" enctype="multipart/form-data">
    <h1 class="text-center py-3 title">My description</h1>
        <textarea name="description" id="" class="p-3 title 1"><?php echo $description['description'] ?></textarea>
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