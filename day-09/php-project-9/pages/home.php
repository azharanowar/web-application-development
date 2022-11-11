<?php include "pages/header.php"; ?>
    <main>
        <section>
            <div class="container">
                <div class="row" id="preloaderSection">
                    <div class="col-md-12">
                        <div class="py-3 my-3 rounded-2 text-center">
                            <img class="preloader-img" src="assets/images/preloader.gif" alt="Preloader Image">
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <?php foreach ($posts as $post) { ?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="assets/images/posts/<?php echo $post['image']; ?>" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="action.php?page=detailed_news&id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h5>
                                    <p class="card-text text-muted"><?php echo $post['short_description']; ?></p>
                                </div>
                                <div class="m-3">
                                    <a href="action.php?page=detailed_news&id=<?php echo $post['id']; ?>"><button class="btn btn-primary text-center w-100 py-2">Learn More</button></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </section>
    </main>

<?php include "pages/footer.php"; ?>