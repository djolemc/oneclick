<?php


class Comment
{
    public $profile_id;
    public $comment_text;
    private $database;

    public function __construct($db)
    {
        $this->database = $db;
    }

    //Upisuje novi komentar u bazu
    public function insertComment()
    {
        $this->profile_id = $_POST['profile_id'];
        $this->comment_text = $_POST['comment_text'];

        $this->database->query('INSERT INTO comments (profile_id, comment_text) VALUES (:profile_id, :comment_text)');
        $this->database->bind(':profile_id', $this->profile_id);
        $this->database->bind(':comment_text', $this->comment_text);

        $this->database->execute();
    }

    //Cita sve komentare vezane za odredjen profil
    public function getAllComments($id)
    {
        $this->database->query("SELECT * FROM `comments` where profile_id=:id order by created desc");
        $this->database->bind(':id', $id);
        return $this->database->resultset();
    }

    //Odobrava komentar za prikazivanje
    public function enableComment($id)
    {
        $this->database->query('UPDATE comments SET is_enabled=1 where comments.comment_id=:id');
        $this->database->bind(':id', $id);

        $this->database->execute();
    }

    public function deleteComment($id)
    {
        $this->database->query('delete from comments where comment_id=:id');
        $this->database->bind(':id', $id);

        $this->database->execute();
    }


}