<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $fillable = [
        'class_name', 'publication_status',
    ];
}
