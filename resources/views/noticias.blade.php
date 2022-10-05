<x-layout>
    <head>
        @section('title', 'Noticias Matéria X')
        <link rel="stylesheet" href="css/destaques-style.css">
    </head>

    <body>
        <section class="noticias-main">
            <div class="categoria-main-titulo">
                <h1>NOTÍCIAS</h1>
            </div>

            <section class="destaques-categoria">
                <div class="destaques-categoria-container">
                    <div class="destaque-categoria-post">
                        <a><img class="destaque-categoria-imagens" src="/img/news/news-01.jpeg"></a>
                        <p class="destaque-categoria-titulos">Titulo post noticia 1</p>
                        <p class="destaque-categoria-info">Info do titulo noticia vai descrever o que está escrito no post</p>
                    </div>
                    <div class="destaque-categoria-post">
                        <a><img class="destaque-categoria-imagens" src="/img/news/news-04.jpeg"></a>
                        <p class="destaque-categoria-titulos">Titulo post noticia 2</p>
                        <p class="destaque-categoria-info">Info do titulo noticia vai descrever o que está escrito no post</p>
                    </div>
                    <div class="destaque-categoria-post">
                        <a><img class="destaque-categoria-imagens" src="/img/news/news-10.jpeg"></a>
                        <p class="destaque-categoria-titulos">Titulo post noticia 3</p>
                        <p class="destaque-categoria-info">Info do titulo noticia vai descrever o que está escrito no post</p>
                    </div>
                    <div class="destaque-categoria-post">
                        <a><img class="destaque-categoria-imagens" src="/img/news/news-12.jpeg"></a>
                        <p class="destaque-categoria-titulos">Titulo post noticia 4</p>
                        <p class="destaque-categoria-info">Info do titulo noticia vai descrever o que está escrito no post</p>
                    </div>
                </div>
            </section>

            <section class="ultimas-noticias">
                <div class="ultimas-noticias-titulo">
                    <img class="ultimas-noticias-titulo-imagem" src="img/news-06.svg">
                    <h1>Ultimas notícias</h1>
                </div>
                
                <article class="ultimas-noticias-article">
                    <a href="/index">
                    <div class="ultimas-noticias-imagem-box">
                        <img class="ultimas-noticias-imagem" src="img/news/news-01.jpeg">
                    </div>
                        <div class="ultimas-noticias-article">
                        <div class="ultimas-noticias-article-categoria">
                            <img class="ultimas-noticias-categoria-imagem" src="img/categoria-series.svg">
                            <h4 class="ultimas-noticias-article-data-hora">15/01/2022 15:07</h4>
                        </div>
                        <div>
                            <h2>Titulo da ultima noticia</h2>
                            <p>Descritivo da ultima noticia em mais palavras que o titulo</p>
                        </div>
                    </a>
                </article>
                <article class="ultimas-noticias-article">
                    <a href="/index">
                    <div class="ultimas-noticias-imagem-box">
                        <img class="ultimas-noticias-imagem" src="img/news/news-02.jpeg">
                    </div>
                        <div class="ultimas-noticias-article">
                        <div class="ultimas-noticias-article-categoria">
                            <img class="ultimas-noticias-categoria-imagem" src="img/categoria-livros.svg">
                            <h4 class="ultimas-noticias-article-data-hora">15/01/2022 15:07</h4>
                        </div>
                        <div>
                            <h2>Titulo da ultima noticia</h2>
                            <p>Descritivo da ultima noticia em mais palavras que o titulo</p>
                        </div>
                    </a>
                </article>
                <article class="ultimas-noticias-article">
                    <a href="/index">
                        <div class="ultimas-noticias-imagem-box">
                            <img class="ultimas-noticias-imagem" src="img/news/news-03.jpeg">
                        </div>
                    <div class="ultimas-noticias-article">
                        <div class="ultimas-noticias-article-categoria">
                            <img class="ultimas-noticias-categoria-imagem" src="img/categoria-audio.svg">
                            <h4 class="ultimas-noticias-article-data-hora">15/01/2022 15:07</h4>
                        </div>
                        <div>
                            <h2>Titulo da ultima noticia</h2>
                            <p>Descritivo da ultima noticia em mais palavras que o titulo</p>
                        </div>
                    </a>
                </article>
                <article class="ultimas-noticias-article">
                    <a href="/index">
                        <div class="ultimas-noticias-imagem-box">
                            <img class="ultimas-noticias-imagem" src="img/news/news-04.jpeg">
                        </div>
                    <div class="ultimas-noticias-article">
                        <div class="ultimas-noticias-article-categoria">
                            <img class="ultimas-noticias-categoria-imagem" src="img/categoria-noticias.svg">
                            <h4 class="ultimas-noticias-article-data-hora">15/01/2022 15:07</h4>
                        </div>
                        <div>
                            <h2>Titulo da ultima noticia</h2>
                            <p>Descritivo da ultima noticia em mais palavras que o titulo</p>
                        </div>
                    </a>
                </article>
                <article class="ultimas-noticias-article">
                    <a href="/index">
                        <div class="ultimas-noticias-imagem-box">
                            <img class="ultimas-noticias-imagem" src="img/news/news-10.jpeg">
                        </div>
                    <div class="ultimas-noticias-article">
                        <div class="ultimas-noticias-article-categoria">
                            <img class="ultimas-noticias-categoria-imagem" src="img/categoria-games.svg">
                            <h4 class="ultimas-noticias-article-data-hora">15/01/2022 15:07</h4>
                        </div>
                        <div>
                            <h2>Titulo da ultima noticia</h2>
                            <p>Descritivo da ultima noticia em mais palavras que o titulo</p>
                        </div>
                    </a>
                </article>
                <article class="ultimas-noticias-article">
                    <a href="/index">
                        <div class="ultimas-noticias-imagem-box">
                            <img class="ultimas-noticias-imagem" src="img/news/news-09.jpeg">
                        </div>
                    <div class="ultimas-noticias-article">
                        <div class="ultimas-noticias-article-categoria">
                            <img class="ultimas-noticias-categoria-imagem" src="img/categoria-criticas.svg">
                            <h4 class="ultimas-noticias-article-data-hora">15/01/2022 15:07</h4>
                        </div>
                        <div>
                            <h2>Titulo da ultima noticia</h2>
                            <p>Descritivo da ultima noticia em mais palavras que o titulo</p>
                        </div>
                    </a>
                </article>
                <article class="ultimas-noticias-article">
                    <a href="/index">
                        <div class="ultimas-noticias-imagem-box">
                            <img class="ultimas-noticias-imagem" src="img/news/news-05.jpeg">
                        </div>
                    <div class="ultimas-noticias-article">
                        <div class="ultimas-noticias-article-categoria">
                            <img class="ultimas-noticias-categoria-imagem" src="img/categoria-filmes.svg">
                            <h4 class="ultimas-noticias-article-data-hora">15/01/2022 15:07</h4>
                        </div>
                        <div>
                            <h2>Titulo da ultima noticia</h2>
                            <p>Descritivo da ultima noticia em mais palavras que o titulo</p>
                        </div>
                    </a>
                </article>
                <article class="ultimas-noticias-article">
                    <a href="/index">
                        <div class="ultimas-noticias-imagem-box">
                            <img class="ultimas-noticias-imagem" src="img/news/news-06.jpeg">
                        </div>
                    <div class="ultimas-noticias-article">
                        <div class="ultimas-noticias-article-categoria">
                            <img class="ultimas-noticias-categoria-imagem" src="img/categoria-reviews.svg">
                            <h4 class="ultimas-noticias-article-data-hora">15/01/2022 15:07</h4>
                        </div>
                        <div>
                            <h2>Titulo da ultima noticia</h2>
                            <p>Descritivo da ultima noticia em mais palavras que o titulo</p>
                        </div>
                    </a>
                </article>
                <article class="ultimas-noticias-article">
                    <a href="/index">
                        <div class="ultimas-noticias-imagem-box">
                            <img class="ultimas-noticias-imagem" src="img/news/news-07.jpeg">
                        </div>
                    <div class="ultimas-noticias-article">
                        <div class="ultimas-noticias-article-categoria">
                            <img class="ultimas-noticias-categoria-imagem" src="img/categoria-filmes.svg">
                            <h4 class="ultimas-noticias-article-data-hora">15/01/2022 15:07</h4>
                        </div>
                        <div>
                            <h2>Titulo da ultima noticia</h2>
                            <p>Descritivo da ultima noticia em mais palavras que o titulo</p>
                        </div>
                    </a>
                </article>
                <article class="ultimas-noticias-article">
                    <a href="/index">
                        <div class="ultimas-noticias-imagem-box">
                            <img class="ultimas-noticias-imagem" src="img/news/news-08.jpeg">
                        </div>
                    <div class="ultimas-noticias-article">
                        <div class="ultimas-noticias-article-categoria">
                            <img class="ultimas-noticias-categoria-imagem" src="img/categoria-audio.svg">
                            <h4 class="ultimas-noticias-article-data-hora">15/01/2022 15:07</h4>
                        </div>
                        <div>
                            <h2>Titulo da ultima noticia</h2>
                            <p>Descritivo da ultima noticia em mais palavras que o titulo</p>
                        </div>
                    </a>
                </article>
            </section>
        </section>
    </body>
</x-layout>