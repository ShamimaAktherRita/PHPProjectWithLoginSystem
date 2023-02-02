<?php


namespace app\classes;


class AlphabetCount
{
    public $starting_words;
    public $result;

    public function __construct($data)
    {
        $this->startingWords = $data['starting_words'];
    }
   public function getAlphabetCount()
   {
       return $this->result = strlen($this->startingWords);
   }

}