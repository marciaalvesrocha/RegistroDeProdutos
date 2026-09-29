# 🛒 Desafio 2 — Cadastro de Produtos

## 📌 Sobre a atividade

O objetivo desta atividade é desenvolver um sistema simples de **cadastro de produtos**, utilizando PHP e MySQL.

O sistema possui um formulário onde o usuário informa o **nome do produto** e seu **preço**. Após o envio, o PHP recebe e valida os dados antes de realizar o cadastro no banco de dados.

As validações verificam se o nome foi preenchido e se o preço é um número válido e maior que zero. Caso os dados estejam corretos, o produto é inserido no banco e uma mensagem de sucesso é exibida. Caso contrário, o sistema informa o erro encontrado.

A inserção dos dados é feita utilizando **prepared statements**, proporcionando mais segurança contra SQL Injection.

## 🛠️ Tecnologias utilizadas

- **HTML5:** criação do formulário.
- **PHP:** processamento e validação dos dados.
- **MySQL:** armazenamento dos produtos cadastrados.
- **SQL:** criação do banco de dados e da tabela.
- **XAMPP, WAMP ou Laragon:** ambiente para executar o projeto localmente.

## 🎯 O que foi praticado

- Criação de formulários HTML.
- Envio de dados pelo método `POST`.
- Validação de dados com PHP.
- Conexão entre PHP e MySQL.
- Inserção de dados no banco.
- Uso de **prepared statements**.
- Exibição de mensagens de sucesso e erro.
