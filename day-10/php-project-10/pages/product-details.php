<?php include "header.php"; ?>

    <main>
        <section class="bg-light">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-5">
                        <img class="img-fluid rounded-3" src="assets/images/product/<?php echo $productDetailsInfo['image']; ?>"/>
                    </div>
                    <div class="col-md-7 bg-white rounded-3 py-5 px-4">
                        <p><a href="action.php?page=home">Home</a> / <a href="action.php?page=category&id=<?php echo $productDetailsInfo['category_id']; ?>"><?php echo $productDetailsInfo['category_name']; ?></a></p>
                        <h2 class="py-1"><?php echo $productDetailsInfo['title']; ?></h2>
                        <i class="text-muted"><?php echo $productDetailsInfo['short_description']; ?></i>
                        <h4 class="text-danger py-1">Price: <?php echo $productDetailsInfo['price']; ?>Tk</h4>
                        <a class="btn btn-secondary py-2 mt-4" href="action.php?page=home">Back To Home Page</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 bg-white rounded-3 py-5 px-4">
                        <h4>Description: </h4>
                        <p class="text-muted"><?php echo $productDetailsInfo['description']; ?></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include "footer.php"; ?>