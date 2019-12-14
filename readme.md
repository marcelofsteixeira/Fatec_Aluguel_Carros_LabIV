<h2 align="center">Projeto LAB IV - Larag-On-Wheels</h2>
<h3 align="center"> "A aplicação onde quem crasha é o carro, e não o servidor!"</h3>
<br>
<ul>
	<li>Aplicação web para o gerenciamento de uma empresa que presta serviços de aluguel de carros baseada no ambiente Laragon e na linguagem PHP, feita para a matéria de LAB IV do 4º Sem. de B.D. da FATEC São José dos Campos - Prof. Jessen Vidal.<a href="https://laragon.org" target="_blank">Laragon</a><a href="https://laravel.com" target="_blank">Laravel</a>
	</li>
</ul>
<br>
<p><strong>Instalação do projeto:</strong></p>
<table>
	<tr>
		<th>Criação de um banco MySQL no IP local, porta 3306, conexão com user 'root' e senha 'root' para a database 'aluguelcarros</th>
	</tr>
	<tr>
		<td>Execução do comando 'composer install:', para instalação das dependências do projeto</td>
	</tr>
	<tr>
		<td>Execução do comando 'php artisan migrate;', para criação das tabelas</td>
	</tr>
	<tr>
		<td>Execução do comando 'php artisan db:seed;', para preenchimento das tabelas com dados de exemplos </td>
	</tr>
	<tr>
		<td>Clique no botão 'Start All' na interface gráfica do Laragon, para lançamento do banco e do servidor da aplicação</td>
	</tr>
	<tr>
		<td>Acesso à página pelo endereço 'http://fatec_aluguel_carros_labiv.test/'</td>
	</tr>
	
</table>
<br>
<p><strong>Funções do projeto:</strong></p>
<table>
	<tr>
		<th>Criação de usuário e login</th>
	</tr>
	<tr>
		<td>Criação e remoção de clientes e funcionários da empresa, além de carros para serem alugados</td>
	</tr>
	<tr>
		<td>Criação de aluguéis, com cálculo do preço baseado nas diárias dos carros</td>
	</tr>
	<tr>
		<td>Finalização dos aluguéis baseada na data atual, disponibilizando o carro utilizado para alugúeis futuros</td>
	</tr>
	<tr>
		<td>Registro de Incidentes para aluguéis ativos, que podem ser visualizados em lista para cada aluguel ou cada carro</td>
	</tr>
	<tr>
		<td>Indisponibilização de carros, para que não possam ser usados em novos aluguéis, e disponibilização para voltarem a serem utilizados </td>
	</tr>
</table>
<br>
<p><strong>Alunos:</strong></p>
<table>
	<tr>
		<th>Jean Pierro
	</tr>
	<tr>
		<td>Jéssica Rosado</td>
	</tr>
	<tr>
		<td>Marcelo Teixeira</td>
	</tr>
	<tr>
		<td>Rodrigo Prado</td>
	</tr>
</table>

