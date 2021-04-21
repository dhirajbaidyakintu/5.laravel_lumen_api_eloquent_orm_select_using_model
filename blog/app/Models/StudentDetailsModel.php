<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class StudentDetailsModel extends Model{
    /*
    --------------------------------------------------------------------------
    Model Variable Preparation (For connect with your database table)
    --------------------------------------------------------------------------
    + protected $table = 'table name';
    + protected $primaryKey = 'id';
    + public $incrementing = true;
    + protected $keyType = 'string';
    + public $timestamps = false;
    + protected $dateFormet = 'U';
    */
    protected $table = 'student_details';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
}
