<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}
