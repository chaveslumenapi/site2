<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class UserJob extends Model{

    protected $table = 'tbl_userjob';
    protected $fillable = [
        'username', 'password', 'gender'
    ];

    public $timestamps = false;
    protected $primaryKey = 'jobid';

}