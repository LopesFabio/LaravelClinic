<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function orcamento()
    {
        return $this->belongsTo(Orcamento::class);
    }

    public function dentista()
    {
        return $this->belongsTo(Dentista::class);
    }

    public function convenio()
    {
        return $this->belongsTo(Convenio::class);
    }
}
