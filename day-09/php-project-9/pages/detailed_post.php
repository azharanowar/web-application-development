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
                <div class="row py-4">
                    <div class="col-md-12">
                        <p><span><a href="action.php?page=home">Home</a></span> / <span><a href="action.php?page=category&id=<?php echo $postDetailedInformation['category_id']; ?>">Category</a></span></p>
                        <h1 class="pb-1"><?php echo $postDetailedInformation['title']; ?></h1>
                        <i class="text-muted"><?php echo $postDetailedInformation['short_description']; ?></i>
                        <img class="py-3" src="assets/images/posts/<?php echo $postDetailedInformation['image']; ?>">
                        <p><?php echo $postDetailedInformation['description']; ?></p>
                        <div class="text-center pb-3 pt-2">
                            <a href="action.php?page=home"><button class="btn btn-secondary">Back To Home Page</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include "pages/footer.php"; ?>