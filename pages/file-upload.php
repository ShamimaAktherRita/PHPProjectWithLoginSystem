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
                        <h1 class="text-center text-uppercase text-dark">File Upload</h1>
                    </div>
                        <div class="card-body">
                            <span class="text-center text-success"><?php echo  isset($message) ? $message: ''; ?></span>
                            <form action="action.php" method="post" enctype="multipart/form-data">

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Title</label>
                                    <div class="col-md-8">
                                        <input id="" type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input id="" type="file" name="image" class="form-control" accept="image/*">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-4">
                                        <input id="" type="submit" name="upload_btn" class="btn btn-outline-success" value="Upload Details">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "includes/footer.php"; ?>
