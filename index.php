<!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Blog do Geovanne</title>
        </head>

        <body>    
            

        <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com Rodapé</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Fonte padrão */
        }

        .menu {
            display: flex; /* Flexbox para o menu */
            justify-content: space-around; /* Espaçamento igual entre as opções */
            margin: 20px 0; /* Margem acima e abaixo do menu */
        }

        .menu a {
            text-decoration: none; /* Remove o sublinhado dos links */
            padding: 10px 20px; /* Espaçamento interno dos botões */
            background-color: #007BFF; /* Cor de fundo do botão */
            color: white; /* Cor do texto */
            border-radius: 5px; /* Bordas arredondadas */
            transition: background-color 0.3s; /* Transição suave para hover */
        }

        .menu a:hover {
            background-color: #0056b3; /* Cor ao passar o mouse */
        }

        .aba {
            width: 200px; /* Largura do quadrado */
            height: 250px; /* Altura do quadrado aumentada para o título e subtítulo */
            border: 1px solid #ccc; /* Borda do quadrado */
            border-radius: 8px; /* Cantos arredondados */
            overflow: hidden; /* Esconde o que ultrapassa o quadrado */
            text-align: center; /* Centraliza o texto */
            display: flex; /* Flexbox para alinhar o conteúdo */
            flex-direction: column; /* Alinha verticalmente */
            justify-content: center; /* Centraliza verticalmente */
            align-items: center; /* Centraliza horizontalmente */
            margin: 20px; /* Margem ao redor */
            cursor: pointer; /* Cursor em forma de mão */
        }

        .aba img {
            max-width: 100%; /* A imagem ocupa a largura máxima do quadrado */
            max-height: 80%; /* A imagem ocupa até 80% da altura */
            object-fit: cover; /* Cobre o espaço sem distorcer */
        }

        .instagram-logo {
            width: 40px; /* Largura do logo do Instagram */
            height: auto; /* Mantém a proporção */
            margin-top: 10px; /* Espaço acima do logo */
        }

        .aba h1 {
            margin: 5px 0; /* Margem do título */
            font-size: 1.5em; /* Tamanho do título */
        }

        .aba h2 {
            margin: 5px 0; /* Margem do subtítulo */
            font-size: 1.2em; /* Tamanho do subtítulo */
            color: #555; /* Cor do subtítulo */
        }

        .aba p {
            margin: 0; /* Remove margens do parágrafo */
        }

        footer {
            text-align: center; /* Centraliza o texto do rodapé */
            margin-top: 20px; /* Margem acima do rodapé */
            padding: 10px 0; /* Espaçamento interno do rodapé */
            background-color: #f1f1f1; /* Cor de fundo do rodapé */
        }

        footer p {
            margin: 5px 0; /* Margem do texto do rodapé */
            font-size: 0.9em; /* Tamanho da fonte */
            color: #333; /* Cor do texto */
        }
    </style>
    <script>
        let currentImage = 0; // Índice da imagem atual
        const images = [
            'caminho/para/sua/imagem1.jpg', // Substitua pelo caminho da primeira imagem
            'caminho/para/sua/imagem2.jpg'  // Substitua pelo caminho da segunda imagem
        ];

        function changeImage() {
            currentImage = (currentImage + 1) % images.length; // Altera para a próxima imagem
            document.getElementById('image').src = images[currentImage]; // Atualiza a imagem
        }
    </script>
</head>
<body>

    <!-- Menu de opções -->
    <div class="menu">
        <a href="#opcao1">Notícias</a>
        <a href="#opcao2">Matérias</a>
        <a href="#opcao3">Reportagens</a>
    </div>

    <div class="aba" onclick="changeImage()">
        <h1>Blogger do Geovanne</h1> <!-- Título -->
        <h2>A notícia é aqui</h2> <!-- Subtítulo -->
        <img id="image" src="caminho/para/sua/imagem1.jpg" alt="Imagem" />
        <p>Tudo em tempo real</p>
        <a href="https://www.youtube.com/@JornalismoEsportivo" target="_blank">
            <img class="instagram-logo" src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
        </a>
    </div>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2024 Geovanne Roggerio. Todos os direitos reservados.</p>
        <p><a href="Geovannejornalista30@outlook.com">Contato</a></p>
    </footer>

</body>
</html>

        <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aba com Foto e Texto</title>
    <style>
        .aba {
            width: 200px; /* Largura do quadrado */
            height: 200px; /* Altura do quadrado */
            border: 1px solid #ccc; /* Borda do quadrado */
            border-radius: 8px; /* Cantos arredondados */
            overflow: hidden; /* Esconde o que ultrapassa o quadrado */
            text-align: center; /* Centraliza o texto */
            display: flex; /* Flexbox para alinhar o conteúdo */
            flex-direction: column; /* Alinha verticalmente */
            justify-content: center; /* Centraliza verticalmente */
            align-items: center; /* Centraliza horizontalmente */
            margin: 20px; /* Margem ao redor */
        }

        .aba img {
            max-width: 100%; /* A imagem ocupa a largura máxima do quadrado */
            max-height: 80%; /* A imagem ocupa até 80% da altura */
            object-fit: cover; /* Cobre o espaço sem distorcer */
        }

        .aba p {
            margin: 0; /* Remove margens do parágrafo */
        }
    </style>
</head>
<body>

    <div class="aba">
        <img src="https://temlondrina.com.br/wp-content/uploads/2022/05/sangue-londrina2.jpg" alt="Descrição da imagem">
        <p>Na noite desta terça-feira, 17 de setembro de 2024, aconteceu um eclipse lunar parcial da lua, com início as 23:30min, e duração de 30 minutos.
            Antes, teve a lua cheia normal, em seguida, a lua entrou em penumbra.
            Por Geovanne Roggerio.
  
        </p>
    </div>

</body>

</html>
        
        <?php

$dir = 'images/';

$images = glob($dir . '*.jpg');

$current = isset($_GET['img']) ? (int)$_GET['img'] : 0;

if ($current < 0) {
    $current = 0;
} elseif ($current >= count($images)) {
    $current = count($images) - 1;
}

$prev = $current > 0 ? $current - 1 : count($images) - 1;
$next = $current < count($images) - 1 ? $current + 1 : 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<title>Blog do Geovanne</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Fotos</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        img { max-width: 100%; height: auto; }
        .nav-buttons { margin: 20px; }
        .nav-buttons a { text-decoration: none; padding: 10px 20px; color: #fff; background-color: #007bff; border-radius: 5px; }
    </style>
</head>
<body>
    
<img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiXDBPhqZBhX7auux1kbU0oKpK5K4_CbCSdZrhbVlR7q7TB_ju_fTgeJxCVb5FtqI7IJ-wk3LU8W5PfmueOJU6U1PgXMvTm90mYVd_HNDQJqS1535KdeuJvI23YkCv7SY6KtCtN7657bSXJUqOMwsRdDGXd0XM32YiThgMQ6IqnOZcUdJIsvgHzeA8Viqo_/s275/download%20(3).jpeg" alt="Esta é uma imagem">

<a href="https://grjornalismo.blogspot.com/2024/08/qual-importancia-de-uma-arvore-na-vida.html">A importancia das árvores em nossas vidas?</a>

</body>

<img src=" https://temlondrina.com.br/wp-content/uploads/2022/05/sangue-londrina2.jpg.jpeg " alt= esta é uma imagem.

</html>
        </body>

        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgWAbRWgvfGinw312fNbiOe5YLU3yDP1AKN6qFxAFZJir_g8RSdWj8ihawo5xdS-d90Qr2FAt5FV93TJCK75bUdhYnc92FDWxCiNkFduy15tqYUsIlxg1rBr8PxMpQkSojro80zRInFz-PfpDo65goSAmFm07Pdb0r1F9ajN28o3rTxWcyWYjWZWzzQBnf7/s290/images%20(19).jpeg" alt="Esta é uma imagem">

            <a href="https://grjornalismo.blogspot.com/2024/08/a-importancia-do-lixo-na-vida-das.html">A importancia do lixo na vida das pessoas</a>

        <title>Imagem e Texto em Quadrado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="quadrado">
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjvUVQDYl13nXtzSnka8M6rbtpOIWFHFpptmvPNP7Nms7gBwOAPotO4WmtzsMyRAlIstwPD-KSLwBrNBKD0RtdHT3mMYTkVYuPJKD4phSEnjm4f_3SuStDEMp55P1apoNa8Ak3Szu-lozGSlu2YiUzdyp91_XhgfQ2ISflJ7f0QN6Oh8Y-RwkgFtcrrogt4/s3264/IMG-20240905-WA0239.jpeg" alt="Descrição da Imagem" class="imagem">
        <div class="texto">
            <h2>As notícias são como são</h2>
            <p>Os fatos e acontecimentos ocorrem 24 horas, e não tem intervalo, folga e férias, tudo acontece o tempo todo, independente se for uma notícia boa ou ruim..</p>
        
            <a href="https://grjornalismo.blogspot.com/2024/09/o-que-esta-acontecendo-com-o-planeta.html">O que está acontecendo com o Planeta?</a>
        </div>
    </div>
</body>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aba com Foto e Texto</title>
    <style>
        .aba {
            width: 200px; /* Largura do quadrado */
            height: 200px; /* Altura do quadrado */
            border: 1px solid #ccc; /* Borda do quadrado */
            border-radius: 8px; /* Cantos arredondados */
            overflow: hidden; /* Esconde o que ultrapassa o quadrado */
            text-align: center; /* Centraliza o texto */
            display: flex; /* Flexbox para alinhar o conteúdo */
            flex-direction: column; /* Alinha verticalmente */
            justify-content: center; /* Centraliza verticalmente */
            align-items: center; /* Centraliza horizontalmente */
            margin: 20px; /* Margem ao redor */
        }

        .aba img {
            max-width: 100%; /* A imagem ocupa a largura máxima do quadrado */
            max-height: 80%; /* A imagem ocupa até 80% da altura */
            object-fit: cover; /* Cobre o espaço sem distorcer */
        }

        .instagram-logo {
            width: 40px; /* Largura do logo do Instagram */
            height: auto; /* Mantém a proporção */
            margin-top: 10px; /* Espaço acima do logo */
        }

        .aba p {
            margin: 0; /* Remove margens do parágrafo */
        }
    </style>
</head>
<body>

    <div class="aba">
        <img src="caminho/para/sua/imagem.jpg" alt="">
        <p>Geovanne_fotos</p>
        <a href="https://www.instagram.com/geovanne_fotos/" target="_blank">
            <img class="instagram-logo" src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
        </a>
    </div>

</body>
</html>
</html>

        <h1>Galeria de Fotos</h1>
    <img src= "<?php echo $images[$current]; ?>" alt=""> 

    <div class="nav-buttons">
        <a href="?img=<?php echo $prev; ?>">Anterior <https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjvUVQDYl13nXtzSnka8M6rbtpOIWFHFpptmvPNP7Nms7gBwOAPotO4WmtzsMyRAlIstwPD-KSLwBrNBKD0RtdHT3mMYTkVYuPJKD4phSEnjm4f_3SuStDEMp55P1apoNa8Ak3Szu-lozGSlu2YiUzdyp91_XhgfQ2ISflJ7f0QN6Oh8Y-RwkgFtcrrogt4/s3264/IMG-20240905-WA0239.img/a> 
        <a href="?img=<?php echo $next; ?>">Próxima<https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjvUVQDYl13nXtzSnka8M6rbtpOIWFHFpptmvPNP7Nms7gBwOAPotO4WmtzsMyRAlIstwPD-KSLwBrNBKD0RtdHT3mMYTkVYuPJKD4phSEnjm4f_3SuStDEMp55P1apoNa8Ak3Szu-lozGSlu2YiUzdyp91_XhgfQ2ISflJ7f0QN6Oh8Y-RwkgFtcrrogt4/s3264/IMG-20240905-WA0239.img/a>
    </div>


        <style type="text/css">
        #minhaImg {

            /* 20px de margem vertical, 40px de margem horizontal */
            margin: 20px 40px; 
        }
        
        <style type="text/css">
            
            .cinza claro {
                color: green;
            }

            #cabecalho {
                background: green;
            }
          body {
                background-color: green;
            }  

        </style>

        <h2>Matérias</h2>
        <h3>Reportagens</h3>
        <h4>Entrevistas</h4>
        <h5>fotos de eventos</h6>

        <a href="https://grjornalismo.blogspot.com/">O seu site de notícias</a>

          
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhNfZy-XRse-tf-ResGPDTRPUq0m0luCogSl1IjivBFsOhhU9udOSb3f8ErM7lYi9PvjHS-7mq4dTu8oMoqYtxF0z-0KFSiiRvuGzl2V5kEsYSJBsOUBJnj9E9CmZEdMq8U6xe9KcUbonA1H82ykeNJRv564h_OBPkFs5pl5eoPuvOeIbuDKmYvBaPFTnne/s3264/IMG-20240907-WA0160.jpeg" alt="Esta é uma imagem">

            <a href="https://grjornalismo.blogspot.com/2024/09/desfile-civico-acontece-em-cidade.html">Desfile Cívico acontece em cidade</a>

    </table>


            <form action="/enviar-dados" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem"></textarea>
            
            <input type="submit" value="Enviar">


        </form>

        </ol>

        </html>