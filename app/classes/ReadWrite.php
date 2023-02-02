<?php


namespace app\classes;


class ReadWrite
{


    public $name;
    public $description;

    public $file;
    public $filePath;
    public $fileContent;


    public function __construct($post = null)
    {
        if($post){
            $this->name = $post['name'];
            $this->description = $post['description'];
        }
    }

    public function getReadWriteDetails()
    {

        $this->filePath = 'db/details.txt';
        $this->file = fopen($this->filePath,'a');
        $this->fileContent = "$this->name, $this->description";
        fwrite($this->file, $this->fileContent);
        fclose($this->file);
        return 'Data saved successfully';

    }



}