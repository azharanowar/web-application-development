<?php include "pages/header.php"; ?>

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

<?php include "pages/footer.php"; ?>