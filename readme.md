TUTORIAL P/ CONFIGURAÇÃO INICIAL DO PROJETO
--------------------------------------------

- abre pasta do projeto no cmder

	- composer install

	- abre o menu Heidi SQL (dependendo do seu laragon não é necessário a inserção de senha para entrar, mas caso precise a senha padrão geralmente é "root")

	- Abre a janela de consulta
	- Digite "CREATE DATABASE #nomeDaSuaDatabaseNoArquivoAqui.env;"
	- Rode o comando
	- Pare o serviço e troque o nome e a senha da database para o correspondente do arquivo .env

	- volte para o comander

	- php artisan migrate (cria as tabelas no bd)
	- php artisan db:seed (para inserir linhas no bd)

- para ir para a tela do seu projeto, coloque no navegador -> NomeDaPastaDoProjeto.test (No caso desse projeto, Fatec_Aluguel_Carros_LabIV.test)
- pronto, é só se registrar e logar para testar as funções e as telas, tenham um feliz natal e um ótimo ano novo!

<em>Fonte: https://www.youtube.com/watch?v=dQw4w9WgXcQ</em>
