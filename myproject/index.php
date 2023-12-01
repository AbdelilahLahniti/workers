<!DOCTYPE html>
<html lang="en">

<head>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./pages/Header/header.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twiri project</title>
</head>

<body>

    <?php
    session_start();
    require_once('./pages/Header/header.php')
    ?>



    <!-- start home -->

    <section id="home" class="home container-fluid">
    <div class="row">
            <div class="col blocks">
                <h1 class="title1">here you can find your helper</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque obcaecati facilis rerum eligendi
                    aspernatur fugit libero dignissimos nam, voluptatibus maxime!</p>
                <a class="btn mt-3" href="./pages/workers.php">find helper</a>
            </div>

            <div class="col blocks">
                <h1 class="title2">are you a worker?</h1>
                <h3>here you can offer your services and your skills !</h3>
                <a class="btn mt-3" href="./pages/login.php">Log in</a>
            </div>
        </div>
    </section>



    <!-- end home -->

    <!-- start about -->
    <section id="about" class="">
        <div class="container my-5">
            <h1 class="text-center py-5">about the website</h1>
            <div class="row gap-5">
                <div class="col needing">
                    <h4>how to use the website as who is looking for helper</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, itaque libero odit officia eveniet
                        eius
                        maiores, porro suscipit ipsa facilis laborum molestiae cumque ipsum vel! Natus eaque ab neque
                        obcaecati.
                    </p>
                </div>
                <div class="col needing">
                    <h4>how to use the website as a worker</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, itaque libero odit officia eveniet
                        eius
                        maiores, porro suscipit ipsa facilis laborum molestiae cumque ipsum vel! Natus eaque ab neque
                        obcaecati.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->
    <!-- start contact -->
    <section id="contact">

        <div class="container">
            <h1 class="text-center mb-5">contact support</h1>
            <p class="text-center">you can contact us in any time you need help about any thing </p>
            <div class="row gap-2">
                <div class="col border text-center py-5">
                    <i class="fa-brands fa-whatsapp fa-2xl my-5"></i>
                    <h3>by whatsapp</h3>
                    <p>+212-611-411-620</p>
                </div>
                <div class="col border text-center py-5">
                    <i class="fa-regular fa-envelope fa-2xl my-5"></i>
                    <h3>by whatsapp</h3>
                    <p>+212-611-411-620</p>
                </div>
                <div class="col border text-center py-5">
                    <i class="fa-solid fa-headset fa-2xl my-5"></i>
                    <h3>by whatsapp</h3>
                    <p>+212-611-411-620</p>
                </div>
            </div>
        </div>

    </section>
    <!-- end contact -->
    <!-- start footer -->
    <footer class="mt-5 pt-3">
        <h5 class="text-center text-light">AbdelilahLahniti&copy;2023</h5>
    </footer>
    <!-- end footer -->
    <script src="https://kit.fontawesome.com/af48de5d51.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
<script src="./js/index.js"></script>
   
</body>

</html>