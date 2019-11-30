<?php
use App\Aluguel;
use Illuminate\Database\Seeder;
class AluguelTableSeeder extends Seeder
{
    public function run()
    {
        // Cria Aluguel (dados controlados)
        $this->createAlugueis();   
    }
    private function createAlugueis()
    {
        Aluguel::create([
            'cliente_id' => '51282965042', 
            'carro_id' => 'MPM0114',
            'preco' => '350.00',
            'funcionario_id' => '21477512004',
            'data_aluguel' => '2019/01/21',
            'data_entrega_esperada' => '2019/01/23',
            'data_entrega' => '2019/01/22',
        ]);
        
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Aluguel created');

        Aluguel::create([
            'cliente_id' => '40393368017', 
            'carro_id' => 'MXW6762',
            'preco' => '470.00',
            'funcionario_id' => '77749006087',
            'data_aluguel' => '2019/02/26',
            'data_entrega_esperada' => '2019/02/28',
            'data_entrega' => '2019/03/01', 
        ]);
        $this->command->info('Aluguel created');
    }
}