<?php
session_start();
$id = $_SESSION['id'];
include('./con-db.php');

$getData = mysqli_query($dataBase, "SELECT * FROM worker WHERE id='$id'");
$data = mysqli_fetch_assoc($getData);
if (isset($_POST['edit'])) {


    if (empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['city']) || empty($_POST['specialty']) || empty($_POST['password'])) {
        $message = 'you must fill all information';
    } else {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $specialty = $_POST['specialty'];
        $password = $_POST['password'];
        $getEmails = mysqli_query($dataBase, "SELECT * FROM worker WHERE email='$email'");
        $getEmail = mysqli_fetch_assoc($getEmails);
        if (isset($getEmail) && $email != $data['email']) {
            $emailCheck = 'the email already exist';
        } else {
            $add = mysqli_query($dataBase, "UPDATE worker SET name='$name',phone='$phone',email='$email',city='$city',specialty='$specialty',password='$password' WHERE id='$id'");
            header('Location:../profile.php');
        }
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
    
    <form class="feed-form" action="" method="POST"> 
    <h1 class="text-center py-3 title">My information</h1>    
    <?php if (isset($message)) { ?>
            <div class="alert alert-danger text-center" role="alert">
                <?php echo $message ?>
            </div>

        <?php } ?>
        <div class="d-flex flex-wrap">

            <div class="title1"><input name="name" type="text" placeholder="Name" value="<?= $data['name'] ?>"></div>
            <div class="title2"> <input name="phone" type="text" placeholder="Phone number" value="<?= $data['phone'] ?>"></div>
            <div class="email title1">
                <input name="email" placeholder="E-mail" type="email" value="<?= $data['email'] ?>">
                <?php if (isset($emailCheck)) { ?>
                    <p class="emailError text-danger">
                        <?php echo $emailCheck; ?>
                    </p>
                <?php } ?>
            </div>

            <div class="title2"><input name="city" placeholder="City" type="text" value="<?= $data['city'] ?>"></div>
            <div class="title1"> <input name="specialty" placeholder="your specialty" type="text" value="<?= $data['specialty'] ?>"></div>
            <div class="title2"><input name="password" placeholder="password" type="password" value="<?= $data['password'] ?>"></div>
        </div>
        
        <div class="d-flex gap-2">
            <a class="button_submit text-decoration-none title1" href="../profile.php">cancel</a>
            <button class="button_submit bg-primary title2" name="edit">save</button>
        </div>
    </form>
    <script src="../../js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>