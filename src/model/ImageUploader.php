<?php

namespace Branar\Blog\model;

class ImageUploader {
    private $targetDirectory = "./post_image/";
    public array $message = [];

    public function uploadImage($file) {
        $targetFile = $this->targetDirectory . basename($file['name']);
        $uploadOk = true;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Verificar si el archivo es una imagen real o una imagen falsa

        $check = getimagesize($file["tmp_name"]);
        if ($check !== false) {
            echo "El archivo es una imagen - " . $check["mime"] . ".";
            $uploadOk = true;
        } else {
            $this->message['response'] = false;
            $this->message['message'] = 'El archivo no es una imagen.';
            return $this->message;
        }
        
        // Verificar si el archivo ya existe
        if (file_exists($targetFile)) {
            $this->message['response'] = false;
            $this->message['message'] = 'Lo siento, el archivo ya existe.';
            return $this->message;
        }

        // Verificar el tamaño máximo del archivo (en este caso, 5MB)
        if ($file["size"] > 5000000) {
            $this->message['response'] = false;
            $this->message['message'] = 'Lo siento, el archivo es demasiado grande.';
            return $this->message;
        }

        // Permitir solo ciertos formatos de imagen
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $this->message['response'] = false;
            $this->message['message'] = 'Lo siento, solo se permiten archivos JPG, JPEG, PNG.';
            return $this->message;
        }

        // Verificar si $uploadOk está configurado en falso por algún motivo
        if (!$uploadOk) {
            echo "Lo siento, tu archivo no fue cargado.";
        } else {
            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                $this->message['response'] = true;
                $this->message['message'] = "El archivo " . htmlspecialchars(basename($file["name"])) . " ha sido cargado.";
                return $this->message;
            } else {
                echo "Lo siento, hubo un error al cargar tu archivo.";
            }
        }
    }
}

// Uso del método
// if (isset($_FILES["fileToUpload"])) {
//     $uploader = new ImageUploader();
//     $uploader->uploadImage($_FILES["fileToUpload"]);
// }
