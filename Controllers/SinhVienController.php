<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\SinhVienModel;
use MVC\Models\SinhVienRepository;

class SinhVienController extends Controller
{
    function index()
    {
        // require(ROOT . 'Models/Task.php');

        // $tasks = new Task();

        // $d['tasks'] = $tasks->showAllTasks();

        $sinhVienRepository = new SinhVienRepository();

        $d['sinhvien'] = $sinhVienRepository->getAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["name"]))
        {
            //require(ROOT . 'Models/Task.php');

            //$task= new Task();

            // if ($task->create($_POST["title"], $_POST["description"]))
            // {
            //     header("Location: " . WEBROOT . "tasks/index");
            // }

            $sinhVienRepository = new SinhVienRepository();
            $model = new SinhVienModel();
            $model->setName($_POST["name"]);
            $model->setAge($_POST["age"]);

            if ($sinhVienRepository->add($model))
            {
                header("Location: " . WEBROOT . "sinhvien/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        // require(ROOT . 'Models/Task.php');
        // $task= new Task();

        // $d["task"] = $task->showTask($id);

        $sinhVienRepository = new SinhVienRepository();
        $oldModel = $sinhVienRepository->get($id);
        $d["sinhvien"] = $oldModel->getProperties();

        if (isset($_POST["name"]))
        {
            // if ($task->edit($id, $_POST["title"], $_POST["description"]))
            // {
            //     header("Location: " . WEBROOT . "tasks/index");
            // }

            $model = new SinhVienModel();
            $model->setId($id);
            $model->setName($_POST["name"]);
            $model->setAge($_POST["age"]);

            if ($sinhVienRepository->add($model))
            {
                header("Location: " . WEBROOT . "sinhvien/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        //require(ROOT . 'Models/Task.php');

        $sinhVienRepository = new SinhVienRepository();
        if ($sinhVienRepository->delete($id))
        {
            header("Location: " . WEBROOT . "sinhvien/index");
        }
    }
}
?>