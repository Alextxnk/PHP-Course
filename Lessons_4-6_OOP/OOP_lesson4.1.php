<?php
// класс - это инструкция в которой четко прописано, какие свойства должны быть у объекта и какие функции он может или должен выполнять 
// ООП позволяеь оптимизировать код и программу, сделать их читабильнее, понятнее, позволяет избавиться от дублирования кода 
// название класса пишется с большой буквы (можно использовать в названии CamelCase)

class Article 
{
   public $title; // Заголовок, модификатор доступа открытый 
   public $titleFontSize; // размер шрифта нашего заголовка 
   public $articleBody; // сама наша статья 
   public $articleBodyFontSize; // размер шрифта нашей статьи 
   public $border; // граница
   public $background; // фон, у него не будет никакого значения по умолчанию 


   //Class constructor - метод
   public function __construct($title, $articleBody, $border, $background, $titleFontSize = 20, $articleBodyFontSize = 16) 
   {
      $this->title = $title; // переопределяем наши свойства 
      $this->titleFontSize = $titleFontSize;
      $this->articleBody = $articleBody;
      $this->articleBodyFontSize = $articleBodyFontSize;
      $this->border = $border;
      $this->background = $background;
   }

   // создаем метод - "опубликовать статью"
   // с помощью this мы обращаемся не к свойству класса в целом, а к свойству конкретного объекта, с которым мы в данный момент работаем, таким образом this для 2 статьи и this для 3 статьи отработаются по-разному  
   public function printArticle() 
   {
      echo "<div style='border: {$this->border}; background: {$this->background}; font-size: {$this->articleBodyFontSize}px;'>
      <h2 style='font-size: {$this->titleFontSize}px;'>{$this->title}</h2>
      <span>{$this->articleBody}</span>
      </div>";
   }
}

$test = new Article('Спортивная новость', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam assumenda itaque consequuntur dolore iste commodi officiis inventore maiores ratione asperiores. Obcaecati quis eum porro excepturi asperiores a dolor, eveniet non?
', '1px solid black', '#838fe5'); // создали объект(экземпляр) класса Article
$test->printArticle(); // вызываем метод printArticle