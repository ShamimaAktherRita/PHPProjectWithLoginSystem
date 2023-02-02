<?php include "includes/header.php"; ?>

<?php

    if(!isset($_SESSION['id']))
    {
        header('Location: action.php?page=login');
    }

?>

    <h1 class="text-center text-uppercase mt-5 text-warning">This is Home Page</h1>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">All Products</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product Description</th>
                                    <th>Product Image</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i =1; ?>
                                <?php foreach ($products as $product) { ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php
                                            foreach ($categories as $category)
                                            {
                                                if($product['category_id'] == $category['id'])
                                                {
                                                    echo $category['name'];
                                                }
                                            }
                                            ?></td>
                                        <td><?php echo $product['name']; ?></td>
                                        <td><?php echo $product['price']; ?></td>
                                        <td><?php echo $product['description']; ?></td>
                                        <td><img src="<?php echo $product['image']; ?>" alt="" height="60px"></td>
                                    </tr>
                                <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


<?php include "includes/footer.php"; ?>