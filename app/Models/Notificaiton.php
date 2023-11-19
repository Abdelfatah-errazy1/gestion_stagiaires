<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificaiton extends Model
{
    use HasFactory;
    public $table='notificaiton';
    protected $fillable=['titre','description'];
}
