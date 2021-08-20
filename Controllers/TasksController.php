<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\TaskModel;

;
use MVC\Models\TaskRepository;

class TasksController extends Controller
{
    function index()
    {
        // require(ROOT . 'Models/Task.php');

        // $tasks = new Task();

        // $d['tasks'] = $tasks->showAllTasks();

        $taskRepository = new TaskRepository();

        $d['tasks'] = $taskRepository->getAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            //require(ROOT . 'Models/Task.php');

            //$task= new Task();

            // if ($task->create($_POST["title"], $_POST["description"]))
            // {
            //     header("Location: " . WEBROOT . "tasks/index");
            // }

            $taskRepository = new TaskRepository();
            $model = new TaskModel();
            $model->setTitle($_POST["title"]);
            $model->setDescription($_POST["description"]);

            if ($taskRepository->add($model))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        // require(ROOT . 'Models/Task.php');
        // $task= new Task();

        // $d["task"] = $task->showTask($id);

        $taskRepository = new TaskRepository();
        $oldModel = $taskRepository->get($id);
        $d["task"] = $oldModel->getProperties();

        if (isset($_POST["title"]))
        {
            // if ($task->edit($id, $_POST["title"], $_POST["description"]))
            // {
            //     header("Location: " . WEBROOT . "tasks/index");
            // }

            $model = new TaskModel();
            $model->setId($id);
            $model->setTitle($_POST["title"]);
            $model->setDescription($_POST["description"]);

            if ($taskRepository->add($model))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        //require(ROOT . 'Models/Task.php');

        $taskRepository = new TaskRepository();
        if ($taskRepository->delete($id))
        {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}
?>