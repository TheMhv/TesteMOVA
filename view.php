<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>

    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h1 class="title"><?= $mensagem['titulo'] ?></h1>
        <br>
        <h3>Frase do dia:</h3>
        <div class="text">
            <p>
                <mark><strong><em><?= $mensagem["frase"]; ?></em></strong></mark>
                <small> –<?= $mensagem["autor"]; ?></small>
            </p>
        </div>
        <br>
    </div>
</body>
</html>