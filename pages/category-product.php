<?php include "includes/header.php" ?>

<?php

if(!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}

?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product){?>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="<?php echo $product['image'] ?>" alt="" class="card-img-top" style="height: 250px"/>
                            <div class="card-body">
                                <h4><?php echo $product['name'] ?></h4>
                                <p><?php echo $product['price'] ?></p>
<!--                                <a href="" class="btn btn-success">View</a>-->
                                <a href="#myModal<?php echo $product['category_id'] ?>" class="btn btn-outline-info" data-bs-toggle="modal">View</a>

                            </div>
                        </div>
                    </div>
                    <div class="modal modal-lg" id="myModal<?php echo $product['category_id'] ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Product Detail</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <img src="<?php echo $product['image'] ?>" alt="" class="img-fluid w-100">
                                            <h4><?php echo $products[$number]['name'] ?></h4>
                                            <table class="table table-responsive table-hover table-striped">
                                                <tbody>
                                                <tr>
                                                    <td>Brand : </td>
                                                    <td><?php echo $products[$number]['name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Price : </td>
                                                    <td><?php echo $products[$number]['price'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Description : </td>
                                                    <td><?php echo $products[$number]['description'] ?></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                                <?php $number = $number + 1; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include "includes/footer.php"?>

