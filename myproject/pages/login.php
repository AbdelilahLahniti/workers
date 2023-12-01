<?php
session_start();
include('./backend/con-db.php');
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $getLoginData = mysqli_query($dataBase, "SELECT * FROM worker WHERE email='$email' OR password='$password'");
    $datas = mysqli_fetch_assoc($getLoginData);

    if (isset($datas)) {
        if ($datas['email'] != $email) {
            $emailError = 'email incorrect';
        }
        if ($datas['password'] != $password) {
            $passwordError = 'password incorrect';
        }
        if ($datas['email'] == $email && $datas['password'] == $password) {
            $_SESSION['id'] = $datas['id'];
            
            header('Location:profile.php');
        }
    } else $bothError = 'Email and Password incorrect';
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
    <title>Log in</title>
</head>

<body>
    <form class="feed-form loginForm" action="" method="POST">
        <h1 class="text-center py-3 title">Log In</h1>
        <?php if (isset($bothError)) { ?>
            <div class="alert alert-danger text-center" role="alert">

                <?php echo $bothError; ?>
            </div>

        <?php } ?>
        <div>
            <input class="title1" name="email" placeholder="E-mail" type="email">
            <?php if (isset($emailError)) { ?>
                <label class="emailError text-danger">
                    <?php echo $emailError; ?>
                </label>
            <?php } ?>
        </div>

        <div>
            <input class="title2" name="password" placeholder="password" type="password">
            <?php if (isset($passwordError)) { ?>
                <label class="emailError text-danger">
                    <?php echo $passwordError; ?>
                </label>
            <?php } ?>
        </div>

        <button class="button_submit title1" name="login">Login</button>
        <a href="./register.php" class="mt-3 text-black ms-auto">Create an account</a>
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