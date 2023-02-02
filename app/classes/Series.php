<?php


namespace app\classes;


class Series
{
    public $startingNumber;
    public $endingNumber;
    public $result;

    public function __construct($data)
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber = $data['ending_number'];
    }
    public function getSeries()
    {
        if($this->startingNumber < $this->endingNumber) {
            for ($this->startingNumber; $this->startingNumber <= $this->endingNumber; $this->startingNumber++) {
                $this->result += $this->startingNumber;
            }
            return $this->result;
        }elseif ($this->startingNumber > $this->endingNumber){
            for ($this->startingNumber; $this->startingNumber >= $this->endingNumber; $this->startingNumber--) {
                $this->result += $this->startingNumber;
            }
            return $this->result;
        }
    }
/*
        for ($this->startingNumber; $this->startingNumber<=$this->endingNumber; $this->startingNumber++)
        {
            //echo $this->startingNumber.'<br/>';

            if($this->startingNumber == $this->endingNumber)
              {
                  $this->result .= $this->startingNumber.'';
              }
              else{
                  $this->result .= $this->startingNumber.',';
              }

            $this->result .= $this->startingNumber.',';
        }
         return $this->result;
*/
/*for ($this->startingNumber; $this->startingNumber <= $this->endingNumber; $this->startingNumber++) {
    //echo $this->startingNumber.'<br/>';
$this->result .= $this->startingNumber . ',';
}
return rtrim($this->result, ',');
*/

}