<?php

require_once './vendor/autoload.php';

use app\classes\Calculator;
use app\classes\Series;
use app\classes\WordCount;
use app\classes\AlphabetCount;
use app\classes\Category;
use app\classes\Products;
use app\classes\Auth;
use app\classes\FileUpload;
use app\classes\ReadWrite;
$number = 1;
$product = new Products();
$category = new Category();
$categories = $category->getAllCategories();



if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        $products = $product->getAllProducts();
        include "pages/home.php";
    }elseif ($_GET['page'] == 'category')
    {
        $products = $product->getCategoryWiseProduct($_GET['category_id']);
        include "pages/category-product.php";
    }elseif ($_GET['page'] == 'add-product')
    {
        include "pages/add-product.php";
    }elseif ($_GET['page'] == 'calculator')
    {
        include "pages/calculator.php";
    }elseif ($_GET['page'] == 'series')
    {
        include "pages/series.php";
    }elseif($_GET['page'] == 'alphabetcount')
    {
        include "pages/alphabetcount.php";
    }elseif($_GET['page'] == 'word-count')
    {
        include "pages/word-count.php";
    }elseif($_GET['page'] == 'file-upload')
    {
        include "pages/file-upload.php";
    }elseif($_GET['page'] == 'file-read-write')
    {
        include "pages/file-read-write.php";
    }elseif($_GET['page'] == 'login')
    {
        include "pages/login.php";
    }elseif($_GET['page'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }
}elseif (isset($_POST['calculator_btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->getResult();
    include "pages/calculator.php";
}elseif (isset($_POST['series_btn']))
{
    $series = new Series($_POST);
    $result = $series->getSeries();
    include "pages/series.php";
}elseif (isset($_POST['btn']))
{
    if($_POST['btn'] == 'Login')
    {
        $auth = new Auth($_POST);
        $message = $auth->login();
        include "pages/login.php";
    }
}elseif (isset($_POST['alphabetcount_btn']))
{
    $alphabetcount = new AlphabetCount($_POST);
    $result = $alphabetcount->getAlphabetCount();
    include "pages/alphabetcount.php";
}elseif (isset($_POST['wordcount_btn']))
{
    $wordcount = new WordCount($_POST);
    $result = $wordcount->getWordCount();
    include "pages/word-count.php";
}elseif (isset($_POST['add_btn'])) {
    if ($_POST['add_btn'] == 'Add Product')
    {
        $product = new Products($_POST,$_FILES);
        $message = $product->saveProductInfo();
        include "pages/add-product.php";
    }
}elseif (isset($_POST['upload_btn']))
{
    $upload = new FileUpload($_POST,$_FILES);
    $result = $upload->getFileDetails();
    include "pages/file-upload.php";
}
elseif (isset($_POST['read-write_btn']))
{
    $readwrite = new ReadWrite($_POST);
    $result = $readwrite->getReadWriteDetails();
    include "pages/file-read-write.php";
}


