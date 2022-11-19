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
                                <li class="">
                                    <a href="" class="dropdown-item">Services 1</a>
                                    <a href="" class="dropdown-item">Services 2</a>
                                    <a href="" class="dropdown-item">Services 3</a>
                                    <a href="" class="dropdown-item">Services 4</a>
                                </li>
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
                            <h5 class="card-title text-center py-2">Full Name Generator</h5>
                        </div>
                        <div class="card-body">

                            <form action="action.php" method="post">
                                <div class="row my-3">
                                    <label class="col-md-3">First Name: </label>
                                    <div class="col-md-9">
                                        <input type="text" name="first_name" class="form-control py-2" placeholder="Enter your first name here..." value="<?php if (isset($_POST['first_name'])) { echo $_POST['first_name']; } ?>"/>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <label class="col-md-3">Last Name: </label>
                                    <div class="col-md-9">
                                        <input type="text" name="last_name" class="form-control py-2" placeholder="Enter your last name here..." value="<?php if (isset($_POST['last_name'])) { echo $_POST['last_name']; } ?>"/>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <label class="col-md-3">Full Name: </label>
                                    <div class="col-md-9">
                                        <input type="text" name="full_name" class="form-control py-2" placeholder="Your full name will show here..." value="<?php if (isset($fullNameResult)) { echo $fullNameResult; } ?>" disabled/>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="full_name_btn" class="form-control btn btn-success px-5 py-2 fw-semibold text-uppercase" value="Make Full Name"/>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>