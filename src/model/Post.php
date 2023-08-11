<?php

namespace Branar\Blog\model;

use League\CommonMark\CommonMarkConverter; // Agrega esta línea
use Error;

class Post{
    
    public function __construct(private string $file)
    {
        
    }

    public function getContent() {
        $converter = new CommonMarkConverter(['html_input' => 'escape', 'allow_unsafe_links' => false]);

        if(file_exists($this->getFileName())){
            $stream = fopen($this->getFileName(),'r');
            $content = fread($stream, filesize($this->getFileName()));
            return $converter->convert($content);
        }else{
            $fileUpdated = $this->getFileNameWithoutDash();
            if(file_exists($this->getFileName())){
                $stream = fopen($this->getFileName(),'r');
                $content = fread($stream, filesize($this->getFileName()));
            
                return $converter->convert($content);
            }
        }
        
    
    }

    public function getFileName(){
        $dir = Url::getRootPath();
        $filename = "{$dir}/entries/{$this->file}";

        return $filename;
    }

    public static function getPosts(){

        $posts = [];
        $files = scandir(Url::getRootPath() . '/entries');

        foreach ($files as $file) {
            if(strpos($file, '.md') > 0) {
                $post = new Post($file);
                array_push($posts, $post);
            }
        }

        return $posts;

    }

    public function getUrl(){
        $url = substr($this->file, 0, strpos($this->file, '.md'));
        $title = str_replace(' ', "-", $url);
        return "http://localhost/pagina_branar/?post={$title}";
    }

    private function getFileNameWithoutDash(){
        $title = str_replace('-', ' ', $this->file);
        $this->file = $title;
        return $title;
    }

    public function getPostName() {
        $title = $this->file;
        $title = str_replace('-', ' ', $this->file);
        $title = str_replace('.md', '', $this->file);
        $this->file = $title;
        return $title;
    }
}