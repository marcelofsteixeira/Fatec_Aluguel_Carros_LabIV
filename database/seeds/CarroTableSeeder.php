<?php
use App\Carro;
use Illuminate\Database\Seeder;
class CarroTableSeeder extends Seeder
{
    public function run()
    {
        // Cria Carros (dados controlados)
        $this->createCarros();   
    }
    private function createCarros()
    {
        Carro::create([
            'placa' => 'MPM0114', 
            'cor' => 'Azul', 
            'marca' => 'Pontiac', 
            'modelo' => 'Trans-AM', 
            'num_renavan' => '9211983479', 
            'diaria' => '115.00', 
        ]);
        
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Carro MPM0114 created');

        Carro::create([
            'placa' => 'MXW6762', 
            'cor' => 'Cinza', 
            'marca' => 'Troller', 
            'modelo' => 'RF Esport', 
            'num_renavan' => '3020168935', 
            'diaria' => '350.00', 
        ]);
        $this->command->info('Carro MXW6762 created');
    }
}