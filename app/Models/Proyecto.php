<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $table="proyectos";
    protected $fillable = ["id", "titulo", "url", "descripcion", "created_at", "updated_at"];
}
