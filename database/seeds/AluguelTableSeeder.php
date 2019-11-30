<?php
use App\Aluguel;
use Illuminate\Database\Seeder;
class AluguelSeeder extends Seeder
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
            'data_aluguel' => '21/01/2019',
            'data_entrega_esperada' => '23/01/2019',
            'data_entrega' => '22/01/2019',
        ]);
        
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Aluguel created');

        Aluguel::create([
            'cliente_id' => '40393368017', 
            'carro_id' => 'MXW6762',
            'preco' => '470.00',
            'funcionario_id' => '77749006087',
            'data_aluguel' => '26/02/2019',
            'data_entrega_esperada' => '28/02/2019',
            'data_entrega' => '01/03/2019', 
        ]);
        $this->command->info('Aluguel created');
    }
}