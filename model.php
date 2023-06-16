<?php

class Todo
{
    private $id;
    public $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function save()
    {
        global $db;

        $sql = 'INSERT INTO todos (name) VALUES (?)';
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->name]);
    }

    public static function getById($id)
    {
        global $db;

        $sql = 'SELECT * FROM todos WHERE id = ?';
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetchObject('Todo');
    }

    public static function getAll()
    {
        global $db;

        $sql = 'SELECT * FROM todos';
        $stmt = $db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAllObject('Todo');
    }

    public function delete()
    {
        global $db;

        $sql = 'DELETE FROM todos WHERE id = ?';
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->id]);
    }
}
