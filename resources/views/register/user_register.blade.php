<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assests/css/userStyle.css">
</head>
<body>



    <h2>Cadastro de Motorista</h2>
    <form action="{{ route('user.action') }}" method="POST">
        @csrf

        <label for="name">Nome Completo:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf" required><br><br>

        <label for="address">Endereço:</label><br>
        <input type="text" id="address" name="address" required><br><br>

        <label for="telephone">Telefone:</label><br>
        <input type="tel" id="telephone" name="telephone" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>


</body>
</html>
