<?php

require '../templates/loadtemplate.php';

$output = loadtemplate('../templates/success.html.php',[]);

echo loadtemplate('../templates/layout.html.php', [
	'title' => 'Robert Motors',
	'output' => $output,
]);