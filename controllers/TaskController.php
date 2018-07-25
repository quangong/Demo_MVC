<?php

namespace App\Controllers;

use App\App\App;
use App\Models\Task;

class TaskController
{
    //list task
    public function index()
    {
        $tasks = App::get('db')->all('tasks', Task::class);
        $title = 'DoToList System';

        return view('tasks.index', compact('tasks', 'title'));
    }

    //add task
    public function add()
    {
        try {
            App::get('db')->insert('tasks', $_REQUEST);
        } catch (Exception $e) {
            require "views/500.php";
        }

        return redirect('');
    }

    //delete task
    public function delete()
    {
        try {
            App::get('db')->delete('tasks', $_GET['id']);
        } catch (Exception $e) {
            require 'views/500.php';
        }

        return redirect('');
    }
}
