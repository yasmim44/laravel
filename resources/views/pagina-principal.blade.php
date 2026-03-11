<!doctype html>
<html lang="pt">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Site de Cursos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.hero{
    background: url("https://picsum.photos/1200/400") center/cover no-repeat;
    height: 400px;
    color: white;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
}
</style>

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand" href="#">Cursos Profissionais</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a class="nav-link" href="#">Desenvolvimento de Sistemas</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{route('pagina-sobre')}}">Sobre</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{route('pagina-contato')}}">Contato</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Administração</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Meio Ambiente</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Farmácia</a>
</li>
</ul>
</div>
</div>
</nav>

<!-- BANNER -->
<section class="hero">
<div>
<h1>Bem-vindo ao Portal de Cursos</h1>
<p>Prepare-se para o mercado de trabalho com nossos cursos profissionalizantes.</p>
<button class="btn btn-primary">Conheça nossos cursos</button>
</div>
</section>

<!-- CURSOS -->
<div class="container mt-5">

<h2 class="text-center mb-4">Nossos Cursos</h2>

<div class="row">

<!-- Desenvolvimento -->
<div class="col-md-3">
<div class="card">
<img src="https://picsum.photos/300/200?1" class="card-img-top">
<div class="card-body">
<h5 class="card-title">Desenvolvimento de Sistemas</h5>
<p class="card-text">
Aprenda programação, criação de sistemas e desenvolvimento web e mobile.
</p>
<a href="#" class="btn btn-primary">Saiba mais</a>
</div>
</div>
</div>

<!-- Administração -->
<div class="col-md-3">
<div class="card">
<img src="https://picsum.photos/300/200?2" class="card-img-top">
<div class="card-body">
<h5 class="card-title">Administração</h5>
<p class="card-text">
Curso voltado para gestão empresarial, finanças e organização de empresas.
</p>
<a href="#" class="btn btn-primary">Saiba mais</a>
</div>
</div>
</div>

<!-- Meio Ambiente -->
<div class="col-md-3">
<div class="card">
<img src="https://picsum.photos/300/200?3" class="card-img-top">
<div class="card-body">
<h5 class="card-title">Meio Ambiente</h5>
<p class="card-text">
Estude sustentabilidade, preservação ambiental e gestão de recursos naturais.
</p>
<a href="#" class="btn btn-primary">Saiba mais</a>
</div>
</div>
</div>

<!-- Farmácia -->
<div class="col-md-3">
<div class="card">
<img src="https://picsum.photos/300/200?4" class="card-img-top">
<div class="card-body">
<h5 class="card-title">Farmácia</h5>
<p class="card-text">
Aprenda sobre medicamentos, atendimento em farmácia e manipulação básica.
</p>
<a href="#" class="btn btn-primary">Saiba mais</a>
</div>
</div>
</div>

</div>
</div>

<!-- RODAPÉ -->
<footer class="bg-dark text-white text-center p-3 mt-5">
<p>© 2026 - Portal de Cursos Profissionalizantes</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>