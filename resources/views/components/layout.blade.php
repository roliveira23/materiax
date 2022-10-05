<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="/img/logo02.svg">
        
    </head>

    <body>
        <header class="cabecalho">
            <a href="index"> <img class="cabecalho-imagem" src="img/logo02.svg" alt="Logo Matéria X"></a>
            <a href="index"><h1 class="cabecalho-titulo">Matéria X</h1></a> 
            <nav class="cabecalho-menu">
                <a href="noticias" class="cabecalho-menu-item">Notícias</a>
                <a class="cabecalho-menu-item">Críticas</a>
                <a class="cabecalho-menu-item">Filmes</a>
                <a class="cabecalho-menu-item">Livros</a>
                <a class="cabecalho-menu-item">Games</a>
                <a class="cabecalho-menu-item">Séries</a>
                <a class="cabecalho-menu-item">Animes</a>
            </nav>
        </header>

        <section>
            {{ $slot }}
        </section>
    
    </body>

    <footer class="rodape">
        <div class="rodape-item">
            <p class="rodape-item-texto">
                O Matéria X é escrito por Victor Xavier. Copyright Matéria X. Todos os direitos reservados. É proibida a reprodução do conteúdo desta página em qualquer meio de comunicação, eletrônico ou impresso, sem autorização.
            </p>
            <div class="rodape-item-logo">
                <img src="img/logo02-branco.svg">
                <p>Matéria X</p>
            </div>
        </div>
    </footer>

</html>