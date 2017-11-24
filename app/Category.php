<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";
    protected $fillable = ['label'];

    protected $primaryKey = 'idcategory';

    public $timestamps = false;
}
