<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'school_id', 'class_id','section_id','student_name','father_name','mobile_number','student_village', 'publication_status',
    ];

}
