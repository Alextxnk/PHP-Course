<?php

// модификаторы доступа, наследование, полиморфизм и инкапсуляция

abstract class Article 
{
   protected $title; // Заголовок, модификатор доступа открытый 
   protected $titleFontSize; // размер шрифта нашего заголовка 
   protected $articleBody; // сама наша статья 
   protected $articleBodyFontSize; // размер шрифта нашей статьи 
   protected $border; // граница
   protected $background; // фон, у него не будет никакого значения по умолчанию 


   //Class constructor - метод
   public function __construct(string $title, string $articleBody, string $border, string $background, int $titleFontSize = 20, int $articleBodyFontSize = 16) 
   {
      $this->title = $title; // переопределяем наши свойства 
      $this->titleFontSize = $titleFontSize;
      $this->articleBody = $articleBody;
      $this->articleBodyFontSize = $articleBodyFontSize;
      $this->border = $border;
      $this->background = $background;
   }


   public function printArticle() 
   {
      echo "<div style='border: {$this->border}; background: {$this->background}; font-size: {$this->articleBodyFontSize}px;'>
      <h2 style='font-size: {$this->titleFontSize}px;'>{$this->title}</h2>
      <span>{$this->articleBody}</span>
      </div>";
   }
}

// $test = new Article(); // когда класс является абстрактным "abstract class Article {}" мы не можем создавать объекты(экземпляры этого класса)

// наследование класса SportsArticle от класса Article 
class SportsArticle extends Article 
{
   protected $image;

   public function __construct(string $title, string $articleBody, string $border, string $background, string $image, int $titleFontSize = 20, int $articleBodyFontSize = 16) 
   {
      $this->image = $image;
      parent::__construct($title, $articleBody, $border, $background, $titleFontSize, $articleBodyFontSize);
   }

   public function printArticle() 
   {
      echo "<div style='border: {$this->border}; background: {$this->background}; font-size: {$this->articleBodyFontSize}px;'>
      <h2 style='font-size: {$this->titleFontSize}px;'>{$this->title}</h2>
      <span>{$this->articleBody}</span>
      <img src='{$this->image}' alt='Картинка' style='width: 100px; height: 100px;'>
      </div>";
   }
}

class WeatherArticle extends Article 
{
   protected $temperature;

   public function __construct(string $title, string $articleBody, string $border, string $background, string $temperature, int $titleFontSize = 20, int $articleBodyFontSize = 16) 
   {
      $this->temperature = $temperature;
      parent::__construct($title, $articleBody, $border, $background, $titleFontSize, $articleBodyFontSize);
   }

   public function printArticle() 
   {
      echo "<div style='border: {$this->border}; background: {$this->background}; font-size: {$this->articleBodyFontSize}px;'>
      <h2 style='font-size: {$this->titleFontSize}px;'>{$this->title}</h2>
      <span>{$this->articleBody}</span>
      <span>{$this->temperature}</span>
      </div>";
   }
}

final class PoliticsArticle extends Article 
{
   protected $link;

   public function __construct(string $title, string $articleBody, string $border, string $background, string $link, int $titleFontSize = 20, int $articleBodyFontSize = 16) 
   {
      $this->link = $link;
      parent::__construct($title, $articleBody, $border, $background, $titleFontSize, $articleBodyFontSize);
   }

   public function printArticle() 
   {
      echo "<div style='border: {$this->border}; background: {$this->background}; font-size: {$this->articleBodyFontSize}px;'>
      <h2 style='font-size: {$this->titleFontSize}px;'>{$this->title}</h2>
      <span>{$this->articleBody}</span>
      <a href='{$this->link}'>Ссылка на статью</a>
      </div>";
   }
}

// class Test extends PoliticsArticle {} // получим ошибку, т.к. нельзя наследовать final классы - это значит, что класс PoliticsArticle "зацементирован"

// такой прием называется полиморфизмом (когда мы в классах наслдниках использовали родительский метод, немного его изменяя), несмотря на то, что методы в разных классах имеют одно и то же название у них разная реализация 
// благодаря свойствам protected дочерние классы так же наследуются от родительского, только извне изменить свойства нельзя 
// а при private дочерние классы не могут ничего унаследовать от родительского, потому что не видят его свойства и тд

$sportsNews = new SportsArticle('Спортивная статья', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam assumenda itaque consequuntur dolore iste commodi officiis inventore maiores ratione asperiores. Obcaecati quis eum porro excepturi asperiores a dolor, eveniet non?
', '1px solid black', '#838fe5', 'images/picture.jpg');
// $sportsNews->title = 'Test'; // т.к. свойство title является public - мы можем его изменить
$sportsNews->printArticle();

$weatherNews = new WeatherArticle('Статья о погоде', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam assumenda itaque consequuntur dolore iste commodi officiis inventore maiores ratione asperiores. Obcaecati quis eum porro excepturi asperiores a dolor, eveniet non?
', '1px solid black', '#838fe5', '+25');
$weatherNews->printArticle();

$politicsNews = new PoliticsArticle('Статья о политике', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam assumenda itaque consequuntur dolore iste commodi officiis inventore maiores ratione asperiores. Obcaecati quis eum porro excepturi asperiores a dolor, eveniet non?
', '1px solid black', '#838fe5' , 'https://github.com/Alextxnk');
$politicsNews->printArticle();