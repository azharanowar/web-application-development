<?php include "header.php"; ?>
    <main>
        <section class="bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4 py-4">

                    <?php foreach ($products as $product) { ?>
                        <div class="col">
                            <div class="card h-100 bg-white">
                                <a href="action.php?page=product-details&id=<?php echo $product['id']; ?>"><img class="card-img img-fluid card-img-top rounded-0 rounded-top" src="assets/images/product/<?php echo $product['image']; ?>" alt="Product Image"/></a>
                                <div class="card-body">
                                    <h4 class="fw-bold text-danger">Price: <?php echo $product['price']; ?>Tk</h4>
                                    <h5 class="card-title"><?php echo $product['title']; ?></h5>
                                    <p class="text-muted"><?php echo $product['short_description']; ?></p>
                                </div>
                                <div class="m-3">
                                    <a class="btn btn-secondary fw-semibold py-2 w-100" href="action.php?page=product-details&id=<?php echo $product['id']; ?>">Lean More</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </section>
    </main>

<?php include "footer.php"; ?>