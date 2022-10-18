<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tutor;

class TutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tutor::create(["nome" => "Guilherme Madalozzo", "cpf" => "12312312312", "telefone" => "54996227898"]);
        Tutor::create(["nome" => "Fulano de Tal", "cpf" => "32132132143", "telefone" => "545454545454"]);
    }
}
