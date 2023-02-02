<?php


namespace app\classes;


class FileUpload
{


    public $name;
    public $description;
    public $image;
    public $imageName;
    public $imagePath;
    public $imageDirectory;
    public $file;
    public $filePath;
    public $fileContent;


    public function __construct($post = null, $file = null)
    {
        if($post){
            $this->name = $post['name'];
            $this->description = $post['description'];
        }

        if($file){
            $this->image = $file['image'];
        }

    }

    public function getFileDetails()
    {

        $this->imageDirectory = $this->uploadImage();
        $this->filePath = 'db/files.txt';
        $this->file = fopen($this->filePath,'a');
        $this->fileContent = "$this->name, $this->description, $this->imageDirectory$";
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


}