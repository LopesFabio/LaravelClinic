<?php

use Faker\Generator as Faker;
use App\Models\Paciente;

$factory->define(Paciente::class, function (Faker $faker) {
    return [
            'nome'             => $faker->sentence(),
            'cpf'              => $faker->unique()->numberBetween([1],[11]),
            'rg'               => $faker->numberBetween([1],[8]),
            'estado_civil'     => 'solteiro',
            'sexo'             => 'masculino',
            'mae'              => $$faker->sentence(),
            'pai'              => $faker->sentence(),
            'cidade_natal'     => $faker->sentence(),
            'cep_natal'        => $faker->numberBetween([1],[8]),
            'estado_natal'     => $faker->sentence(),
            'pais_natal'       => 'BRASIL',
            'data_nascimento'  => $faker->date(['Y-m-d'],[now()]),
            'endereco'         => $$faker->sentence(),
            'bairro_atual'     => $faker->sentence(),
            'cep_atual'        => $faker->numberBetween([1],[8]),
            'cidade_atual'     => $faker->sentence(),
            'estado_atual'     => $faker->sentence(),
            'telefone1'        => $faker->numberBetween([1],[11]),
            'email'            => $faker->emails,
            'telefone2'        => $faker->numberBetween([1],[11]),
            'profissao'        => $faker->word,
            'descricao'        => $faker->sentence(),
            'situacao'         => 'ativo',
    ];
});
