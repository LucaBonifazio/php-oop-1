<?php
    class Movie {
        public $title;
        public $originalTitle;
        public $language;
        public $genre;
        //public $year;
        private $year;  

        function __construct($title,$originalTitle, $language,$genre,$year) {
            $this->title = $title;
            $this->originalTitle = $originalTitle;
            $this->language = $language;
            $this->genre = $genre;
            $this->year = $year;
        }
        
        public function setYear($year) {
            if (is_integer($year) && $year >= 0) {
                $this->year = $year;
            }
        }

        public function getYear() {
            return $this->year;
        }
    }

    $armageddon = new Movie('Armageddon - Giudizio finale','Armageddon', 'english', 'action', 1998);
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
    echo $armageddon->getYear(1998);
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    $coco = new Movie('Coco','Coco', 'english', 'animation', 2017);
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
    echo $coco->getYear(2017);
    echo '<br>';