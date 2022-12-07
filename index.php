<!-- all'interno della classe è definito almeno un metodo -->
<!-- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<!-- Bonus 1: -->
<!-- Modificare la classe Movie in modo che accetti piú di un genere. -->
<!-- Bonus 2: -->
<!-- Creare un layout completo per stampare a schermo una lista di movies. -->

<?php
class Movie
{
    public $title;
    public $description;
    public $language;
    public $length;
    public $vote;
    function __construct($title, $description, $language, $length, $vote)
    {
        $this->title = $title;
        $this->description = $description;
        $this->language = $language;
        $this->length = $length;
        $this->vote = $vote;
    }
}
var_dump(new Movie('matrix', 'desc', 'lang', 'length', 'vote'));
