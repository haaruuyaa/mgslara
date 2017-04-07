<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterHelper extends Model
{
    //
    protected $guarded = ['helperId'];
    
    protected $table = 'master-helper';
}
