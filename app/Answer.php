<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table="answers";
    protected $primaryKey="id";
    protected $fillable=['id','body','question_id','user_id'];
}
