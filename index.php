<?php
    // --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
    $nome = "Virginia Fonseca";
    $bio = "2025 é nosso💕<br>
    Toda honra e gloria a Deus🙌<br>
    mãe solo de 3:🩷🩵🩷<br>
    @vinijunior💍<br>
    Cio:@wepink🩷";
    $imagem = "https://i.pinimg.com/736x/81/95/0f/81950f0b1911557b37277eb425237999.jpg"; // Pegue o link da SUA foto.
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioLink de <?php echo $nome; ?></title>

</head>
<body>
    <div class="container">
        <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="avatar">

        <h1> <?php echo $nome; ?> </h1>
        <p> <?php echo $bio; ?> </p>

        <div class="lista-links"></div>
    </div>
</body>
</html>