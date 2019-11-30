<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
         $this->call(FuncionarioTableSeeder::class);
         $this->call(ClienteTableSeeder::class);
         $this->call(CarroTableSeeder::class);
         $this->call(AluguelTableSeeder::class);
         $this->call(IncidenteTableSeeder::class);
    }
}
