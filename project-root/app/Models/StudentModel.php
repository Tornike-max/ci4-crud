<?php

namespace App\Models;

use CodeIgniter\Model;


class StudentModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'email', 'phone', 'course'
    ];

    public function findStudents($id = '')
    {
        if ($id !== '') {
            return $this->findAll();
        } else {
            return $this->find($id);
        }
    }
}
