 
 <?php 

 class Movie {
    public $title;
    public $author;
    public $genre;
    public $year;
    public $image;

    public function __construct($_title, $_author, $_genre, $_year, $_image)
    {
        $this-> title = $_title;
        $this-> author = $_author;
        $this-> genre = $_genre;
        $this-> year = $_year;
        $this-> image = $_image;
        
    }

 }
 
 
