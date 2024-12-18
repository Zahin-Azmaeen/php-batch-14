<?php include "includes/header.php"?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">My Calculator</div>
                    <div class="card-body">
                        <form action="route.php" method="POST">
                            <div class="row mb-3">
                                <label class="col-md-3">First Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="first_number" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Second Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="second_number" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Choice</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="choice" value="+"/> + </label>
                                    <label><input type="radio" name="choice" value="-"/> - </label>
                                    <label><input type="radio" name="choice" value="*"/> * </label>
                                    <label><input type="radio" name="choice" value="/"/> / </label>
                                    <label><input type="radio" name="choice" value="%"/> % </label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($_GET['result']) ? $_GET['result'] : ''; ?>" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-danger" name="calculator_btn" value="Make Result"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "includes/footer.php"?>
