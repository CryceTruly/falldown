<?php
class Post{
    //db
    private $db=null;
    private $table="posts";

    public $id;
    public $name;
    public $title;
    public $body;
    public $author;
    public $created_at;

    public function __construct($db)
    {
        $this->db=$db;
        
    }


    //getposts

    public function read(){
        $query='SELECT c.name AS category_name p.title AS title,p.body AS body,p.author
         AS author, p.created_at AS created_at,
        FROM '.$this->table.' p
LEFT JOIN categories c ON p.category_id=c.id ORDER BY p.created_at DESC;
        ';

        //repared stement
        $stmt=$handler->prepare($query);

        $stmt->execute();

        return $stmt;
    }
}

?>