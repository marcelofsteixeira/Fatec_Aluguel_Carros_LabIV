<?php
use App\Cliente;
use Illuminate\Database\Seeder;
class ClienteSeeder extends Seeder
{
    public function run()
    {
        // Cria Clientes (dados controlados)
        $this->createClientes();   
    }
    private function createClientes()
    {
        Cliente::create([
            'cpf' => '51282965042', 
            'nome'  => 'Jorge Bastos',
            'rg' => '479205267',
            'endereco' => 'Rua O, 88 Jd. São Dimas',
            'cep' => '1222000',
            'cel' => '1122222222',
            'tel' => '1133333333',
            'email' => 'jorgebastos@email.com',
            // 'password' => bcrypt('123456')
        ]);
        
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Cliente johndoe@email.com created');

        Cliente::create([
            'cpf' => '40393368017', 
            'nome'  => 'Denise Rosa',
            'rg' => '498380889',
            'endereco' => 'Rua G, 1 Jd. Paulista',
            'cep' => '1222000',
            'cel' => '1122222222',
            'tel' => '1133333333',
            'email' => 'deniserosa@email.com',
            // 'password' => bcrypt('123456')
        ]);
        $this->command->info('Cliente donajoe@email.com created');
    }
}