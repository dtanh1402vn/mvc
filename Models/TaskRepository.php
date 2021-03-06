<?php

namespace MVC\Models;

use MVC\Models\TaskResourceModel;
use MVC\Models\TaskModel;

class TaskRepository
{
    public function add(TaskModel $model)
    {
        $taskResourceModel = new TaskResourceModel;
        return $taskResourceModel->save($model);
    }
    public function get($id)
    {
        $taskResourceModel = new TaskResourceModel;
        return $taskResourceModel->get($id);
    }
    public function getAll()
    {
        $taskResourceModel = new TaskResourceModel;
        return $taskResourceModel->getAll();
    }
    public function delete($id)
    {
        $taskResourceModel = new TaskResourceModel;
        return $taskResourceModel->delete($id);
    }
}

?>