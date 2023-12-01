<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location:./login.php');
}
include('./backend/show.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="./Header/header.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>worker profile</title>
</head>

<body>
    <?php
    include('./Header/header.php');
    ?>
    <div class="container profile">

        <div class="top-profile bg-light">
            <!-- image background -->
            <div class="cover image">
                <img src="<?php echo empty($profileDatas['bgImage']) ? 'https://img.freepik.com/vecteurs-libre/conception-fond-abstrait-blanc_23-2148825582.jpg?w=900&t=st=1679417647~exp=1679418247~hmac=75a63ec7600960a01bfbe0a076e73c1987a9b8b21621315c76f34933977f5045' : 'images/' . $profileDatas['bgImage']; ?>" class="bgImage" alt="Cover Image">
                <a href="./backend/addBgImage.php" class="edit" title="Edit cover">
                    <i class="fa-regular fa-pen-to-square fa-xl"></i>
                </a>
            </div>
            <div class="d-flex information flex-wrap flex-md-nowrap">
                <!-- image of person -->
                <div class="profileImage image">
                    <img class="img-fluid personImage" src="<?php echo empty($profileDatas['image']) ? 'https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1679418757~exp=1679419357~hmac=febcdda8b788af24d10e4dd93b3b6dada9cd339cfc6b9d73aa9fed63acc87cff' : 'images/' . $profileDatas['image']; ?>" alt="Profile image">
                    <a href="./backend/addimage.php" class="edit">
                        <i class="fa-regular fa-pen-to-square fa-xl"></i>
                    </a>
                </div>
                <ul class="list-unstyled mx-5 my-3 text-capitalize">
                    <li class="personName mb-3">
                        <h3 class="text-uppercase text-break">
                            <?php echo $profileDatas['name'] ?>
                        </h3>
                        <span class=" text-break"><?php echo $profileDatas['specialty'] ?></span>
                    </li>
                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 fw-bold   text-break">position:</span><?php echo $profileDatas['specialty'] ?></li>
                    <li class="mb-2 mb-xl-3 display-28"><span class=" text-break display-26 text-secondary me-2 fw-bold">city:</span> <?php echo $profileDatas['city'] ?> </li>
                    <li class="mb-2 mb-xl-3 display-28 text-lowercase"><span class=" text-break display-26 text-secondary me-2 fw-bold">Email:</span> <?php echo $profileDatas['email'] ?></li>
                    <li class="display-28"><span class=" text-break display-26 text-secondary me-2 fw-bold">phone:</span> <?php echo $profileDatas['phone'] ?></li>
                </ul>
                <a href="./backend/editProfile.php" class="btn mt-2 btn-primary ms-auto mx-3 editProfile">Edit profile</a>
            </div>
        </div>
        <div class="blockDescription my-3 pt-3 bg-light">
            <div class="d-flex">
                <h3 class="ms-5">Know me more</h3>
                <a href="./backend/addDescription.php" class="btn btn-primary ms-auto mx-3">
                    <?php
                    if ($profileDatas['description'] == '') {
                        echo "Add description";
                    } else {
                        echo "Edit description";
                    }
                    ?>
                </a>
            </div>
            <p class="description p-3 ps-5 mt-3 text-break">
                <?php echo $profileDatas['description'] ?>
            </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/af48de5d51.js" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
</body>

</html>