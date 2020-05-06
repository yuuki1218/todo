<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Folder extends Model
{
      public function tasks()
    {
        return $this->hasMany('App\Task');
    }

}
