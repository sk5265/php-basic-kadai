<?php
 class food {
    private $name;
    private $price;

    public function __construct (string $foodname, int $foodprice){
        $this->name = $foodname;
        $this->price = $foodprice;
    }

    public function show_price(){
        echo $this->price;
    }

 }

 $food = new food("Potato", 250);

 print_r($food);

 $food->show_price();

 class animal {
    private $name;
    private $height;
    private $weight;

    public function __construct (string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height(){
        echo $this->height;
    }
 }

 $animal = new animal("Dog", 60, 5000);

 print_r($animal);

 $animal->show_height();
 