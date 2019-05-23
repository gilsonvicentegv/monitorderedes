<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="css/estilo.css">

<title> Monitor de redes </title>
</head>
<body>
<div class="container">
<h3> Monitor de redes </h3>
<form method="post" class="form-inline">
<div class="row">

<div class="col">
<input type="text" placeholder="nome"name="nome do computador" class="form-control">
</div>

<div class="col">
<input type="text" placeholder="ip" name="ip" class="form-control">
</div>

<input type="submit" class="btn btn-outline-secondary" value="salvar"/>
</form>
<div class="row">
<div class="col">
<div class="bloco online"></div>
<div class="bloco offline"></div>

</div>
</div>
</body>
</html>