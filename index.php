<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Tarefas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        
        /* Estilo para a barra de navegação */
        .navbar {
            background-color: #007BFF;
            color: white;
            padding: 10px 0;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
        
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 15px;
            border-radius: 5px;
        }

        .navbar a:hover {
            background-color: #0056b3;
        }
        
        /* Estilo para o conteúdo principal */
        .container {
            width: 50%;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-bottom: 30px;
        }

        label {
            font-size: 16px;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"], input[type="email"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<!-- Barra de navegação -->
<div class="navbar">
    <a href="#gerenciamento">Gerenciamento de Tarefas</a>
    <a href="#cadastro-usuario">Cadastro de Usuário</a>
    <a href="#cadastro-tarefa">Cadastro de Tarefas</a>
    <a href="#gerenciar-tarefas">Gerenciar Tarefas</a>
</div>

<!-- Conteúdo principal -->
<div class="container" id="cadastro-usuario">
    <h1>Cadastro de Usuário</h1>
    
    <form id="form-user">
        <label for="user-name">Nome:</label>
        <input type="text" id="user-name" name="user-name" placeholder="Digite seu nome" required>
        
        <label for="user-email">Email:</label>
        <input type="email" id="user-email" name="user-email" placeholder="Digite seu email" required>
        
        <input type="submit" value="Cadastrar Usuário">
    </form>
</div>

<script>
    // Função para lidar com o envio do formulário de usuário
    document.getElementById('form-user').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita o envio do formulário

        const name = document.getElementById('user-name').value;
        const email = document.getElementById('user-email').value;
        
        // Exibe uma mensagem de sucesso
        alert(`Usuário ${name} cadastrado com sucesso!`);
        
        // Limpa o formulário após cadastro
        document.getElementById('form-user').reset();
    });
</script>

</body>
</html>
