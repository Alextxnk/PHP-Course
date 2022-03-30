<?php

class Dinosaurs 
{
   public $name;
   public $type;
   public $legs;
   public $weight;

   // проверка на тип данных у weight 
   public function __construct($name, $type, $legs, int  $weight) 
   { 
      $this->name = $name;
      $this->type = $type;
      $this->legs = $legs;
      $this->weight = $weight;
   }

   public function eat() 
   {
      echo "$this->name поел <br>";
   }

   public function drink() 
   {
      echo "$this->name попил <br>";
   }

   public function describeYourself() 
   {
      echo "Привет, я $this->name, я $this->type. Мой вес - $this->weight <br>" ;
   }
}

$dinosaur1 = new Dinosaurs('T-Rex', 'хищник', 2, 1000);
$dinosaur1->eat();
$dinosaur1->drink();
$dinosaur1->describeYourself();

$dinosaur2 = new Dinosaurs('Diplodoc', 'травоядное', 4, 5000);
$dinosaur2->eat();
$dinosaur2->drink();
$dinosaur2->describeYourself();