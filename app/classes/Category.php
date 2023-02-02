<?php


namespace app\classes;


class Category
{
    private $categories;

    public function __construct()
    {
        $this->categories =[
            0=>[
                'id'=>1,
                'name'=>'Man Fashion'
            ],
            1=>[
                'id'=>2,
                'name'=>'Woman Fashion'
            ],
            2=>[
                'id'=>3,
                'name'=>'Kid Fashion'
            ],
        ];
    }


    public function getAllCategories()
    {
        return $this->categories;
    }

}