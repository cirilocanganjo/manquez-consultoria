<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'eventos';
    protected $fillable = ['titulo', 'descricao', 'data_evento', 'foto'];



//Relacionamento N:1 ->Muitos Eventos podem ser marcados por um usuário



}
