<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use estoque\Categoria;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(CategoriaTableSeeder::class);
    }
}

class CategoriaTableSeeder extends Seeder
{
    public function run()
    {
        Categoria::create(['nome' => 'ELETRODOMESTICO']);
        Categoria::create(['nome' => 'ELETRONICA']);
        Categoria::create(['nome' => 'BRINQUEDO']);
        Categoria::create(['nome' => 'ESPORTES']);
    }
}
