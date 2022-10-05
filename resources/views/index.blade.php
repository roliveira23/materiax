<x-layout>
    @section('title', 'Matéria X - Ficção Científica')

    <html>
        <body>
            <main>
                <section class="destaque-posts">
                    <div class="destaque-post">
                        <img class="destaque-post-imagem" src="img/movies.jpeg" alt="Imagem destaque post 1">
                        <h1 class="destaque-post-titulo">Titulo Post 1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>

                    <div class="destaque-post">
                        <img class="destaque-post-imagem" src="img/2001.jpeg" alt="Imagem destaque post 2">
                        <h1>Titulo Post 2</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>

                    <div class="destaque-post">
                        <img class="destaque-post-imagem" src="img/sidonia.jpeg" alt="Imagem destaque post 3">     
                        <h1>Titulo Post 3</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        
                    </div>
                </section>


                <section  class="destaques-secundarios">
                    <div class="destaques-secundarios-maiores">
                        <div class="destaque-secundario-post">
                            <a><img class="destaque-secundario-imagens" src="/img/posts/junkyard.jpeg"></a>
                            <p class="destaque-secundario-titulos">Titulo post secundario 1</p>
                            <p class="destaque-secundario-info">Info do titulo secundario vai descrever o que está escrito no post</p>
                        </div>
                        <div class="destaque-secundario-post">
                            <a><img class="destaque-secundario-imagens" src="/img/posts/indepence-day.jpeg"></a>
                            <p class="destaque-secundario-titulos">Titulo post secundario 2</p>
                            <p class="destaque-secundario-info">Info do titulo secundario vai descrever o que está escrito no post</p>
                        </div>
                        <div class="destaque-secundario-post">
                            <a><img class="destaque-secundario-imagens" src="/img/posts/mass-effect.jpeg"></a>
                            <p class="destaque-secundario-titulos">Titulo post secundario 3</p>
                            <p class="destaque-secundario-info">Info do titulo secundario vai descrever o que está escrito no post</p>
                        </div>
                        <div class="destaque-secundario-post">
                            <a><img class="destaque-secundario-imagens" src="/img/posts/outer-worlds.jpeg"></a>
                            <p class="destaque-secundario-titulos">Titulo post secundario 4</p>
                            <p class="destaque-secundario-info">Info do titulo secundario vai descrever o que está escrito no post</p>
                        </div>
                    </div>
                    <div class="destaques-secundarios-lista">
                        <div class="destaques-secundarios-lista-titulo">
                            <img class="destaques-secundarios-lista-titulo-imagem" src="img/highlights-01.svg">
                            <p>Mais Destaques</p>
                        </div>
                        <div class="destaques-secundarios-lista-flex">
                            <h2>1</h2>
                            <a href="/index">Post 1 lista destaques secundarios</a>
                        </div>
                        <div class="destaques-secundarios-lista-flex">
                            <h2>2</h2>
                            <a href="/index">Post 2 lista destaques secundarios</a>
                        </div>
                        <div class="destaques-secundarios-lista-flex">
                            <h2>3</h2>
                            <a href="/index">Post 3 lista destaques secundarios</a>
                        </div>
                        <div class="destaques-secundarios-lista-flex">
                            <h2>4</h2>
                            <a href="/index">Post 4 lista destaques secundarios</a>
                        </div>
                        <div class="destaques-secundarios-lista-flex">
                            <h2>5</h2>
                            <a href="/index">Post 5 lista destaques secundarios</a>
                        </div>
                        <div class="destaques-secundarios-lista-flex">
                            <h2>6</h2>
                            <a href="/index">Post 6 lista destaques secundarios</a>
                        </div>
                        <div class="destaques-secundarios-lista-flex">
                            <h2>7</h2>
                            <a href="/index">Post 7 lista destaques secundarios</a>
                        </div>
                        <div class="destaques-secundarios-lista-flex">
                            <h2>8</h2>
                            <a href="/index">Post 8 lista destaques secundarios</a>
                        </div>
                        <div class="destaques-secundarios-lista-flex">
                            <h2>9</h2>
                            <a href="/index">Post 9 lista destaques secundarios</a>
                        </div>
                        <div class="destaques-secundarios-lista-flex">
                            <h2>10</h2>
                            <a href="/index">Post 10 lista destaques secundarios</a>
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
            

                <section class="criticas">
                    <h1>Criticas</h1>
                </section>
            </main>
        </body>

    </html>

</x-layout>
