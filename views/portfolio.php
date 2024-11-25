<?php include "includes/header.php"; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Series Program</div>
                        <div class="card-body">
                            <form action="route.php" method="post">
                                <div class="row mb-3">
                                    <label class="col-md-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="text" name="starting_number" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="text" name="ending_number" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Your Choice</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="choice" value="odd"/> Odd</label>
                                        <label><input type="radio" name="choice" value="even"/> Even</label>
                                        <label><input type="radio" name="choice" value="none"/> As It is </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control"><?php echo isset($_GET['result']) ? $_GET['result'] : ''; ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-danger" name="series_btn" value="Make Series"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "includes/footer.php"; ?>