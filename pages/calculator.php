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
                            <h3 class="text-center" >Calculator</h3>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="row">
                                    <label for="firstNumber" class="col-md-4">First Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="first_number" class="form-control" id="firstNumber" placeholder="First Number">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="lastNumber" class="col-md-4">Last Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="last_number" class="form-control" id="lastNumber" placeholder="Last Number">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="result" class="col-md-4">Result</label>
                                    <div class="col-md-8">
                                        <input type="number" value="<?php echo isset($result) ? $result : ''; ?>" name="" class="form-control" id="result" placeholder="Result">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="col-md-4">Actions</label>
                                    <div class="col-md-8">
                                        <label><input type="radio" checked name="actions" value="+"> + </label>
                                        <label><input type="radio" name="actions" value="-"> - </label>
                                        <label><input type="radio" name="actions" value="*"> * </label>
                                        <label><input type="radio" name="actions" value="/"> / </label>
                                        <label><input type="radio" name="actions" value="%"> % </label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="calculator_btn" class="btn btn-success" value="Get Result">
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