<?php 
    class Movie
    {
        public $image;
        public $title;
        public $year;
        public $genre;
        public $vote;
        public $star = [];

        function __construct($_title, $_year, $_vote, Genre $_genre, $_image)
        {
            $this->title = $_title;
            $this->year = $_year;
            $this->genre = $_genre;
            $this->vote = $_vote;
            $this->image = $_image;
        }

        public function setStars() {
            for($i = 0; $i < $this->vote; $i++) {
                $this->star[] = '<i class="fa-solid fa-star"></i>';
            }
        }

        public function getYearsOld() 
        {
            $yearsOld = date('Y') - $this->year;
            return $yearsOld;
        }
    }
?>