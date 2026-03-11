<!doctype html>
<html lang="pt">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contato - Cursos Profissionais</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.banner{
    background: url("https://picsum.photos/1200/350?7") center/cover no-repeat;
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
<a class="nav-link" href="sobre.html">Sobre</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Cursos</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="#">Contato</a>
</li>

</ul>
</div>

</div>
</nav>

<!-- BANNER -->
<section class="banner">
<div>
<h1>Entre em Contato</h1>
<p>Fale conosco para tirar dúvidas ou obter mais informações</p>
</div>
</section>

<!-- INFORMAÇÕES DE CONTATO -->
<div class="container mt-5">

<h2 class="text-center mb-4">Informações de Contato</h2>

<div class="row text-center">

<div class="col-md-4">
<h4>📞 Telefone</h4>
<p>(11) 4002-8922</p>
<p>(11) 98888-7777</p>
</div>

<div class="col-md-4">
<h4>📧 Email</h4>
<p>contato@cursosprofissionais.com</p>
<p>atendimento@cursosprofissionais.com</p>
</div>

<div class="col-md-4">
<h4>📍 Endereço</h4>
<p>Rua da Educação, 123</p>
<p>São Paulo - SP</p>
</div>

</div>

</div>

<!-- FORMAS DE CONTATO -->
<div class="container mt-5">

<h2 class="text-center mb-4">Envie uma Mensagem</h2>

<div class="row justify-content-center">

<div class="col-md-8">

<form>

<div class="mb-3">
<label class="form-label">Nome</label>
<input type="text" class="form-control" placeholder="Digite seu nome">
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" class="form-control" placeholder="Digite seu email">
</div>

<div class="mb-3">
<label class="form-label">Mensagem</label>
<textarea class="form-control" rows="4" placeholder="Digite sua mensagem"></textarea>
</div>

<li class="nav-item">
<a class="nav-link" href="{{route('pagina-principal')}}">Principal</a>
</li>

<button type="submit" class="btn btn-primary">Enviar Mensagem</button>

</form>

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