<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    use HasFactory;

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getName()
    {
        return $this->attributes['tensp'];
    }
    public function setName($tensp)
    {
        $this->attributes['tensp'] = $tensp;
    }

    public function getImage()
    {
        return $this->attributes['hinhanh'];
    }
    public function setImage($hinhanh)
    {
        $this->attributes['hinhanh'] = $hinhanh;
    }
}
