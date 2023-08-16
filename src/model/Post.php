<?php

namespace Branar\Blog\model;

use Branar\Blog\includes\Connection;
use League\CommonMark\CommonMarkConverter; // Agrega esta línea
use PDO;
use Error;

class Post extends Connection{
    
    public function __construct(
        public string $title,
        public string $description,
        
    )
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDescription(){
        return $this->description;
    }

    public function createPost(
        int $author_id,
        int $category_id,
        string $featured_image
    ){
        $db = new Connection();
        $query = $db->connect()->prepare('INSERT INTO posts(title, description, author_id, category_id, featured_image) VALUES(:title, :description, :author_id, :category_id, :featured_image)');
        $query->execute([
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'author_id' => $author_id,
            'category_id' => $category_id,
            'featured_image' => $featured_image
        ]);
        $result = $query;

        return $result;
    }

    public function updatePost(
        int $author_id,
        int $category_id,
        string $featured_image,
        string $updated_at,
        int $id
    ){
        $db = new Connection();
        $query = $db->connect()->prepare('UPDATE posts SET  title = :title, description = :description, author_id = :author_id, category_id = :category_id, featured_image = :featured_image, updated_at = :updated_at WHERE id = :id');
        $query->execute([
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'author_id' => $author_id,
            'category_id' => $category_id,
            'featured_image' => $featured_image,
            'updated_at' => $updated_at,
            'id' => $id
        ]);
        $result = $query;

        return $result;
    }

    public static function getAll(){
        $db = new Connection();
        $query = $db->connect()->query('SELECT * FROM posts');
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getPostById(int $id){
        $query = $this->connect()->prepare('SELECT * FROM posts WHERE id = :id');
        $query->execute(['id' => $id]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    // public function getContent() {
    //     $converter = new CommonMarkConverter(['html_input' => 'escape', 'allow_unsafe_links' => false]);

    //     if(file_exists($this->getFileName())){
    //         $stream = fopen($this->getFileName(),'r');
    //         $content = fread($stream, filesize($this->getFileName()));
    //         return $converter->convert($content);
    //     }else{
    //         $fileUpdated = $this->getFileNameWithoutDash();
    //         if(file_exists($this->getFileName())){
    //             $stream = fopen($this->getFileName(),'r');
    //             $content = fread($stream, filesize($this->getFileName()));
            
    //             return $converter->convert($content);
    //         }
    //     }
        
    
    // }

    // public function getFileName(){
    //     $dir = Url::getRootPath();
    //     $filename = "{$dir}/entries/{$this->file}";

    //     return $filename;
    // }

    // public static function getPosts(){

    //     $posts = [];
    //     $files = scandir(Url::getRootPath() . '/entries');

    //     foreach ($files as $file) {
    //         if(strpos($file, '.md') > 0) {
    //             $post = new Post($file);
    //             array_push($posts, $post);
    //         }
    //     }

    //     return $posts;

    // }

    // public function getUrl(){
    //     $url = substr($this->file, 0, strpos($this->file, '.md'));
    //     $title = str_replace(' ', "-", $url);
    //     return "http://localhost/pagina_branar/?post={$title}";
    // }

    // private function getFileNameWithoutDash(){
    //     $title = str_replace('-', ' ', $this->file);
    //     $this->file = $title;
    //     return $title;
    // }

    // public function getPostName() {
    //     $title = $this->file;
    //     $title = str_replace('-', ' ', $this->file);
    //     $title = str_replace('.md', '', $this->file);
    //     $this->file = $title;
    //     return $title;
    // }
}