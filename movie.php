<?php
class Movie
{
    public $title;
    public $description;
    public $language;
    public $genre;
    public $length;
    public $vote;
    function __construct($title, $description, $language, $genre, $length, $vote)
    {
        $this->title = $title;
        $this->description = $description;
        $this->language = $language;
        $this->genre = $genre;
        $this->length = $length;
        $this->vote = $vote;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }
}


$matrix = new Movie('matrix', 'Lorem ipsum matrix...', 'en', 'science fiction', '200', '7');
// var_dump($matrix);
$avatar = new Movie('Avatar', 'Lorem ipsum avatar...', 'en', 'fantasy', '190', '8');
// var_dump($avatar);