<?php include 'includes/header.php' ?>

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
                        <h3 class="tex-center">
                            Add Products
                        </h3>
                        <div class="card-body">
                            <span class="text-center text-success"><?php echo  isset($message) ? $message: ''; ?></span>
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">Select a Category</option>
                                            <?php foreach ($categories as $category){ ?>
                                            <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Product Name</label>
                                    <div class="col-md-8">
                                        <input id="" type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Product Price</label>
                                    <div class="col-md-8">
                                        <input id="" type="text" name="price" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Product Description</label>
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
                                        <input id="" type="submit" name="add_btn" class="btn btn-outline-success" value="Add Product">
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



<?php include 'includes/footer.php' ?>


