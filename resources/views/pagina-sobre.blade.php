<!doctype html>
<html lang="pt">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sobre - Cursos Profissionais</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.banner{
    background: url("https://picsum.photos/1200/350?5") center/cover no-repeat;
    height:300px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    text-align:center;
}
</style>

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand" href="index.html">Cursos Profissionais</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.html">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{route('pagina-principal')}}">Principal</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{route('pagina-contato')}}">Contato</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="#">Sobre</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Cursos</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Contato</a>
</li>

</ul>
</div>
</div>
</nav>

<!-- BANNER -->
<section class="banner">
<div>
<h1>Sobre Nossa Empresa</h1>
<p>Conheça nossa história e nossa missão na educação</p>
</div>
</section>

<!-- HISTÓRIA -->
<div class="container mt-5">

<div class="row">

<div class="col-md-6">
<h2>Nossa História</h2>

<p>
A empresa <strong>Cursos Profissionais</strong> foi fundada com o objetivo de
oferecer educação acessível e de qualidade para jovens e adultos que desejam
entrar no mercado de trabalho.
</p>

<p>
Desde a sua criação, a instituição tem investido em cursos técnicos e
profissionalizantes nas áreas mais procuradas pelo mercado, como
Desenvolvimento de Sistemas, Administração, Meio Ambiente e Farmácia.
</p>

<p>
Ao longo dos anos, milhares de alunos foram formados e hoje atuam em
empresas de diversos setores, contribuindo para o desenvolvimento
profissional e tecnológico da sociedade.
</p>

<p>
Nosso compromisso é continuar oferecendo ensino de qualidade,
com professores capacitados e infraestrutura moderna para preparar
os alunos para os desafios do mercado.
</p>

</div>

<div class="col-md-6">
<img src="https://picsum.photos/500/350?6" class="img-fluid rounded">
</div>

</div>

</div>

<!-- MISSÃO VISÃO VALORES -->
<div class="container mt-5">

<h2 class="text-center mb-4">Nossos Valores</h2>

<div class="row text-center">

<div class="col-md-4">
<h4>Missão</h4>
<p>
Oferecer ensino profissionalizante de qualidade, preparando alunos
para o mercado de trabalho e para o desenvolvimento de suas carreiras.
</p>
</div>

<div class="col-md-4">
<h4>Visão</h4>
<p>
Ser referência em educação profissional, formando profissionais
capacitados e inovadores.
</p>
</div>

<div class="col-md-4">
<h4>Valores</h4>
<p>
Compromisso com a educação, ética, inovação,
responsabilidade social e respeito aos alunos.
</p>
</div>

</div>

</div>

<!-- RODAPÉ -->
<footer class="bg-dark text-white text-center p-3 mt-5">
<p>© 2026 - Cursos Profissionais</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>