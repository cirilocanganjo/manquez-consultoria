<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultoria extends Model
{
    use HasFactory;
    protected $table = "consultorias";
    protected $primaryKey = 'id_consultoria';
    protected $fillable = ["nome_cliente", "telefone", "servico_consultoria", "email", "notification", "attachment", "mensagem", "userId"];
}
