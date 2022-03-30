<?php

abstract class Dinosaurs 
{
   public $name;
   public $type;
   public $legs;
   public $weight;

   public function __construct(string $name, string $type, int $legs, int  $weight) 
   { 
      $this->name = $name;
      $this->type = $type;
      $this->legs = $legs;
      $this->weight = $weight;
   }

   public function describeYourself() 
   {
      echo "Привет, я $this->name, я $this->type. Мой вес - $this->weight <br>" ;
   }
}

class TRex extends Dinosaurs 
{
   public $speed;

   public function __construct(string $name, string $type, int $legs, int  $weight, int $speed) 
   {
      $this->speed = $speed;
      parent::__construct($name, $type, $legs, $weight);
   }

   public function describeYourself() 
   {
      echo "Привет, я $this->name, я $this->type. Мой вес - $this->weight кг, моя скорость - $this->speed км/ч <br>" ;
   }
}

class Diplodocus extends Dinosaurs 
{
   public $grassEaten;

   public function __construct(string $name, string $type, int $legs, int  $weight, int $grassEaten) 
   {
      $this->grassEaten = $grassEaten;
      parent::__construct($name, $type, $legs, $weight);
   }

   public function describeYourself() 
   {
      echo "Привет, я $this->name, я $this->type. Мой вес - $this->weight кг, я съедаю  - $this->grassEaten кг травы <br>" ;
   }
}

$trex = new TRex('T-Rex', 'хищник', 2, 1000, 50);
$trex->describeYourself();

$diplodocus = new Diplodocus('Diplodocus', 'травоядное', 4, 5000, 5);
$diplodocus->describeYourself();