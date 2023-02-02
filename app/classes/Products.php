<?php


namespace app\classes;


class Products
{
    public $product;
    public $category_id;
    public $name;
    public $price;
    public $description;
    public $image;
    public $imageName;
    public $imagePath;
    public $imageDirectory;
    public $file;
    public $filePath;
    public $fileContent;

    public $array;
    public $array1;
    public $array2;

    public $allProducts;
    public $products = [];

    public function __construct($post = null, $file = null)
    {
        if($post){
            $this->category_id = $post['category_id'];
            $this->name = $post['name'];
            $this->price = $post['price'];
            $this->description = $post['description'];
        }

        if($file){
            $this->image = $file['image'];
        }

    }

    public function saveProductInfo()
    {

        $this->imageDirectory = $this->uploadImage();
        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath,'a');
        $this->fileContent = "$this->category_id, $this->name, $this->price, $this->description, $this->imageDirectory$";
        fwrite($this->file, $this->fileContent);
        fclose($this->file);
        return 'Data saved successfully';

    }

    public function uploadImage()
    {
        $this->imageName = rand(99,999999).time().$this->image['name'];
        echo $this->imageDirectory = 'assets/image/upload/'.$this->imageName;
        move_uploaded_file($this->image['tmp_name'],$this->imageDirectory);
        return $this->imageDirectory;

    }

    public function getAllProducts()
    {
        $this->filePath = 'db/db.txt';
        $this->fileContent = file_get_contents($this->filePath);
        $this->array = (explode('$',$this->fileContent));
        foreach ($this->array as $key => $value)
        {
            $this->array1 = explode(', ',$value);
            if($this->array1[0])
            {
                $this->array2[$key]['category_id'] = $this->array1[0];
                $this->array2[$key]['name'] = $this->array1[1];
                $this->array2[$key]['price'] = $this->array1[2];
                $this->array2[$key]['description'] = $this->array1[3];
                $this->array2[$key]['image'] = $this->array1[4];
            }

        }
        return $this->array2;
    }
    public function getCategoryWiseProduct($categoryId)
    {
        $this->allProducts = $this->getAllProducts();

        foreach ($this->allProducts as $product)
        {
            if($product['category_id'] == $categoryId)
            {
                array_push($this->products, $product);
            }
        }

        return $this->products;
    }

}