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
                <div class="col-md-6">
                    <img src="assets/img/<?php echo $singleProduct['image']; ?>" alt="" width="400px" height="500px">
                </div>
                <div class="col-md-6">
                    <h1><?php echo $singleProduct['name']?></h1>
                    <h4><?php echo $singleProduct['price']?></h4>
                    <p><?php echo $singleProduct['description']?></p>
                </div>
            </div>
        </div>
    </section>
<?php include "includes/footer.php"; ?>