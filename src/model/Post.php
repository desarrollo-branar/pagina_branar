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

    /**
     * Get title 
     *
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }
    /**
     * Get Desciption
     *
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }
    /**
     * Create Post
     *
     * @param integer $author_id
     * @param integer $category_id
     * @param string $featured_image
     * @return void
     */
    public function createPost(
        int $author_id,
        int $category_id,
        string $featured_image
    ){

        $file_name = $this->fileNameToLowerAndSplit();

        $gestor = fopen("./src/entries/{$file_name}", "a+");

        # Crear contenido del html
        $content_html = "<div class=\"blog-card\">\n\t<header class=\"blog-card-header\">\n\t\t<div></div>\n\t\t<h1 class=\"title\"></h1>\n\t\t <p class=\"blog-card-description\"></p>\n\t</header>\n\t<div class=\"blog-card-content border p-4\">\n\t</div>\n</div>\n";
        
        $uniqueTitle = $this->uniqueTitle();
        # If el titulo no existe en la base de datos
        if ( $uniqueTitle['response'] == true) {
            # Si se pudo crear el archivo con exito
            if($gestor){
                # Escribir en el archivo
                fwrite($gestor, $content_html);
                fclose($gestor);

                $db = new Connection();
                $query = $db->connect()->prepare('INSERT INTO posts(title, description, author_id, category_id, featured_image, file, status) VALUES(:title, :description, :author_id, :category_id, :featured_image, :file, :status)');
                $query->execute([
                    'title' => $this->getTitle(),
                    'description' => $this->getDescription(),
                    'author_id' => $author_id,
                    'category_id' => $category_id,
                    'featured_image' => $featured_image,
                    'file' => $file_name,
                    'status' => 0
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
    /**
     * Update Post
     *
     * @param integer $author_id
     * @param integer $category_id
     * @param string $featured_image
     * @param string $status
     * @param string $updated_at
     * @param integer $id
     * @return void
     */
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
        $old_file_path = "./src/entries/{$post[0]['file']}";
        $new_file_path = "./src/entries/{$file_name}";

        if ( $post[0]['title'] !== $this->getTitle() ) {
            $file_name = $this->fileNameToLowerAndSplit();
            rename($old_file_path, $new_file_path);
        }

        $db = new Connection();
        if ($featured_image != '' || !empty($featured_image)) {
            $query = $db->connect()->prepare('UPDATE posts SET title = :title, description = :description, author_id = :author_id, category_id = :category_id, featured_image = :featured_image, file = :file, status = :status, updated_at = :updated_at WHERE id = :id');
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
        }else{
            $query = $db->connect()->prepare('UPDATE posts SET title = :title, description = :description, author_id = :author_id, category_id = :category_id, file = :file, status = :status, updated_at = :updated_at WHERE id = :id');
            $query->execute([
                'title' => $this->getTitle(),
                'description' => $this->getDescription(),
                'author_id' => $author_id,
                'category_id' => $category_id,
                'file' => $file_name,
                'status' => $status,
                'updated_at' => $updated_at,
                'id' => $id
            ]);
            $result = $query;
        }

        if ($result) {
            $this->message['response'] = true;
            $this->message['message'] = 'Publicacion actualizada con exito';
            $this->message['content'] = $result;
        }else{
            $this->message['response'] = false;
            $this->message['message'] = 'Lo sentimos, intentalo de nuevo';
            $this->message['content'] = $result;
        }

        return $this->message;
    }
    /**
     * Get all data post
     *
     * @return array
     */
    public static function getAll(): array {
        $db = new Connection();
        $query = $db->connect()->query('SELECT * FROM posts');
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    /**
     * Get Data post for id
     *
     * @param integer $id
     * @return array
     */
    public static function getPostById(int $id): array {
        $db = new Connection();
        $query = $db->connect()->prepare('SELECT * FROM posts WHERE id = :id');
        $query->execute(['id' => $id]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    /**
     * Get all the data related to the post
     *
     * @return array
     */
    public static function getAllThePublishingInformation(): array {
        $db = new Connection();
        $query = $db->connect()->query("SELECT p.id as post_id, p.title, p.description, p.author_id, p.category_id, p.views, p.file, p.status, p.featured_image,p.created_at,
        a.id , a.user_id, a.picture,
        u.first_name , u.last_name
        FROM posts p
        INNER JOIN authors a ON p.author_id = a.id
        INNER JOIN users u ON a.user_id = u.id ORDER BY p.status");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    /**
     * 
     * Get all publishing information if enabled
     *
     * @return array
     */
    public static function obtain_all_publication_information_if_enabled(): array {
        $db = new Connection();
        $query = $db->connect()->query("SELECT p.id as post_id, p.title, p.description, p.author_id, p.category_id, p.views, p.file, p.status, p.featured_image,p.created_at,
        a.id , a.user_id, a.picture,
        u.first_name , u.last_name
        FROM posts p
        INNER JOIN authors a ON p.author_id = a.id
        INNER JOIN users u ON a.user_id = u.id 
        WHERE p.status = 1 ORDER BY p.status");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public static function getPostByCategoryId(int $id) {
        $db = new Connection();
        $query = $db->connect()->prepare("SELECT p.id as post_id, p.title, p.description, p.author_id, p.category_id, p.views, p.file, p.status, p.featured_image,p.created_at,
        a.id , a.user_id, a.picture,
        u.first_name , u.last_name
        FROM posts p
        INNER JOIN authors a ON p.author_id = a.id
        INNER JOIN users u ON a.user_id = u.id
        WHERE p.category_id = :id AND p.status = 0");
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

    public static function filterPost($labels_ids, $categories_ids) {
        $db = new Connection();

        
        if (($labels_ids != '' || $labels_ids != null) && ($categories_ids != '' || $categories_ids != null)) {
            $labels_ids_string = implode(',', $labels_ids);
            $categories_ids_string = implode(',', $categories_ids);

            $sql = "SELECT p.id as post_id, p.title, p.description, p.author_id, p.views, p.file, p.status, p.featured_image, p.created_at, p.views,
                    GROUP_CONCAT(DISTINCT pl.label_id) AS label_ids, GROUP_CONCAT(DISTINCT c.name) AS category_names,
                    a.id , a.user_id, a.picture, u.first_name, u.last_name
                    FROM posts p
                    INNER JOIN categories c ON p.category_id = c.id
                    INNER JOIN post_label pl ON p.id = pl.post_id
                    INNER JOIN authors a ON p.author_id = a.id
                    INNER JOIN users u ON a.user_id = u.id
                    WHERE pl.label_id IN ($labels_ids_string)
                    OR p.category_id IN ($categories_ids_string)
                    GROUP BY p.id, p.title";
        
            $query = $db->connect()->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
        
            return $result;
        }elseif ($labels_ids == '' || $labels_ids == null) {
            $categories_ids_string = implode(',', $categories_ids);
            $sql = "SELECT p.id as post_id, p.title, p.description, p.author_id, p.views, p.file, p.status, p.featured_image, p.created_at, p.views,
                    GROUP_CONCAT(DISTINCT pl.label_id) AS label_ids, GROUP_CONCAT(DISTINCT c.name) AS category_names,
                    a.id , a.user_id, a.picture, u.first_name, u.last_name
                    FROM posts p
                    INNER JOIN categories c ON p.category_id = c.id
                    INNER JOIN post_label pl ON p.id = pl.post_id
                    INNER JOIN authors a ON p.author_id = a.id
                    INNER JOIN users u ON a.user_id = u.id
                    WHERE p.category_id IN ($categories_ids_string)
                    GROUP BY p.id, p.title";

            $query = $db->connect()->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }else{
            $labels_ids_string = implode(',', $labels_ids);
            $sql = "SELECT p.id as post_id, p.title, p.description, p.author_id, p.views, p.file, p.status, p.featured_image, p.created_at, p.views,
                    GROUP_CONCAT(DISTINCT pl.label_id) AS label_ids, GROUP_CONCAT(DISTINCT c.name) AS category_names,
                    a.id , a.user_id, a.picture, u.first_name, u.last_name
                    FROM posts p
                    INNER JOIN categories c ON p.category_id = c.id
                    INNER JOIN post_label pl ON p.id = pl.post_id
                    INNER JOIN authors a ON p.author_id = a.id
                    INNER JOIN users u ON a.user_id = u.id
                    WHERE pl.label_id IN ($labels_ids_string)
                    GROUP BY p.id, p.title";

            $query = $db->connect()->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        }
    }

    public static function filter_post_if_enable($labels_ids, $categories_ids) {
        $db = new Connection();
    
        
        if (($labels_ids != '' || $labels_ids != null) && ($categories_ids != '' || $categories_ids != null)) {
            $labels_ids_string = implode(',', $labels_ids);
            $categories_ids_string = implode(',', $categories_ids);

            $sql = "SELECT p.id as post_id, p.title, p.description, p.author_id, p.views, p.file, p.status, p.featured_image, p.created_at, p.views,
                    GROUP_CONCAT(DISTINCT pl.label_id) AS label_ids, GROUP_CONCAT(DISTINCT c.name) AS category_names,
                    a.id , a.user_id, a.picture, u.first_name, u.last_name
                    FROM posts p
                    INNER JOIN categories c ON p.category_id = c.id
                    INNER JOIN post_label pl ON p.id = pl.post_id
                    INNER JOIN authors a ON p.author_id = a.id
                    INNER JOIN users u ON a.user_id = u.id
                    WHERE pl.label_id IN ($labels_ids_string)
                    OR p.category_id IN ($categories_ids_string)
                    GROUP BY p.id, p.title";
        
            $query = $db->connect()->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
        
            return $result;
        }elseif ($labels_ids == '' || $labels_ids == null) {
            $categories_ids_string = implode(',', $categories_ids);
            $sql = "SELECT p.id as post_id, p.title, p.description, p.author_id, p.views, p.file, p.status, p.featured_image, p.created_at, p.views,
                    GROUP_CONCAT(DISTINCT pl.label_id) AS label_ids, GROUP_CONCAT(DISTINCT c.name) AS category_names,
                    a.id , a.user_id, a.picture, u.first_name, u.last_name
                    FROM posts p
                    INNER JOIN categories c ON p.category_id = c.id
                    INNER JOIN post_label pl ON p.id = pl.post_id
                    INNER JOIN authors a ON p.author_id = a.id
                    INNER JOIN users u ON a.user_id = u.id
                    WHERE p.category_id IN ($categories_ids_string)
                    GROUP BY p.id, p.title";

            $query = $db->connect()->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }else{
            $labels_ids_string = implode(',', $labels_ids);
            $sql = "SELECT p.id as post_id, p.title, p.description, p.author_id, p.views, p.file, p.status, p.featured_image, p.created_at, p.views,
                    GROUP_CONCAT(DISTINCT pl.label_id) AS label_ids, GROUP_CONCAT(DISTINCT c.name) AS category_names,
                    a.id , a.user_id, a.picture, u.first_name, u.last_name
                    FROM posts p
                    INNER JOIN categories c ON p.category_id = c.id
                    INNER JOIN post_label pl ON p.id = pl.post_id
                    INNER JOIN authors a ON p.author_id = a.id
                    INNER JOIN users u ON a.user_id = u.id
                    WHERE pl.label_id IN ($labels_ids_string)
                    GROUP BY p.id, p.title";

            $query = $db->connect()->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        }

    }
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