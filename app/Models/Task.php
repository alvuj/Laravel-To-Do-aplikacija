<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['description','name_of_task'];


    public function isCompleted(){
        return $this->completed_at !== null;
    }
}
