<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos com validação</title>
</head>
<body>

    <h2>Cadastro</h2>

    <form method="POST" action="">
        <label for="nome">Nome do Produto:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="preco">Preço:</label><br>
        <input type="number" id="preco" name="preco" step="0.01" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome  = trim($_POST['nome'] ?? '');
        $preco = $_POST['preco'] ?? '';

        // Aceita vírgula como separador decimal
        $preco = str_replace(",", ".", $preco);

        // Validação
        if ($nome === "") {
            echo "<p style='color: red;'>Erro: O nome do produto não pode estar vazio.</p>";
        } elseif (!is_numeric($preco) || (float)$preco <= 0) {
            echo "<p style='color: red;'>Erro: O preço deve ser um número positivo.</p>";
        } else {
            // Conexão com o servidor
            $servername = "localhost";
            $username   = "root";
            $password   = "Senai@118";
            $dbname     = "exercicio";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
            }

            // Prepared statement (evita SQL Injection)
            $stmt = $conn->prepare("INSERT INTO produtos (nome, preco) VALUES (?, ?)");
            $preco = (float)$preco;
            $stmt->bind_param("sd", $nome, $preco);

            if ($stmt->execute()) {
                echo "<p style='color: green;'>Produto cadastrado com sucesso!</p>";
            } else {
                echo "<p style='color: red;'>Erro ao cadastrar: " . $stmt->error . "</p>";
            }

            $stmt->close();
            $conn->close();
        }
    }
    ?>

</body>
</html>