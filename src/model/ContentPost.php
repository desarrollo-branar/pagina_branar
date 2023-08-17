<?php

namespace Branar\Blog\includes;
use Branar\Blog\includes\Connection;

class ContentPost{

    public function __construct(
        private string $file,
        private int $post_id,
        private string $status
    )
    {
        $this->file = $file;
        $this->post_id = $post_id;
        $this->status = $status;
    }

    public function getFile(){
        return $this->file;
    }

    public function createFileAndWrite($content, $priority_id, $class_style, $img) {
        # Cambiar los espacios en blanco del archivo por -
        $file_name = str_replace(' ', '-', $this->getFile());
        $file_name = $file_name.'.md';
        $file_name = strtolower($file_name);

        # Abrir archivo
        $gestor = fopen("../entries/{$file_name}", "a+");

        $response = [
            'response' => '',
            'message' => ''
        ];

        # Verificar que el contenido no este vacio
        if (!empty($content)) {
            if ($gestor) {

                # Crear contenido del html
                $content_html = "<section class='{$class_style}' data-id='{$priority_id}'>\n";
                $content_html .= "\t<p>{$content}</p>\n\t<div class='{$class_style}'>\n\t\t<img src='{$img}' alt='{$this->getFile()}'>\n\t</div>\n";
                $content_html .= "</section>\n";

                # Escribir en el archivo
                fwrite($gestor, $content_html);
                fclose($gestor);

                $response['response'] = True;
                $response['message'] = 'Contenido guardado con exito';
                return $response;
            }else{
                $response['response'] = True;
                $response['message'] = 'No se pudo abrir el archivo para escritura';
                return $response;
            }
        }else{
            $response['response'] = True;
            $response['message'] = 'El contenido está vacío. No se guardó en el archivo';
            return $response;
        }
    }

    public function createContentPost(int $post_id, string $status){
        $db = new Connection();
        $query = $db->connect()->prepare('INSERT INTO content_posts(file, post_id,status) VALUES(:file, :post_id, :status)');
        $query->execute([
            'file' => $this->getFile(),
            'post_id' => $post_id,
            'status' => $status
        ]);
        $result = $query;

        return $result;
    }

    public function updateContentPost(int $post_id, string $status){
        $db = new Connection();
        $query = $db->connect()->prepare('UPDATE content_posts SET file = :file, post_id = :post_id');
        $query->execute([
            'file' => $this->getFile(),
            'post_id' => $post_id,
            'status' => $status
        ]);
        $result = $query;

        return $result;
    }
}

$contentPost = new ContentPost('10 secretos de Javascript', 1, 'enabled');
$content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit mollitia esse laborum quam libero illum cum animi quos earum at? 3';

//$create = $contentPost->createFileAndWrite($content, 3,'center', 'javascript3.png');
