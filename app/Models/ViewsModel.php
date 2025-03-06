<?php

namespace App\Models;

use CodeIgniter\Model;

class ViewsModel extends Model
{
    protected $table = 'views';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'code', 'number_views'];

    public function updateViewByCode($code)
    {
        return $this->where('code', $code)
            ->set('number_views', 'number_views+1', false)
            ->update();
    }

    public function createNewView($code)
    {
        return $this->insert([
            'code' => $code,
            'number_views' => 1
        ]);
    }

    public function viewCodeExist($code)
    {
        return $this->where('code', $code)->first() ? true : false;
    }
}
