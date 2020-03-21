<?php

//var_dump($_GET);

echo '<hr>';

echo '<a href="sobre">Sobre</a>';

echo '<a href="contato">Contato</a>';

echo '<a href="home">Home</a>';

?>

<h1>Home</h1>
<hr>

<?php

if ($_GET) {
	$url = explode('/', $_GET['url']);

	require_once 'pages/'.$url[0].'.php';
}


/*if (isset($url)) {
	require_once 'pages/'.$url[0].'.php';
}

if (isset($_GET['pagina'])) {
	require_once  'pages/'.$_GET['pagina'].'.php';
}*/