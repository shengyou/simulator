<?php

namespace JetBrains\PhpUpgradeGuide\Simulator;

class Banana
{



    private    $price;



    public function getId(){
        return
            $this->id;
    }

    /**
     * @return string
     */
    public function getName()
       {
  return $this->name;
}

    private $name;

    public function getPrice()
    {return $this->price;
    }

    /**
     * @param $id
     * @param $name
     * @param $price
     */
    public function __construct(
        $id, $name,
        $price
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @var int
     */
    private $id;
}
