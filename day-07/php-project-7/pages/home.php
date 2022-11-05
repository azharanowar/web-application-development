<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <header class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand fw-light fs-4 text-uppercase" href="#"><span class="text-primary">News</span> Today</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mx-auto me-5 mb-2 mb-lg-0">
                                    <?php foreach ($categories as $category) { ?>
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="#"><?php echo $category['name']; ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-1 rounded-5" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-primary rounded-5" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 my-4">
                <?php foreach ($blogs as $blog) { ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="assets/images/<?php echo $blog['image']; ?>" class="card-img-top" alt="Blog Image">
                            <div class="card-body">
                                <a href="#"><h5 class="card-title"><?php echo $blog['title']; ?></h5></a>
                                <p class="card-text"><?php echo $blog['description']; ?></p>
                                <button class="btn btn-primary w-100 py-2">Learn More</button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>