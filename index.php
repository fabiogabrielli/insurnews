<?php include "header.php" ?>
<?php include "conn.php"?>
 
<!-- HEADER --> 

<header id="menu" class="container-fluid">
    <div class="menu container">
        <div class="logo"><img src="imgs/insur_news_logo.svg" alt=""></div>
        <nav> link 01 | link 02 | link 03</nav>
    </div>
</header>

<!-- HERO -->

<?php 
$sql = "SELECT titulo_news, sub_news, categoria_news FROM news WHERE categoria_news = 'exclusiva' LIMIT 4";
$resultado = mysqli_query($conecta, $sql);

while ($row = $resultado->fetch_assoc()) {
    $exclusiva[] = $row;
}

$sql = "SELECT titulo_news, sub_news, categoria_news FROM news WHERE categoria_news = 'press release' LIMIT 4";
$resultado = mysqli_query($conecta, $sql);

while ($row = $resultado->fetch_assoc()) {
    $press[] = $row;
}

?>

<main id="hero" class="container-fluid">
    <div class="hero container">
        <div class="destaquePrincipal">
            <span class="tag tagExclusiva"><?= $exclusiva[0]["categoria_news"]; ?></span>
            <h1 class="Titulo"><?= $exclusiva[0]["titulo_news"]; ?></h1>
            <h4 class="SubTitulo"><?= $exclusiva[0]["sub_news"]; ?></h4>
        </div>
        <div class="destaqueSecundario01">
            <span class="tag tagExclusiva"><?= $exclusiva[1]["categoria_news"]; ?></span>
            <h3 class="Titulo"><?= $exclusiva[1]["titulo_news"]; ?></h3>
            <h4 class="SubTitulo"><?= $exclusiva[1]["titulo_news"]; ?></h4>
        </div>
        <div class="destaqueSecundario02">
            <span class="tag tagPress"><?= $press[0]["categoria_news"]; ?></span>
            <h3 class="Titulo"><?= $press[0]["titulo_news"]; ?></h3>
            <h4 class="SubTitulo"><?= $press[0]["titulo_news"]; ?></h4>
        </div>    
    </div>
</main>

<!-- BANNER -->

<section class="banner01">
    <div class="efeitoBanner01">PUBLICIDADE</div>
</section>


<!-- SECTION 4 DESTAQUES -->

<section class="container-fluid">
    <div class="destaques container">
        <div class="exclusiva01">
            <span class="tag tagExclusiva"><?= $exclusiva[2]["categoria_news"]; ?></span>
            <h3 class="Titulo"><?= $exclusiva[2]["titulo_news"]; ?></h3>
            <h4 class="SubTitulo"><?= $exclusiva[2]["titulo_news"]; ?></h4>
        </div>
        <div class="exclusiva02">
            <span class="tag tagExclusiva"><?= $exclusiva[3]["categoria_news"]; ?></span>
            <h3 class="Titulo"><?= $exclusiva[3]["titulo_news"]; ?></h3>
            <h4 class="SubTitulo"><?= $exclusiva[3]["titulo_news"]; ?></h4>
        </div>
        <div class="press01">
            <span class="tag tagPress"><?= $press[1]["categoria_news"]; ?></span>
            <h3 class="Titulo"><?= $press[1]["titulo_news"]; ?></h3>
            <h4 class="SubTitulo"><?= $press[1]["titulo_news"]; ?></h4>
        </div>
        <div class="press02">
            <span class="tag tagPress"><?= $press[2]["categoria_news"]; ?></span>
            <h3 class="Titulo"><?= $press[2]["titulo_news"]; ?></h3>
            <h4 class="SubTitulo"><?= $press[2]["titulo_news"]; ?></h4>
        </div>
    </div>
</section>

<!-- EVENTOS -->

<section id="eventos" class="container-fluid">
    <div class="container">
        <h5 class="tagEventos">EVENTOS</h5>
        <h1 class="Titulo titAgenda">Confira a agenda de eventos do mercado segurador</h1>
    </div>
    <div class="eventos container">
        <div class="evento">01</div>
        <div class="evento">02</div>
        <div class="evento">03</div>
        <div class="evento">04</div>
        <div class="evento">05</div>
        <div class="evento">06</div>
        <div class="evento">07</div>
        <div class="evento">08</div>
    </div>
</section>

<!-- BANNER -->

<section class="banner01">
    <div class="efeitoBanner01">PUBLICIDADE</div>
</section>

<!-- DEMAIS NEWS -->

<section id="maisNews" class="container-fluid">
    <div class="container">
        <div class="cardNews">
            <div class="cardNewsImg"></div>
            <h5 class="tagMaisNews">EVENTOS</h5>
            <h3>Teste de título</h3>
            <h4>Aqui vai o subtítulo da matéria, exclusiva ou press release</h4>
        </div>
        <div class="cardNews">
            <div class="cardNewsImg"></div>
            <h5 class="tagMaisNews">EVENTOS</h5>
            <h3>Teste de título</h3>
            <h4>Aqui vai o subtítulo da matéria, exclusiva ou press release</h4>
        </div>
        <div class="cardNews">
            <div class="cardNewsImg"></div>
            <h5 class="tagMaisNews">EVENTOS</h5>
            <h3>Teste de título</h3>
            <h4>Aqui vai o subtítulo da matéria, exclusiva ou press release</h4>
        </div>
        <div class="cardNews">
            <div class="cardNewsImg"></div>
            <h5 class="tagMaisNews">EVENTOS</h5>
            <h3>Teste de título</h3>
            <h4>Aqui vai o subtítulo da matéria, exclusiva ou press release</h4>
        </div>
        <div class="cardNews">
            <div class="cardNewsImg"></div>
            <h5 class="tagMaisNews">EVENTOS</h5>
            <h3>Teste de título</h3>
            <h4>Aqui vai o subtítulo da matéria, exclusiva ou press release</h4>
        </div>
        <div class="cardNews">
            <div class="cardNewsImg"></div>
            <h5 class="tagMaisNews">EVENTOS</h5>
            <h3>Teste de título</h3>
            <h4>Aqui vai o subtítulo da matéria, exclusiva ou press release</h4>
        </div>
        <div class="cardNews">
            <div class="cardNewsImg"></div>
            <h5 class="tagMaisNews">EVENTOS</h5>
            <h3>Teste de título</h3>
            <h4>Aqui vai o subtítulo da matéria, exclusiva ou press release</h4>
        </div>
        <div class="cardNews">
            <div class="cardNewsImg"></div>
            <h5 class="tagMaisNews">EVENTOS</h5>
            <h3>Teste de título</h3>
            <h4>Aqui vai o subtítulo da matéria, exclusiva ou press release</h4>
        </div>
    </div>
</section>

<!-- BANNER -->

<section class="banner01">
    <div class="efeitoBanner01">PUBLICIDADE</div>
</section>

<!-- VAGAS -->

<section id="vagas" class="container-fluid">
    <div class="container">
        <h1 class="Titulo titVagas">Procurando um trampo?</h1>
    </div>
    <div class="vagas container">
        <div class="vaga">01</div>
        <div class="vaga">02</div>
        <div class="vaga">03</div>
        <div class="vaga">04</div>
        <div class="vaga">05</div>
        <div class="vaga">06</div>
        <div class="vaga">07</div>
        <div class="vaga">08</div>
    </div>
</section>



<?php include "footer.php" ?>