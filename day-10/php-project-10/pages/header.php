<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Another Simple PHP Project</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<body>
    <header class="bg-dark pb-4">
        <div class="container py-3">
            <nav class="navbar navbar-expand-md navbar-dark">
                <a href="action.php?page=home" class="navbar-brand text-uppercase fw-light text-muted"><span class="text-primary">Logo</span> Here</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainMenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="action.php?page=home" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <ul class="dropdown-menu">
                                <?php foreach ($categories as $category) { ?>
                                    <div class="row">
                                        <li class=""><a href="action.php?page=category&id=<?php echo $category['id']; ?>" class="dropdown-item"><?php echo $category['name']; ?></a></li>
                                    </div>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>