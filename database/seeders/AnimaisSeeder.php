<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animal::create(["nome" => "Junior", "especie" => "Cachorro", "raca" => "Buldogue Francês", "tutor_id" => 1]);
        Animal::create(["nome" => "Booba", "especie" => "Cachorro", "raca" => "Buldogue Francês", "tutor_id" => 1]);
        Animal::create(["nome" => "Linga", "especie" => "Cachorro", "raca" => "Buldogue Campeiro", "tutor_id" => 1]);
        Animal::create(["nome" => "Luppi", "especie" => "Cachorro", "raca" => "Buldogue Campeiro", "tutor_id" => 1]);
        Animal::create(["nome" => "Tom", "especie" => "Gato", "raca" => "SRD", "tutor_id" => 2]);
    }
}
