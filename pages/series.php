<?php include "includes/header.php"; ?>
<?php

if(!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}

?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center" >Series</h3>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="row">
                                    <label for="startingNumber" class="col-md-4">Starting Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="starting_number" class="form-control" id="startingNumber" placeholder="Starting Number">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="endingNumber" class="col-md-4">Ending Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="ending_number" class="form-control" id="endingNumber" placeholder="Ending Number">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="result" class="col-md-4">Result</label>
                                    <div class="col-md-8">
                                        <input type="text" value="<?php echo isset($result) ? $result : ''; ?>" name="" class="form-control" id="result" placeholder="Result">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="series_btn" class="btn btn-success" value="Get Result">
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