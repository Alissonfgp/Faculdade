<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, NULL);
setlocale(LC_ALL, 'pt_BR');

$resultado = (string) trim($_REQUEST['resultado']);
if ($resultado != NULL) {
	echo '
		<head>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="css/style.css" media="screen">
			<title>Signos</title>
		</head>
		<div class="title-text"> Seu signo é:</br></br></div>
	';

	$signosXML = simplexml_load_file('signos.xml');
	$anoAtual = date("Y", time()); //obtendo ano atual para evitar probleminhas, existem maneiras melhores do que fazer isso, mas como é pra ser um codigo simples.
	$dataRequisitada = new DateTime(date("d-m-".$anoAtual."", utf8_encode(ucwords(strtotime($resultado)))));
	$found = false;
	foreach($signosXML as $registro) {
		$dataInicial = new DateTime(date("d-m-".$anoAtual."", utf8_encode(ucwords(strtotime($registro->dataInicio)))));
		$dataFinal = new DateTime(date("d-m-".$anoAtual."", utf8_encode(ucwords(strtotime($registro->dataFim)))));
		$signoNome = htmlspecialchars($registro->signoNome);
		$signoDesc = htmlspecialchars($registro->descricao);

		if ($dataRequisitada >= $dataInicial && $dataRequisitada <= $dataFinal && !$found) { //verificando as datas iniciais e finais para comparar com a data requisitada
			echo '
				<div class="search-box">
					<div class="signo-nome">'.$signoNome.'</div>
					<div class="desc-text">'.$signoDesc.'</div>
				</div>
			';
			$found = true;
		} 
	}

	//Caso não encontre o signo ou o mesmo seja capricórnio, vai cair aqui, já que o mês não cai dentro da verificação padrão
	if (!$found) {
		echo '
		<div class="search-box">
			<div class="signo-nome">Capricórnio</div>
			<div class="desc-text">Quem tem sol em Capricórnio costuma ter seus propósitos e metas bem definidos. Signo de praticidade que segue as regras do jogo tem total noção dos seus limites. Capricórnio é maduro e bem humorado, mas também pode ser frio nas relações e um tanto pessimista.</div>		
		</div>
	';
}

	echo '		
		</br></br><div class="return-text">Realizar nova consulta</div>
		<a href="http://127.0.0.1/">
			<center><input type="submit"></center></div>
		</a>
	';
} else {
	echo '
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css" media="screen">
		<title>Signos</title>
	</head>
	<div class="title-text"> ERRO</br></br></div>
	</br></br><div class="return-text">Por favor, digite uma data valida.</div>
		<a href="http://127.0.0.1/">
			<center><input type="submit"></center></div>
		</a>
	';
}
