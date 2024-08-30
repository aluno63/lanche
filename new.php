<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
    <style>
        .produto-imagem {
            max-width: 984px;
            max-height: 794px;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Produtos</h1>

    <!-- Formulário para adicionar produtos -->
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="preco">Preço do Produto:</label>
        <input type="text" id="preco" name="preco" required>
        <br>
        <label for="imagem">Imagem do Produto:</label>
        <input type="file" id="imagem" name="imagem" accept="image/*" required>
        <br>
        <input type="submit" name="submit" value="Cadastrar Produto">
    </form>

    <?php
    // Configurações do banco de dados
    $servername = "localhost";
    $username = "root"; // Substitua com o seu usuário do MySQL
    $password = "";     // Substitua com a sua senha do MySQL
    $dbname = "loja";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Processa o formulário
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];

        // Processa o upload da imagem
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
            $imagem = $_FILES['imagem'];
            $extensao = pathinfo($imagem['name'], PATHINFO_EXTENSION);
            $imagem_nome = uniqid() . '.' . $extensao;
            $imagem_destino = 'uploads/' . $imagem_nome;

            // Verifica se o diretório "uploads" existe, se não, cria
            if (!is_dir('uploads')) {
                mkdir('uploads', 0755, true);
            }

            if (move_uploaded_file($imagem['tmp_name'], $imagem_destino)) {
                // Prepara e executa a consulta
                $stmt = $conn->prepare("INSERT INTO produtos (nome, preco, imagem) VALUES (?, ?, ?)");
                $stmt->bind_param("sds", $nome, $preco, $imagem_nome);

                if ($stmt->execute()) {
                    echo "<p>Produto cadastrado com sucesso!</p>";
                } else {
                    echo "<p>Erro: " . $stmt->error . "</p>";
                }

                $stmt->close();
            } else {
                echo "<p>Erro ao fazer upload da imagem.</p>";
            }
        }
    }

    $conn->close();
    ?>

    <h2>Lista de Produtos</h2>
    <?php
    // Exibe a lista de produtos
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "SELECT id, nome, preco, imagem FROM produtos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>";
            echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - Preço: R$" . number_format($row["preco"], 2, ',', '.') . "<br>";
            if ($row["imagem"]) {
                echo "<img src='uploads/" . $row["imagem"] . "' class='produto-imagem'><br>";
            }
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhum produto cadastrado.</p>";
    }

    $conn->close();
    ?>
</body>
</html>
