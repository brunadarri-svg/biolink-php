<?php
    // --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
    $nome = "@Virginia Fonseca";
    $bio ="mãe solo de 3:🩷🩵🩷<br>
    ceo:@wepink🩷<br>
    2025 é nosso toda honra e gloria a Deus🙌<br>
    vivendo minha melhor versão @vinijr💍⚽<br>
    parceria via direct💌";
    $imagem = "https://i.pinimg.com/736x/84/09/e0/8409e0458b91c51eba2096d68cfacf08.jpg"; // Pegue o link da SUA foto.
     $links = [
        "Instagram" => "https://instagram.com/https://www.instagram.com/virginia/,",
        "WhatsApp"  => "https://wa.me/17992178668",
        "Meu Jogo Favorito" => "https://play.google.com/store/apps/details?id=com.dts.freefireth&hl=pt_BR",
        "Música do Momento" => "https://www.youtube.com/watch?v=7A9txo_yLJ4&list=RD7A9txo_yLJ4&start_radio=1"
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioLink de <?php echo $nome; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="avatar">

        <h1> <?php echo $nome; ?> </h1>
        <p> <?php echo $bio; ?> </p>

        <div class="lista-links">
              <?php
            foreach ($links as $texto => $url) {
                $classe_extra = "";

                // DESAFIO: Se o texto for "WhatsApp" (ou outro que você queira), mude a variável $classe_extra para "destaque". Escreva o IF aqui:
               if($texto == "Instagram"){
                $classe_extra= "destaque";
               }

                // O PHP constrói o botão HTML
                echo "<a href='$url' class='btn $classe_extra' target='_blank'>
                        $texto
                      </a>";
            }
            ?>
        </div>
          <div class="area-contato">
            <a href="contato.php" class="btn-msg">📧 Mandar Mensagem</a>
        </div>
    </div>
</body>
</html>