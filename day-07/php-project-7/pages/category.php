<?php include 'pages/header.php'; ?>
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
<?php include 'pages/footer.php'; ?>