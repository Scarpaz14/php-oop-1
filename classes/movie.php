 
 <?php 

 class Movie {
    public $title;
    public $author;
    public $genre;
    public $year;

    public function __construct($_title, $_author, $_genre, $_year)
    {
        $this-> title = $_title;
        $this-> author = $_author;
        $this-> genre = $_genre;
        $this-> year = $_year;
        
    }

 }
 
 
