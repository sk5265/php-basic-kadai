<?php
 class food {
    private $name;
    private $price;

    public function FoodObject(string $name, $price){
        $this->name = $name;
        $this->price = $price;
    }

 }

 $food = new food("Potato", 250);

 print_r($food);

 class animal {
    private $name;
    private $height;
    private $weight;

    public function AnimalObject(string $name, $height, $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
 }

 $animal = new animal("Dog", 60, 5000);

    print_r($animal);