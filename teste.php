<?php

$url = file_get_contents('http://universointeligente.org/saiba-por-que-algumas-pessoas-tem-medo-de-palhacos/');
preg_match('/<img(.*)/', $url, $firstContent);
foreach( $firstContent as $content ){		
		preg_match('/http([\w\W]*?)png|jpg/', $content, $finalContent);
		var_dump($finalContent);
}

var_dump($firstContent);
