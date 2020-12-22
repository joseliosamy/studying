<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="styles/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="palavras-chave,do,site">
    <title>Projeto one</title>
</head>
<body>
    <header>
        <div class="w75 center">
        <div class="logo">Logo</div>
        <nav class="desktop">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
        <nav class="mobile" style="display: none;">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
        </div>
        
    </header>
    <div id="container">
        <section class="banner-principal">
            <div class="center w75 center h100">
                <form action="">
                    <h2>Qual o seu melhor email</h2>
                    <div class="box">
                        <input class="input" type="email" name="email" placeholder="Seu email" required>    
                        <input class="input" type="submit" name="acao" value="Cadastrar">
                    </div>     
                </form>
            </div>
        </section> 

        <section class="descricao-autor">
            <div class="center flex w75">
                <div class="autor">
                    <div class="content">
                        <h2>Josélio Samy</h2>
                        <p>Sed nec sollicitudin dui, sit amet accumsan magna. Phasellus pulvinar sem lacus, in fermentum sem suscipit nec. Duis felis neque, mattis nec molestie nec, viverra ac odio. Etiam elementum imperdiet convallis. Suspendisse leo neque, volutpat non dictum ut, fermentum vel est.</p>
                        <p> Ut efficitur accumsan odio, ut lobortis risus pellentesque id. Duis tristique feugiat dolor, porta rhoncus leo pulvinar sit amet. Sed fringilla feugiat luctus. Ut ut malesuada ex. Integer porta nulla ipsum. Pellentesque vehicula blandit libero quis suscipit.</p>
                    </div>
                    

                    <div class="autor-image">

                        <img src="images/yo.jpg" alt="">
                    </div><!--w50-->
                </div>
                
            </div><!--w50-->
        </section>

        <section class="especialidades">
            <div class="center w75">
                    <h2 class="title">Especialidades</h2>

                <div class="flex">
                    <div class="box-especialidade">

                        <h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
                        <h3>CSS3</h3>
                        <p>Duis tristique feugiat dolor, porta rhoncus leo pulvinar sit amet. Sed fringilla feugiat luctus. Ut ut malesuada ex. Integer porta nulla ipsum. Pellentesque vehicula blandit libero quis suscipit.</p>
                    </div><!-- box-especialidade -->
                    <div class="box-especialidade">

                        <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
                        <h3>HTML5</h3>
                        <p>Duis tristique feugiat dolor, porta rhoncus leo pulvinar sit amet. Sed fringilla feugiat luctus. Ut ut malesuada ex. Integer porta nulla ipsum. Pellentesque vehicula blandit libero quis suscipit.</p>
                    </div><!-- box-especialidade -->
                    <div class="box-especialidade">

                        <h3><i class="fa fa-codepen" aria-hidden="true"></i></h3>
                        <h3>JavaScript</h3>
                        <p>Duis tristique feugiat dolor, porta rhoncus leo pulvinar sit amet. Sed fringilla feugiat luctus. Ut ut malesuada ex. Integer porta nulla ipsum. Pellentesque vehicula blandit libero quis suscipit.</p>
                    </div><!-- box-especialidade -->
                </div><!--flex-->
            </div><!--center,w75--> 
        </section>

        <section class="extras">
            <div class="flex center w75">
                <div class="depoimentos w50">
                    <h2 class="title">Depoimentos</h2>
                    
                    <div class="depoimentos-single">
                        <p class="depoimento-descricao">

                        Sed nec sollicitudin dui, sit amet accumsan magna. Phasellus pulvinar sem lacus, in fermentum sem suscipit nec.</p>
                        <p class="nome-autor">Lorem Ipsum</p>
                    </div>
                    <div class="depoimentos-single">
                        <p class="depoimento-descricao">

                        Sed nec sollicitudin dui, sit amet accumsan magna. Phasellus pulvinar sem lacus, in fermentum sem suscipit nec.</p>
                        <p class="nome-autor">Lorem Ipsum</p>
                    </div>
                    <div class="depoimentos-single">
                        <p class="depoimento-descricao">

                        Sed nec sollicitudin dui, sit amet accumsan magna. Phasellus pulvinar sem lacus, in fermentum sem suscipit nec.</p>
                        <p class="nome-autor">Lorem Ipsum</p>
                    </div>
                </div><!--w50-->
                
                <div class="servicos w50">
                    <h2 class="title">Serviços</h2>
                        <ul>
                            <li>Duis tristique feugiat dolor, porta rhoncus leo pulvinar sit amet. Sed fringilla feugiat luctus. Ut ut malesuada ex. Integer porta nulla ipsum. Pellentesque vehicula blandit libero quis suscipit.
                            </li>

                            <li>Duis tristique feugiat dolor, porta rhoncus leo pulvinar sit amet. Sed fringilla feugiat luctus. Ut ut malesuada ex. Integer porta nulla ipsum. Pellentesque vehicula blandit libero quis suscipit.
                            </li>

                            <li>Duis tristique feugiat dolor, porta rhoncus leo pulvinar sit amet. Sed fringilla feugiat luctus. Ut ut malesuada ex. Integer porta nulla ipsum. Pellentesque vehicula blandit libero quis suscipit.
                            </li>
                        </ul> 
                </div><!--w50-->
            </div><!--center-->
        </section>  
    </div>

    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div>
    </footer>
    
    <script src="https://use.fontawesome.com/6811180638.js"></script>
</body>
</html>