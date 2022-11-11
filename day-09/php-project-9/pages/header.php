<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Simple Newspaper Website</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body class="bg-light">
    <header class="py-2">
        <section class="d-none d-md-block">
            <div class="container">
                <nav class="navbar navbar-expand-lg pb-0">
                    <div class="container-fluid">
                        <a class="navbar-brand fs-4 fw-normal text-muted text-uppercase" href="action.php?page=home"><span class="text-primary">News</span> Daily</a>
                        <div class="collapse navbar-collapse text-end d-none d-md-block" id="topNavbar">
                            <form class="col-md-5 my-2 my-md-0 mx-auto me-0" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control rounded-5 me-1 px-3 py-2" name="search-bar" placeholder="Search news here..." id="searchBar">
                                    <input type="button" class="btn btn-secondary rounded-5 px-3 py-2" value="Search" id="searchBtn">
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
                <hr class="text-muted">
            </div>
        </section>
        <section class="pt-3 pt-md-0" id="newsNavMenuSection">
            <div class="container">
                <nav class="navbar navbar-expand-lg pt-0">
                    <div class="container-fluid">
                        <a class="navbar-brand fs-4 fw-normal text-muted text-uppercase d-block d-md-none" href="action.php?page=home"><span class="text-primary">News</span> Daily</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse text-end py-3 py-md-0" id="mainMenu">
                            <ul class="navbar-nav mx-auto" id="mainMenuUl">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="action.php?page=home" id="homePageNavLink">Home</a>
                                </li>

                                <?php foreach ($categories as $category) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="action.php?page=category&id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a>
                                    </li>
                                <?php }?>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
    </header>