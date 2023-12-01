<?php

include('./backend/con-db.php');


if (isset($_POST['register'])) {


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
        if (isset($getEmail)) {
            $emailCheck = 'the email already exist';
        } else {
            $add = mysqli_query($dataBase, "INSERT INTO worker (name , phone , email , city , specialty , password) VALUE ('$name','$phone','$email','$city','$specialty','$password')");
            header('Location:login.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/forms.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form class="feed-form" action="" method="POST">
        <h1 class="text-center py-3 title">Create a profile</h1>
        <?php if (isset($message)) {
        ?>
            <div class="alert alert-danger text-center title1" role="alert">
                <?php echo $message ?>
            </div>

        <?php } ?>
        <div class="d-flex flex-wrap">

            <div class="title1"><input name="name" type="text" placeholder="Full Name"></div>
            <div class="title2"> <input name="phone" type="text" placeholder="Phone number"></div>
            <div class="email title1">
                <input name="email" placeholder="E-mail" type="email">
                <?php if (isset($emailCheck)) { ?>
                    <p class="emailError text-danger">
                        <?php echo $emailCheck; ?>
                    </p>
                <?php } ?>
            </div>

            <div class="title2"><input name="city" placeholder="City" type="text"></div>
            <div class="title1"> <input name="specialty" autocomplete="off" placeholder="Your specialty" type="text"></div>
            <div class="title2"><input name="password" placeholder="Password" type="password"></div>
        </div>
        <button class="button_submit btn" name="register">Register</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
     
        <script>
        TweenMax.from("form", 1, {
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
        })
        TweenMax.from(".title1", 1.2, {
            opacity: 0,
            x: -50,
            ease: Expo.easeInOut
        })
        TweenMax.from(".title", 1.2, {
            opacity: 0,
            y: -50,
            ease: Expo.easeInOut
        })
        TweenMax.from(".title2", 1.2, {
            opacity: 0,
            
            x: 50,
            ease: Expo.easeInOut
        })
        TweenMax.from(".btn", 1.3, {
            opacity: 0,
            delay: .1,
            y: 10,
            ease: Expo.easeInOut
        })
    </script>
</body>

</html>