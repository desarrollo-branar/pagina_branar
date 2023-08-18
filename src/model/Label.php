<?php

namespace Branar\Blog\model;
use Branar\Blog\includes\Connection;
use PDO;

class Label {

    public function __construct( private string $name, private string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    private function getName(): string {
        return $this->name;
    }

    private function getColor(): string {
        return $this->color;
    }

    public function createLabel() {
        $db = new Connection();
        $query = $db->connect()->prepare('INSERT INTO labels(name, color) VALUES(:name, :color)');
        $query->execute(['name' => $this->getName(), 'color' => $this->getColor()]);
        $result = $query;

        return $result;
    }

    public function updateLabel(int $id) {
        $db = new Connection();
        $query = $db->connect()->prepare('UPDATE labels SET name = :name, color = :color WHERE id = :id');
        $query->execute([
            'name' => $this->getName(),
            'color' => $this->getColor(),
            'id' => $id
        ]);
        $result = $query;

        return $result;
    }

    public function createPostLabel(string $post_id, string $label_id) {
        $db = new Connection();
        $query = $db->connect()->prepare('INSERT INTO post_label(post_id, label_id) VALUES(:post_id, :label_id)');
        $query->execute(['post_id' => $post_id, 'label_id' => $label_id]);
        $result = $query;

        return $result;
    }

    public static function getAll(): array {
        $db = new Connection();
        $query = $db->connect()->query('SELECT * FROM labels');
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public static function getPostLabelAll(): array {
        $db = new Connection();
        $query = $db->connect()->query('SELECT * FROM post_label');
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public static function getPostLabelById(int $post_id): array {
        $db = new Connection();
        $query = $db->connect()->prepare('SELECT * FROM post_label pl
        INNER JOIN labels l ON pl.label_id = l.id 
        WHERE post_id = :post_id');
        $query->execute(['post_id' => $post_id]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}