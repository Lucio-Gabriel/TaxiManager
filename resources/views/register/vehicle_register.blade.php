<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assests/css/vehicleStyle.css">
</head>
<body>



    <h2>Cadastro de Veículo</h2>
    <form action="{{ route('vehicle.action') }}" method="POST">

        @csrf

        <label for="numeroPlaca">Número da Placa:</label><br>
        <input type="text" id="numeroPlaca" name="numeroPlaca" required><br><br>

        <label for="marca">Marca:</label><br>
        <input type="text" id="marca" name="marca" required><br><br>

        <label for="modelo">Modelo:</label><br>
        <input type="text" id="modelo" name="modelo" required><br><br>

        <label for="ano_fabricacao">Ano de Fabricação:</label><br>
        <input type="number" id="ano_fabricacao" name="ano_fabricacao" required><br><br>

        <button type="submit">Cadastrar Veículo</button>
    </form>

</body>
</html>
