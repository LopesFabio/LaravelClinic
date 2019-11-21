<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}
