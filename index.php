<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php
    class Movie {
        public $title;
        public $originalTitle;
        public $language;
        public $genre;
        private $year;

        function __construct($title,$originalTitle, $language,$genre,$year) {
            $this->title = $title;
            $this->originalTitle = $originalTitle;
            $this->language = $language;
            $this->genre = $genre;
            $this->year = $year;
        }
        
        public function getYear($year) {
            if (is_integer($year) && $year >= 0) {
                $this->year = $year;
            }
            return $year;
        }
    }

    $armageddon = new Movie('Armageddon - Giudizio finale','Armageddon', 'english', 'action', '1998');
    echo $armageddon->title;
    echo '<br>';
    echo $armageddon->originalTitle;
    echo '<br>';
    echo $armageddon->language;
    echo '<br>';
    echo $armageddon->genre;
    echo '<br>';
    //echo $armageddon->year;
    echo '<br>';
    echo $armageddon->getYear('1998');
    echo '<br>';
    echo '<br>';
    
    echo '<br>';
    echo '<br>';
    $coco = new Movie('Coco','Coco', 'english', 'animation', '2017');
    echo $coco->title;
    echo '<br>';
    echo $coco->originalTitle;
    echo '<br>';
    echo $coco->language;
    echo '<br>';
    echo $coco->genre;
    echo '<br>';
    //echo $coco->year;
    echo '<br>';
    echo $coco->getYear('2017');
    echo '<br>';

