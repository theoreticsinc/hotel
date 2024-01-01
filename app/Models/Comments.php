<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(Comments::class,'user_id','id');
    }

    public function post(){
        return $this->belongsTo(Comments::class,'post_id','id');
    }



}
