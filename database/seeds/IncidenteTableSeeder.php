<?php
use App\Incidente;
use Illuminate\Database\Seeder;
class IncidenteSeeder extends Seeder
{
    public function run()
    {
        // Cria Incidente (dados controlados)
        $this->createIncidentes();   
    }
    private function createIncidentes()
    {
        Incidente::create([
            'aluguel_id' => '1', 
            'data' => '2019/02/28',
            'descricao' => 'Batida Leve na traseira do veículo com quebra da lanteira de freio direita',
            'multa' => '100.00',
        ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Incidente created');

    }
}