<?php
use App\Funcionario;
use Illuminate\Database\Seeder;
class FuncionarioTableSeeder extends Seeder
{
    public function run()
    {
        // Cria Funcionários (dados controlados)
        $this->createFuncionarios();   
    }
    private function createFuncionarios()
    {
        Funcionario::create([
            'cpf' => '21477512004', 
            'nome'  => 'John Doe',
            'rg' => '259486681',
            'endereco' => 'Rua J, 52 Bq. Eucalipto',
            'cep' => '1222000',
            'cel' => '1122222222',
            'tel' => '1133333333',
            'email' => 'johndoe@email.com',
            'cargo' => 'Vendedor',
        ]);
        
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Funcionario johndoe@email.com created');

        Funcionario::create([
            'cpf' => '77749006087', 
            'nome'  => 'Dona Joe',
            'rg' => '396146648',
            'endereco' => 'Rua L, 101 Jd. Satelite',
            'cep' => '1222000',
            'cel' => '1122222222',
            'tel' => '1133333333',
            'email' => 'donajoe@email.com',
            'cargo' => 'Vendedor',
        ]);
        $this->command->info('Funcionario donajoe@email.com created');
    }
}