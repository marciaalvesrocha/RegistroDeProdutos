🛒 Desafio 2 (Alternativo): Cadastro de Produtos com Validação 🛡️

Este repositório contém as instruções e diretrizes para a implementação de um script em PHP responsável pelo cadastro de produtos em um banco de dados MySQL, incluindo etapas essenciais de validação de dados antes da inserção.

🎯 Objetivo

Desenvolver uma aplicação web simples em PHP que receba dados de um formulário HTML, realize a validação dos campos no backend e insira as informações de forma segura no banco de dados.

🛠️ Requisitos e Estrutura

1. 📦 Banco de Dados

No seu SGBD (ex: MySQL/MariaDB), utilize o banco de dados exercicio e crie a tabela produtos executando o comando SQL abaixo:

CREATE DATABASE IF NOT EXISTS exercicio;
USE exercicio;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);


2. 📝 Formulário HTML

Crie uma interface contendo um formulário HTTP (método POST) com os seguintes campos:

Nome do Produto: Campo de texto (<input type="text">).

Preço: Campo numérico (<input type="number"> ou <input type="text">).

Botão de Envio: Botão para submeter os dados.

3. ✅ Validação (PHP)

Antes de realizar a conexão ou inserção no banco de dados, o script PHP deve validar os dados recebidos:

Nome do produto: Não pode estar vazio ou conter apenas espaços em branco.

Preço: Deve ser um valor numérico (is_numeric()) e estritamente maior que zero (> 0).

4. 💾 Inserção e Resposta

Sucesso: Se todos os critérios de validação forem atendidos, os dados devem ser inseridos na tabela produtos utilizando Prepared Statements (PDO ou MySQLi) para prevenção de SQL Injection. Exibir a mensagem:

"Produto cadastrado com sucesso!"

Erro de Validação: Caso algum campo não cumpra os requisitos, interromper o processo e exibir uma mensagem correspondente, por exemplo:

"Erro: O preço deve ser um número positivo." ou "Erro: O nome do produto é obrigatório."

🚀 Como Executar o Projeto

Certifique-se de ter um ambiente servidor PHP com MySQL instalado (ex: XAMPP, WAMP, Laragon ou Docker).

Clone ou copie os arquivos do projeto para o diretório raiz do servidor web (ex: htdocs ou www).

Execute o script SQL no seu gerenciador de banco de dados (PhpMyAdmin, DBeaver, MySQL CLI, etc.).

Configure as credenciais de conexão do banco de dados no arquivo PHP.

Acesse o formulário pelo navegador (ex: http://localhost/cadastro_produto.php).

📂 Estrutura de Arquivos Sugerida

├── config.php          # Arquivo com as configurações de conexão com o banco de dados
├── index.php           # Formulário HTML e lógica de processamento PHP
└── README.md           # Documentação da atividade
