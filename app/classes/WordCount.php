<?php


namespace app\classes;


class WordCount
{
    public $starting_words;
    public $result;

    public function __construct($data)
    {
        $this->startingWords = $data['starting_words'];
    }

    public function getWordCount()
    {
       // $this->startingWords = preg_replace('/\s+/', ' ', trim($this->startingWords));
        $this->result = explode(" ", $this->startingWords);
        return count($this->result);
    }

}