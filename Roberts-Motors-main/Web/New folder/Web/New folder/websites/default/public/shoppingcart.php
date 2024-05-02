<?php

require '../templates/loadtemplate.php';

$output = loadtemplate('../templates/shoppingcart.html.php',[]);

echo loadtemplate('../templates/layout.html.php', [
	'title' => 'Robert Motors',
	'output' => $output,
]);