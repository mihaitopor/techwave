<?php

namespace App\Services;

use App\Models\ViewsModel;

class ViewService
{
    protected $vm;

    public function __construct()
    {
        $this->vm = new ViewsModel();
    }

    public function increaseViewByCode($viewCode)
    {
        if ($this->vm->viewCodeExist($viewCode)) {
            $this->vm->updateViewByCode($viewCode);
        } else {
            $this->vm->createNewView($viewCode);
        }
    }
}
