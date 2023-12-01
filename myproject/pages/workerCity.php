<?php


include('./backend/con-db.php');
$city = $_GET['city'];

$getCities = mysqli_query($dataBase, "SELECT DISTINCT city FROM worker");
$getSpecialty = mysqli_query($dataBase, "SELECT DISTINCT specialty FROM worker WHERE city='$city'");
$getData = mysqli_query($dataBase, "SELECT * FROM worker WHERE city='$city'");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/worker.css">
    <link rel="stylesheet" href="./Header/header.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Workers of <?php echo $city ?>
    </title>
</head>

<body>
    <?php
    require_once('./Header/header.php')
    ?>
    <!--start show workers -->
    <div class="container-fluid row">
        <aside class="col-2">
            <nav class="navbar navbar-expand-md menuAside position-fixed">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupported" aria-controls="navbarSupported" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fa-solid fa-list"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupported">
                    <ul class="list-unstyled">
                        <li class="py-2">
                            <h3 class="fs-4">Categories</h3>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active py-2" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                city
                            </a>
                            <ul class="dropdown-menu position-relative" aria-labelledby="navbarDropdown">
                                <?php
                                while ($row = mysqli_fetch_assoc($getCities)) {
                                ?>
                                    <li><a class="dropdown-item" id='city' href="workerCity.php?city=<?php echo $row['city'] ?>"> <?php echo $row['city'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active py-2" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php
                                while ($row = mysqli_fetch_assoc($getSpecialty)) {
                                ?>
                                    <li><a class="dropdown-item" href="category.php?specialty=<?php echo $row['specialty'] ?>&& city=<?php echo $city ?>"> <?php echo $row['specialty'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </aside>
        <div class="container col-10 workers pt-2 pt-lg-0">
            <h1 class="text-center my-5 title"><?php echo $city ?></h1>
            <div class="row justify-content-lg-start  gap-3 gap-lg-0">
                <?php
                while ($r = mysqli_fetch_assoc($getData)) {
                ?>
                    <div id="worker" class="col-lg-6 blocks blockWorker mb-3">
                        <div class="worker d-flex p-2">
                            <img src="<?php echo empty($r['image']) ? 'https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1679418757~exp=1679419357~hmac=febcdda8b788af24d10e4dd93b3b6dada9cd339cfc6b9d73aa9fed63acc87cff' : 'images/' . $r['image']; ?>" alt="Profile image" alt="">
                            <div class="ms-3">
                                <h4><?php echo $r['specialty'] ?></h4>
                                <h6 class="mt-2"><?php echo $r['name'] ?></h6>
                                <span id="cities"><?php echo $r['city'] ?></span>
                                <p class="description mt-2  "><?php echo $r['description'] ?></p>
                                <a class="btn" href="./profileWorker.php?id=<?php echo $r['id'] ?>">see the profile</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!--end show workers -->


    <script src="https://kit.fontawesome.com/af48de5d51.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script>
        TweenMax.from(".title1", 1, {
            opacity: 0,
            delay: .6,
            x: -50,
            ease: Expo.easeInOut
        })
        TweenMax.from(".blocks", 1, {
            opacity: 0,
            delay: .6,
            y: 20,
            ease: Expo.easeInOut
        })
        TweenMax.from(".title", 1, {
            opacity: 0,
            delay: .6,
            y: -50,
            ease: Expo.easeInOut
        })
        TweenMax.from(".title2", 1.2, {
            opacity: 0,
            delay: .6,
            x: 50,
            ease: Expo.easeInOut
        })
        TweenMax.from(".btn", 1, {
            opacity: 0,
            delay: .7,
            y: 10,
            ease: Expo.easeInOut
        })
    </script>

</body>

</html>