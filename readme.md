TUTORIAL P/ CONFIGURAÇÃO INICIAL DO PROJETO
--------------------------------------------

- abre pasta do projeto no cmder

	- composer install

- abre o menu Heidi SQL (dependendo do seu laragon não é necessário a inserção de senha para entrar, mas caso precise a senha padrão geralmente é "root")

	- Abre a janela de consulta
	- Digite "CREATE DATABASE #nomeDaSuaDatabaseNoArquivo.envAqui;"
	- Rode o comando
	- Pare o serviço e troque o nome e a senha da database para o correspondente do arquivo .env

- volte para o comander

	- php artisan make:auth
	- php artisan migrate
	- composer require jeroennoten/laravel-adminlte 1.x <- admin LTE (1.x é para o versionamento, por causa da versão do laravel? <- eu acho...)
	- php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=assets
	- php artisan make:adminlte <- só da yes em tudo que aparecer que ta de boa, k?

- para ir para a tela do seu projeto, coloque no navegador -> NomeDaPastaDoProjeto.test (No caso desse projeto, Fatec_Aluguel_Carros_LabIV.test)
- pronto, é só se registrar e logar para testar as funções e as telas, tenham um feliz natal e um ótimo ano novo!

<em>Fonte: https://www.youtube.com/watch?v=dQw4w9WgXcQ</em>
