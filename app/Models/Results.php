<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;
    protected $table = 'results';


    public function answer()
    {
        return $this->hasOne(Answers::class,'id','answers_id');
     
    }

}
