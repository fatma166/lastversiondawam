<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{

    protected $fillable = [
        'name','company_id','enroll_date','balance','description'
    ];


}
