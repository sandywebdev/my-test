<?php

class TodoController
{
    public function index()
    {
        // Get all todos from database
        $todos = Todo::getAll();

        // Include the view
        include 'index.php';
    }

    public function create()
    {
        // If name is set, create new todo
        if (isset($_POST['name'])) {
            $todo = new Todo($_POST['name']);
            $todo->save();
        }

        // Include the view
        include 'create.php';
    }

    public function edit($id)
    {
        // Get todo by id from database
        $todo = Todo::getById($id);

        // If name is set, update todo
        if (isset($_POST['name'])) {
            $todo->name = $_POST['name'];
            $todo->save();
        }

        // Include the view
        include 'edit.php';
    }

    public function delete($id)
    {
        // Get todo by id from database
        $todo = Todo::getById($id);

        // Delete todo
        $todo->delete();

        // Redirect to index page
        header('Location: /');
    }

    // Define the getAll() method
    public function getAll()
    {
        // Get all todos from database
        $todos = Todo::getAll();

        // Return the todos
        return $todos;
    }
}


