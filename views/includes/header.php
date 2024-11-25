<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">My PHP Project</a>
        <button type="button" class="navbar-toggler" data-bs-target="#menu" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mx-auto">
                <li><a href="route.php?page=home" class="nav-link">Home</a></li>
                <li><a href="route.php?page=about" class="nav-link">About</a></li>
                <li><a href="route.php?page=portfolio" class="nav-link">Portfolio</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Service</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a href="" class="dropdown-item">Service - 1</a></li>
                        <li><a href="" class="dropdown-item">Service - 2</a></li>
                        <li><a href="" class="dropdown-item">Service - 3</a></li>
                        <li><a href="" class="dropdown-item">Service - 4</a></li>
                    </ul>
                </li>
                <li><a href="route.php?page=gallery" class="nav-link">Gallery</a></li>
                <li><a href="route.php?page=contact" class="nav-link">Contact</a></li>
            </ul>
            <ul class="navbar-nav">
                <li><a href="route.php?page=login" class="nav-link">Login</a></li>
                <li><a href="route.php?page=register" class="nav-link">Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>
