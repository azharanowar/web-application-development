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
    <header class="bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark py-3">
                <a href="" class="navbar-brand text-uppercase fw-light text-muted"><span class="text-primary">Logo</span> Here</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainMenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="" class="nav-link">Home</a></li>
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
    <main>
        <section class="bg-light">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-4 pb-4">
                        <div class="card h-100 bg-white">
                            <img class="card-img img-fluid card-img-top rounded-0 rounded-top" src="assets/images/1.webp" alt=""/>
                            <div class="card-body">
                                <h5 class="card-title">This is a card heading!!!</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam enim labore molestiae quibusdam sed sit?</p>
                                <hr/>
                                <a class="btn btn-primary py-2 w-100" href="">Lean More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-4">
                        <div class="card h-100 bg-white">
                            <img class="card-img img-fluid card-img-top rounded-0 rounded-top" src="assets/images/2.webp" alt=""/>
                            <div class="card-body">
                                <h5 class="card-title">This is a card heading!!!</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam enim labore molestiae quibusdam sed sit?</p>
                                <hr/>
                                <a class="btn btn-primary py-2 w-100" href="">Lean More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-4">
                        <div class="card h-100 bg-white">
                            <img class="card-img img-fluid card-img-top rounded-0 rounded-top" src="assets/images/3.webp" alt=""/>
                            <div class="card-body">
                                <h5 class="card-title">This is a card heading!!!</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam enim labore molestiae quibusdam sed sit?</p>
                                <hr/>
                                <a class="btn btn-primary py-2 w-100" href="">Lean More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-4">
                        <div class="card h-100 bg-white">
                            <img class="card-img img-fluid card-img-top rounded-0 rounded-top" src="assets/images/14.webp" alt=""/>
                            <div class="card-body">
                                <h5 class="card-title">This is a card heading!!!</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam enim labore molestiae quibusdam sed sit?</p>
                                <hr/>
                                <a class="btn btn-primary py-2 w-100" href="">Lean More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-4">
                        <div class="card h-100 bg-white">
                            <img class="card-img img-fluid card-img-top rounded-0 rounded-top" src="assets/images/5.webp" alt=""/>
                            <div class="card-body">
                                <h5 class="card-title">This is a card heading!!!</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam enim labore molestiae quibusdam sed sit?</p>
                                <hr/>
                                <a class="btn btn-primary py-2 w-100" href="">Lean More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-4">
                        <div class="card h-100 bg-white">
                            <img class="card-img img-fluid card-img-top rounded-0 rounded-top" src="assets/images/12.webp" alt=""/>
                            <div class="card-body">
                                <h5 class="card-title">This is a card heading!!!</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam enim labore molestiae quibusdam sed sit?</p>
                                <hr/>
                                <a class="btn btn-primary py-2 w-100" href="">Lean More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>