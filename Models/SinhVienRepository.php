<?php

namespace MVC\Models;

use MVC\Models\SinhVienResourceModel;
use MVC\Models\SinhvienModel;

class SinhVienRepository
{
    public function add(SinhVienModel $model)
    {
        $sinhVienResourceModel = new SinhVienResourceModel;
        return $sinhVienResourceModel->save($model);
    }
    public function get($id)
    {
        $sinhVienResourceModel = new SinhVienResourceModel;
        return $sinhVienResourceModel->get($id);
    }
    public function getAll()
    {
        $sinhVienResourceModel = new SinhVienResourceModel;
        return $sinhVienResourceModel->getAll();
    }
    public function delete($id)
    {
        $sinhVienResourceModel = new SinhVienResourceModel;
        return $sinhVienResourceModel->delete($id);
    }
}

?>