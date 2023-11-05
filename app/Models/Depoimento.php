<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depoimento extends Model
{
    use HasFactory;

    protected $table = "depoimentos";
    protected $primaryKey = 'id_depoimento';
    protected $fillable = ['nome_cliente', 'depoimento', 'cargo', 'email', "foto", "userId"];


    public function TestimonyUser(){

      return $this->belongsTo(User::class, "userId");
    }

}
