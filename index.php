<?php 

class Movie {
    public $title;
    public $genre;
    public $director;
    public $year;
    public $language;
    public $plot;
    private $vote;

    public function __construct($_title,$_genre,$_year,$_vote)
    {
        $this->title=$_title;
        $this->genre=$_genre;
        $this->year=$_year;
        $this->setVote($_vote);
    }
    public function setVote($_vote){
        $this->vote=$_vote/2;
    }
}