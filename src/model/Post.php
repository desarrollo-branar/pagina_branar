<?php

namespace Branar\Blog\model;

use Branar\Blog\includes\Connection;
use League\CommonMark\CommonMarkConverter; // Agrega esta línea
use PDO;
use Error;

class Post extends Connection{
    public array $message = [
        'response' => false,
        'message' => '',
        'content' => ''
    ];

    public function __construct(
        public string $title,
        public string $description,
        
    )
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function createPost(
        int $author_id,
        int $category_id,
        string $featured_image
    ){

        $file_name = $this->fileNameToLowerAndSplit();

        $gestor = fopen("./entries/{$file_name}", "w");

        # Crear contenido del html
        $content_html = "<!DOCTYPE html>\n<html lang='en'>\n<head>\n\t<meta charset='UTF-8'>\n\t<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n\t<title>Document</title>\n</head>\n<body>\n\n</body>\n</html>";
        
        $uniqueTitle = $this->uniqueTitle();
        # If el titulo no existe en la base de datos
        if ( $uniqueTitle['response'] == true) {
            # Si se pudo crear el archivo con exito
            if($gestor){
                # Escribir en el archivo
                fwrite($gestor, $content_html);
                fclose($gestor);

                $db = new Connection();
                $query = $db->connect()->prepare('INSERT INTO posts(title, description, author_id, category_id, featured_image, file) VALUES(:title, :description, :author_id, :category_id, :featured_image, :file)');
                $query->execute([
                    'title' => $this->getTitle(),
                    'description' => $this->getDescription(),
                    'author_id' => $author_id,
                    'category_id' => $category_id,
                    'featured_image' => $featured_image,
                    'file' => $file_name
                ]);
                $result = $query;

                $this->message['response'] = true;
                $this->message['message'] = 'Publicacion creada con exito';
                $this->message['content'] = $result;
                return $this->message;
            }else{
                $this->message['response'] = false;
                $this->message['message'] = 'Lo sentimos, tu publicacion no pudo ser procesada';
                return $this->message;
            }
        }else{
            return $uniqueTitle;
        }
    }

    public function updatePost(
        int $author_id,
        int $category_id,
        string $featured_image,
        string $status,
        string $updated_at,
        int $id
    ){

        $file_name = $this->fileNameToLowerAndSplit();

        $uniqueTitle = $this->uniqueTitle();

        $post = $this->getPostById($id);
        $old_file_path = "./entries/{$post[0]['file']}";
        $new_file_path = "./entries/{$file_name}";

        if ( $post[0]['title'] !== $this->getTitle() ) {
            $file_name = $this->fileNameToLowerAndSplit();
            rename($old_file_path,$new_file_path);
        }

        $db = new Connection();
        $query = $db->connect()->prepare('UPDATE posts SET  title = :title, description = :description, author_id = :author_id, category_id = :category_id, featured_image = :featured_image, file = :file, status = :status, updated_at = :updated_at WHERE id = :id');
        $query->execute([
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'author_id' => $author_id,
            'category_id' => $category_id,
            'featured_image' => $featured_image,
            'file' => $file_name,
            'status' => $status,
            'updated_at' => $updated_at,
            'id' => $id
        ]);
        $result = $query;

        $this->message['response'] = true;
        $this->message['message'] = 'Publicacion actualizada con exito';
        $this->message['content'] = $result;
        return $this->message;
    }

    public static function getAll(): array {
        $db = new Connection();
        $query = $db->connect()->query('SELECT * FROM posts');
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getPostById(int $id): array {
        $db = new Connection();
        $query = $db->connect()->prepare('SELECT * FROM posts WHERE id = :id');
        $query->execute(['id' => $id]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    private function uniqueTitle(): array {
        $db = new Connection();
        $query = $db->connect()->prepare('SELECT * FROM posts WHERE title = :title');
        $query->execute(['title' => $this->getTitle()]);
        $result = $query->fetchAll();

        if( count($result) > 0 ){
            $this->message['response'] = false;
            $this->message['message'] = "El titulo de tu publicacion ({$this->getTitle()}) ya existe";
            $this->message['content'] = '';
            return $this->message;
        }else{
            $this->message['response'] = true;
            $this->message['message'] = "Puedes usar este titulo";
            $this->message['content'] = '';
            return $this->message;
        }
    }

    private function fileNameToLowerAndSplit(): string {
        $filename = str_replace(' ', '-', $this->getTitle());
        $filename = $filename.'.html';
        $filename = strtolower($filename);

        return $filename;
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