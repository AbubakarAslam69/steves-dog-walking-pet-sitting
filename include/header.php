<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="container">
            <div class="header__top">
                <ul class="header__top__info">
                    <li>
                        <a href=""><i class="fa-sharp fa-regular fa-envelope"></i> username@domain.com</a>
                    </li>
                    <li>
                        <a href=""><i class="fa-regular fa-phone"></i> +021 01283492</a>
                    </li>
                </ul>
                <ul class="header__top__list">
                    <li>
                        <a href="">Ordering</a>
                    </li>
                    <li>
                        <a href="">Shipping</a>
                    </li>
                    <li>
                        <a href="">Returns</a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-user"></i> Login / Register</a>
                    </li>
                </ul>
            </div>
            <nav class="navbar navbar-expand-lg header-main">
                <a class="navbar-brand header-main__logo" href="index.php">
                    <img src="images/logo.webp" alt="img">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto header-main__nav">
                        <li class="nav-item active">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : '' ?>"
                                href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="services.php">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="shop.php">shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="news.php">news</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="contact.php">contact</a>
                        </li>
                        <li class="nav-item">
                            <div class="header-main__subtn">
                                <a href="#searchBtn"><i class="far fa-search"></i></a>
                                <a href=""><i class="fa-regular fa-heart"></i></a>
                                <a href="" class="shoppingCart">
                                    <span>1</span>
                                    <i class="fa-sharp fa-light fa-bag-shopping"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>