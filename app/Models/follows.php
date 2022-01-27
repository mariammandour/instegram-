<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class follows extends Model
{
    use HasFactory;
    protected $table = "follow";
    protected $fillable = ['user_id','friend_id'];

    public $timestamps = false;
}
