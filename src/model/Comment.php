<?php

namespace Branar\Blog\model;
use Branar\Blog\includes\Connection;
use PDO;

class Comment
{
    public array $message = [];

    public function __construct(
        private int $post_id,
        private int $user_id,
        public string $content
    )
    {
        $this->post_id = $post_id;
        $this->user_id = $user_id;
        $this->content = $content;
    }

    public function get_content()
    {
        return $this->get_content();
    }

    public function get_message()
    {
        return $this->get_message();
    }

    public function get_all(): array
    {
        $db = new Connection();
        $sql = "SELECT * FROM comments";
        $query = $db->connect()->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function get_comment_by_id(int $id): array
    {
        $db = new Connection();
        $sql = "SELECT * FROM comments WHERE id = :id";
        $query = $db->connect()->prepare($sql);
        $query->execute(['id' => $id]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function create_comment()
    {
        $db = new Connection();
        $sql = "INSERT INTO comments(post_id, user_id, content) VALUES(:post_id, :user_id, :content)";
        $query = $db->connect()->prepare($sql);
        $query->execute([
            'post_id' => $this->post_id,
            'user_id' => $this->user_id,
            'content' => $this->get_content()
        ]);
        $result = $query;

        return $result;
    }

    public function update_comment(int $id)
    {
        $db = new Connection();
        $sql = "UPDATE comments SET post_id = :post_id, user_id = :user_id, content = :content WHERE id = :id";
        $query = $db->connect()->prepare($sql);
        $query->execute([
            'post_id' => $this->post_id,
            'user_id' => $this->user_id,
            'content' => $this->content,
            'id' => $id
        ]);
        $result = $query;

        return $result;
    }

    public function get_all_comment_data_by_post_id(int $post_id)
    {
        $db = new Connection();
        $sql = "SELECT * FROM comments c
        INNER JOIN users u ON c.user_id = u.id
        WHERE c.post_id = :post_id";
        $query = $db->connect()->prepare($sql);
        $query->execute(['post_id' => $post_id]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}