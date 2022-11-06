<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInformation extends Model
{
    protected $table = 'student_information';
    protected $primaryKey = 'id';
    protected $guarded = [];
    //protected $fillable = ['', '', ''];
    use HasFactory;
}
