<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | PHP Form Data</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<body>
    <header class="bg-dark">
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

    <main>
        <div class="container">
            <div class="row py-5">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title text-center py-2">Make Full Name Program</h5>
                        </div>
                        <div class="card-body">
                            <div class="row my-3">
                                <label class="col-md-3">First Name: </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control py-2" placeholder="Enter your first name here..."/>
                                </div>
                            </div>
                            <div class="row my-3">
                                <label class="col-md-3">Last Name: </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control py-2" placeholder="Enter your last name here..."/>
                                </div>
                            </div>
                            <div class="row my-3">
                                <label class="col-md-3">Full Name: </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control py-2" placeholder="You full name will show here..." disabled/>
                                </div>
                            </div>
                            <div class="row my-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="button" class="form-control btn btn-success px-5 py-2 fw-semibold" value="Make Full Name"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>