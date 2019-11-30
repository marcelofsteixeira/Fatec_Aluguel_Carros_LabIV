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
    
         $this->call(FuncionarioSeeder::class);
         $this->call(ClienteSeeder::class);
         $this->call(CarroSeeder::class);
         $this->call(AluguelSeeder::class);
         $this->call(IncidenteSeeder::class);
    }
}
