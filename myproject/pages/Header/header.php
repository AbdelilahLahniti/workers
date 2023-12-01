<?php
if (isset($_GET['city'])) {
    $city = $_GET['city'];
}
?>
<header class="sticky-top">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">

        <div class="container">
            <a class="navbar-brand logo" href="../">MYLOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto fw-bold mb-2 mb-lg-0 gap-3 gap-lg-5">
                    <?php
                    // Getting the current url 
                    $array = explode('/', $_SERVER['REQUEST_URI']);
                    $url = end($array);
                    $array2 = explode('?', $url);
                    $url2 = reset($array2);
                    // Workers URL
                    $workerUrl = 'workers.php';
                    $profileUrl = 'profile.php';
                    $categoryUrl = 'category.php';
                    $workerCityUrl = 'workerCity.php';
                    $profileWorkerUrl = 'profileWorker.php';
                    if ($url == $workerUrl || $url2 == $categoryUrl || $url2 == $workerCityUrl) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link item active" aria-current="page" href="../">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link item active" aria-current="page" href="./workers.php">All</a>
                        </li>
                        <?php } else {
                        if ($url2 == $profileWorkerUrl) {
                        ?>
                            <li class="nav-item">
                            <a class="nav-link item active" aria-current="page" href="../">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link item active" aria-current="page" href="./workers.php">Workers</a>
                        </li>
                        
                        <?php } else {
                        if ($url == $profileUrl) {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link item active" aria-current="page" href="../pages/logout.php">Logout</a>
                            </li>
                        <?php } else {
                        ?>

                            <li class="nav-item">
                                <a class="nav-link item active" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link item active" aria-current="page" href="#about">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link item active" aria-current="page" href="./pages/workers.php">workers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link item active" aria-current="page" href="#contact">contact me</a>
                            </li>
                            <li>


                            <?php } ?>
                        <?php } ?>
                        <?php } ?>
                            </li>
                </ul>
                <div class="socialMedia ms-md-5">
                    <a href="#" class="ps-md-2">
                        <i class="fa-brands fa-facebook fa-xl"></i>
                    </a>
                    <a href="#" class="ps-2">
                        <i class="fa-brands fa-square-twitter fa-xl"></i>
                    </a>
                    <a href="#" class="ps-2">
                        <i class="fa-brands fa-linkedin fa-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>