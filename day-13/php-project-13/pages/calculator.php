<?php include "pages/header.php"; ?>

    <main>
        <div class="container">
            <div class="row py-5">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title text-center py-2">Basic Calculator with Object Oriented PHP</h5>
                        </div>
                        <div class="card-body">

                            <form action="action.php" method="post" id="calculatorForm">
                                <div class="row my-3">
                                    <label class="col-md-3">First Number: </label>
                                    <div class="col-md-9">
                                        <input type="number" name="first_number" class="form-control py-2" placeholder="Enter your first number here..." value="<?php if (isset($_POST['first_number'])) { echo $_POST['first_number']; }?>"/>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <label class="col-md-3">Last Number: </label>
                                    <div class="col-md-9">
                                        <input type="number" name="last_number" class="form-control py-2" placeholder="Enter your last number here..." value="<?php if (isset($_POST['last_number'])) { echo $_POST['last_number']; }?>"/>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <label class="col-md-3">Result: </label>
                                    <div class="col-md-9">
                                        <input type="number" name="result" class="form-control py-2" placeholder="Your result will be show here..." value="<?php if (isset($result)) { echo $result; }?>" disabled/>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <label class="col-md-3">Operation: </label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-secondary py-2 px-4" name="operation_btn" value="+"/>
                                        <input type="submit" class="btn btn-outline-secondary py-2 px-4" name="operation_btn" value="-"/>
                                        <input type="submit" class="btn btn-outline-secondary py-2 px-4" name="operation_btn" value="*"/>
                                        <input type="submit" class="btn btn-outline-secondary py-2 px-4" name="operation_btn" value="/"/>
                                        <input type="submit" class="btn btn-outline-secondary py-2 px-4" name="operation_btn" value="%"/>
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